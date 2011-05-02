<?php

/**
 * feed actions.
 *
 * @package    Spark
 * @subpackage feed
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class feedActions extends sfActions
{	
  public function preExecute()
  { 
 	$this->network = $this->getUser()->getNetworkFromSession($this->getUser()->getNetworkId()); 
	 		
 	$this->networkuser = $this->network->getUser($this->getUser()->getUserid());
  }
  
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  { 
    $this->feedsForUser = $this->networkuser->getFeeds();
  
    $this->connectionsWithFeeds = $this->networkuser->getFeedsForFriends()->fetchArray();
    
    $this->form = new FrontendFeedForm(  null, array( 'currentUser' => $this->getUser())  );
  }
  
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeAddfeed(sfWebRequest $request)
  {
   $this->form = new FrontendFeedForm(  null, array( 'currentUser' => $this->getUser())  );
   
	if ($this->request->isMethod('post'))
	{			
		  $this->form->bind(
		    $request->getParameter($this->form->getName()),
		    $request->getFiles($this->form->getName())
		  );
		  
	      if ($this->form->isValid())
	      {	
	      	$feed = $this->form->save();
	      	
	      	$notification = new Notification();
			$notification->setNetworkId($this->network->getId());
			$notification->setNetworkuserId($this->networkuser->getId());
			$notification->setNotificationtypeId(2);
			$notification->save();
	      	
	      	$this->getUser()->setFlash('notice', sprintf('Your feed has been added.'));
	      	
	      	$this->redirect($this->generateUrl('feed_index', $this->network));
	      }
	      
  }else {
  	
  }
 }
}
