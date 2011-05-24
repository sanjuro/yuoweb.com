<?php

/**
 * navigation Components
 *
 * @package    yUoweb
 * @subpackage description
 * @author     Shadley Wentzel
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class descriptionComponents extends sfComponents
{
  
  public function executeDefault()
  {
 	if($this->getUser()->getUserid()) {
 	$this->network = Doctrine_Core::getTable('Network')
	           		->findOneBySlug($this->getUser()->getNetworkId());  
  
 	$this->networkuser = $this->network->getUser($this->getUser()->getUserId());
 	}
  }
  
}