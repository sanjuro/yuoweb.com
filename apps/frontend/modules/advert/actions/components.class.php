<?php

/**
 * advert actions.
 *
 * @package    Spark
 * @subpackage footer
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class advertComponents extends sfComponents
{
  public function executeDefault()
  {  	
   	$this->adverts = '';
   	
   	if($this->getUser()->getUserid()) 
   	{
 	$this->network = Doctrine_Core::getTable('Network')
	           		->findOneBySlug($this->getUser()->getNetworkId());  
 	
 	$this->networkuser = $this->network->getUser($this->getUser()->getUserid());
 	
 	$this->adverts = $this->network->getActiveAdverts()->fetchArray();
 	}
 
 	//echo '<pre>';print_r($this->adverts );exit;
  }

}
