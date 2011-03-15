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
  }
}
