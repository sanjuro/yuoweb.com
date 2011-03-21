<?php

/**
 * dashboard actions.
 *
 * @package    Spark
 * @subpackage dashboard
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */

class dashboardActions extends sfActions
{
 public function executeIndex(sfWebRequest $request)
  {
  	$this->client = Doctrine_Core::getTable('Client')->retrieveByPk($this->getUser()->getClientId());
 
  	$this->networkpager = new sfDoctrinePager(
	    'NetworkUser',
	    10
	);
	
  	if($this->getUser()->isSuperAdmin()){
  		$this->networkpager->setQuery($this->client[0]->getAllNetworks());	
  	}else {
		$this->networkpager->setQuery($this->client[0]->getNetworksForClient());	
  	}
	
	 
	$this->networkpager->setPage($request->getParameter('page', 1));	 
	$this->networkpager->init();
  	
  }
}