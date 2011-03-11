<?php

/**
 * network actions.
 *
 * @package    Spark
 * @subpackage network
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class networkActions extends sfActions
{
  public function preExecute()
  { 
 	$this->network = Doctrine_Core::getTable('Network')
	           		->findOneById($this->request->getParameter('network_id')); 
 	
 	$this->networkuser = $this->network->getUser($this->getUser()->getUserid());
  }
  
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {  	
  	if ( !$this->networkuser )
 	{
 		$this->getUser()->signOut();
 		
 		 $this->redirect('sf_guard_signin');
 	}
  
  	$this->features = $this->network->getFeatures();
	
  	$this->newmessages = $this->networkuser->getNewMessages();
  	
  	$this->friendrequests = $this->networkuser->getNewFriendRequests();
  
  	$this->getUser()->setAttribute('network_slug', $this->network->getSlug(), 'sfGuardSecurityUser');
  	
  	$this->getUser()->setAttribute('network_user', $this->networkuser->getId(), 'sfGuardSecurityUser');
  	
  }
  
  public function executeHome(sfWebRequest $request)
  {  	
  	if (!$this->networkuser)
 	{
 		$this->getUser()->signOut();
 		
 		 $this->redirect('sf_guard_signin');
 	}
  
  	$this->features = $this->network->getFeatures();
	
  	$this->newmessages = $this->networkuser->getNewMessages();
  	
  	$this->friendrequests = $this->networkuser->getNewFriendRequests();
  	
  	$this->getUser()->setAttribute('network_slug', $this->network->getSlug(), 'sfGuardSecurityUser');
  	
  	$this->getUser()->setAttribute('network_user', $this->networkuser->getId(), 'sfGuardSecurityUser');
	
  }  
}
