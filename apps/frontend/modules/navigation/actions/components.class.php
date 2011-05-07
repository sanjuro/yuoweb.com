<?php

/**
 * navigation Components
 *
 * @package    yUoweb
 * @subpackage navigation
 * @author     Shadley Wentzel
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class navigationComponents extends sfComponents
{
  
  public function executeDefault()
  {
 	if($this->getUser()->getUserid()) {
 	$this->network = Doctrine_Core::getTable('Network')
	           		->findOneBySlug($this->getUser()->getNetworkId());  
  
 	$this->networkuser = $this->network->getUser($this->getUser()->getUserId());
 	}
  }
  
  public function executeMessages()
  {
 	$this->network = Doctrine_Core::getTable('Network')
	           		->findOneBySlug($this->getUser()->getNetworkId()); 
 	
 	$this->networkuser = $this->network->getUser($this->getUser()->getUserid());
  }
  
  public function executePhotos()
  {
 	$this->network = Doctrine_Core::getTable('Network')
	           		->findOneBySlug($this->getUser()->getNetworkId()); 
 	
 	$this->networkuser = $this->network->getUser($this->getUser()->getUserid());
  }
  
  public function executeFriends()
  {
 	$this->network = Doctrine_Core::getTable('Network')
	           		->findOneBySlug($this->getUser()->getNetworkId()); 
 	
 	$this->networkuser = $this->network->getUser($this->getUser()->getUserid());
  }
  
  public function executeFeeds()
  {
 	$this->network = Doctrine_Core::getTable('Network')
	           		->findOneBySlug($this->getUser()->getNetworkId()); 
 	
 	$this->networkuser = $this->network->getUser($this->getUser()->getUserid());
  }
  
  public function executeSpeakout()
  {
 	$this->network = Doctrine_Core::getTable('Network')
	           		->findOneBySlug($this->getUser()->getNetworkId()); 
 	
 	$this->networkuser = $this->network->getUser($this->getUser()->getUserid());
  }
  
  public function executeWebuy()
  {
 	$this->network = Doctrine_Core::getTable('Network')
	           		->findOneBySlug($this->getUser()->getNetworkId()); 
 	
 	$this->networkuser = $this->network->getUser($this->getUser()->getUserid());
  }

}
