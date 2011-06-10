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
  { 
 	$this->network = $this->getUser()->getNetworkFromSession($this->getUser()->getNetworkId()); 
	 		
 	$this->networkuser = $this->network->getUser($this->getUser()->getUserid());    

 	$this->sfGuardUser = $this->getUser()->getGuardUser();
  }
 
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {   
   $this->friends = $this->sfGuardUser->getAllFriendsForNetwork();
    	
   $this->friendsList = $this->network->getRecentPublicUsers();
   
   $this->friendRequests = $this->sfGuardUser->getNewFriendRequests();
  }
    
  public function executeShowallfriends(sfWebRequest $request)
  {
   	$this->friends = $this->sfGuardUser->getAllFriendsForNetwork();
  }
  
  public function executeShowfriend(sfWebRequest $request)
  {      	
 	$this->user = $this->getRoute()->getObject(); 

 	$this->userprofile = $this->user->getSfGuardUserWithUserProfile();
 	
 	$this->friendcount = $this->user->getAllFriendsForNetworkCount();
 		
 	$this->photos = $this->user->getPhotosForUser();   
  }
  
  public function executeAddfriendrequest(sfWebRequest $request)
  {
	$user = $this->getRoute()->getObject(); 
		
  	$connection = new Connection();
	$connection->setOwnerId($this->getUser()->getUserId());
	$connection->setRecieverId($user->getId());
	$connection->setTypeId(1);
	$connection->setStateId(2);
	$connection->save();
	
	$this->getUser()->setFlash('notice', sprintf('Friend Request sent.'));
	
	$this->redirect($this->generateUrl('networkuser_index', $this->network));
  }
  
  public function executeAcceptfriendrequest(sfWebRequest $request)
  {
  	$connection_respose = Doctrine::getTable('ConnectionResponse')->findOneById(1);
  	
  	$connection = Doctrine_Core::getTable('Connection')->findOneById($request->getParameter('connection'));
	$connection->setStateId(1);	
	$connection->setRecieverResponse($connection_respose);
	$connection->save();
	
	$this->getUser()->setFlash('notice', sprintf('Friend Request accepted.'));
	
	$this->redirect($this->generateUrl('networkuser_index', $this->network));
  }
  
 /**
  * Executes follow action that follows a friend
  *
  * @param sfRequest $request A request object
  */
  public function executeFollow(sfWebRequest $request)
  {
  	$user = $this->getRoute()->getObject(); 
  	
  	$follow = new Follow();
  	$follow->setFollowerId($this->getUser()->getUserid());
  	$follow->setFollowingId($user->getId());
	$follow->save();
	
	$this->getUser()->setFlash('notice', sprintf('Following '.$user->getUsername()));
	
	$this->redirect($this->generateUrl('networkuser_index', $this->network));
  }
  
 /**
  * Executes follow action that follows a friend
  *
  * @param sfRequest $request A request object
  */
  public function executeUnfollow(sfWebRequest $request)
  {
  	$user = $this->getRoute()->getObject(); 
  	
	$q = Doctrine_Query::create()
		->where('f.follower_id = ?', $this->getUser()->getUserid())
		->andWhere('f.following_id = ?', $user->geId())
        ->from('Follow f');
        
    $follow = $q->fetchOne();
    $follow->delete();
	
	$this->getUser()->setFlash('notice', sprintf('Not Following '.$user->getUsername()));
	
	$this->redirect($this->generateUrl('networkuser_index', $this->network));
  }
  
  public function executeBlockfriend(sfWebRequest $request)
  {
	$user = Doctrine_Core::getTable('NetworkUser')->findOneById($request->getParameter('user'));
	
  	$connection = Doctrine_Core::getTable('Connection')->findOneById($request->getParameter('user'));
  	
  	$connection_respose = Doctrine::getTable('ConnectionResponse')->findOneById(3);
	
	$q = Doctrine_Query::create()
       ->from('Connection c')
       ->where('owner_id = ?', $this->networkuser->getId())
       ->andWhere('reciever_id = ?', $user->getId());

    $connection = $q->fetchOne();
	$connection->setStateId(3);
	$connection->setRecieverResponse($connection_respose);
	$connection->save();
	
	$this->getUser()->setFlash('notice', sprintf('Friend blocked.'));
	
	$this->redirect($this->generateUrl('friend_searchfriend', $this->network));
  }
  
 /**
  * Executes show all friends action
  *
  * @param sfRequest $request A request object
  */
  public function executeShowall(sfWebRequest $request)
  {
  	$this->user = $this->getRoute()->getObject(); 
  	
  	$this->friends = $this->user->getAllFriendsForNetwork();

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
	      	
	      	$this->friends = $this->sfGuardUser->getAllFriendsForNetwork();  
	      	
	     	$this->getUser()->setFlash('notice', sprintf('Search has completed.'));
	      	
	      }else {
	      	      	
	      }
	}
  }
}