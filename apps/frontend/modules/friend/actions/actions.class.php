<?php

/**
 * friend actions.
 *
 * @package    Spark
 * @subpackage friend
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class friendActions extends sfActions
{
  public function preExecute()
  { //echo '<pre>';print_r($this->getUser()->getNetworkId());
 	$this->network = $this->getUser()->getNetworkFromSession($this->getUser()->getNetworkId()); 
	//echo '<pre>';print_r($this->network->getId());	 		
 	$this->networkuser = $this->network->getUser($this->getUser()->getUserid());
	//echo '<pre>';print_r($this->networkuser);exit;         				          
  }
 
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
   $this->friends = $this->networkuser->getAllFriendsForNetwork();
  }
    
  public function executeShowallfriends(sfWebRequest $request)
  {
   	$this->friends = $this->networkuser->getAllFriendsForNetwork();
  }
  
  public function executeShowfriend(sfWebRequest $request)
  {  
 	$this->friend = Doctrine_Core::getTable('NetworkUser')
 		->getNetworkUserWithUser($this->network->getId(), $request->getParameter('user'));  	
     
 	$this->user = $this->friend->getsfGuardUserObject();

 	$this->userprofile = $this->user->getSfGuardUserWithUserProfile()->fetchArray();
 		
 	$this->photos = $this->friend->getPhotos();   
  }
  
  public function executeAddfriendrequest(sfWebRequest $request)
  {
	$user = Doctrine_Core::getTable('NetworkUser')->findOneById($request->getParameter('user'));
	
  	$connection = new Connection();
	$connection->setOwnerId($this->networkuser->getId());
	$connection->setRecieverId($user->getId());
	$connection->setTypeId(1);
	$connection->setStateId(2);
	$connection->save();
	
	$this->getUser()->setFlash('notice', sprintf('Friend Request sent.'));
	
	$this->redirect($this->generateUrl('friend_searchfriend', $this->network));
  }
  
  public function executeBlockfriend(sfWebRequest $request)
  {
	$user = Doctrine_Core::getTable('NetworkUser')->findOneById($request->getParameter('user'));
	
  	$connection = Doctrine_Core::getTable('Connection')->findOneById($request->getParameter('user'));
	
	$q = Doctrine_Query::create()
       ->from('Connection c')
       ->where('owner_id = ?', $this->networkuser->getId())
       ->andWhere('reciever_id = ?', $user->getId());

    $connection = $q->fetchOne();
	$connection->setStateId(3);
	$connection->save();
	
	$this->getUser()->setFlash('notice', sprintf('Friend blocked.'));
	
	$this->redirect($this->generateUrl('friend_searchfriend', $this->network));
  }
	
  public function executeSearchfriend(sfWebRequest $request)
  {
    $this->form = new UserSearchForm( null, array( 'currentUser' => $this->getUser()) );
    
    $this->users = array();

	if ($this->request->isMethod('post'))
	{
		  $this->form->bind(
		    $request->getParameter($this->form->getName()),
		    $request->getFiles($this->form->getName())
		  );
	      	 
	      if ($this->form->isValid())
	      {	 	
	      	$values = $this->form->getValues();
	      	
	      	$this->users = $this->network->getPublicUsers($values['search']);
	      	
	      	$this->friends = $this->networkuser->getAllFriendsForNetwork();  
	      	//echo '<pre>';print_r($this->friends);exit;
	     	$this->getUser()->setFlash('notice', sprintf('Search has completed.'));
	      	
	      }else {
	      	      	
	      }
	}
  }
}