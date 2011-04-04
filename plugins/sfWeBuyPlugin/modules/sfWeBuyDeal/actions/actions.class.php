<?php

/**
 * webuy actions.
 *
 * @package    yUoweb
 * @subpackage webuy
 * @author     Shadley Wentzel
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfWeBuyDealActions extends sfActions
{
 /**
  * Executes preExcute  action
  *
  * @param void
  */
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
    $this->deals = $this->network->getActiveDeals(); 
  }
  
 /**
  * Executes show action
  *
  * @param sfRequest $request A request object
  */
  public function executeShow(sfWebRequest $request)
  {
    $this->deal = Doctrine_Core::getTable('WebuyDeal')
	           ->findOneBySlug($request->getParameter('deal')); 
	           
	$this->product = Doctrine_Core::getTable('WebuyProduct')
	           ->findOneById($this->deal->getProductId()); 
  }
  
 /**
  * Executes buy action, that will get the buy the discount
  *
  * @param sfRequest $request A request object
  */
  public function executeBuy(sfWebRequest $request)
  {
    $this->deal = $this->getRoute()->getObject();
    
    $networkuser = $this->network->getUser($this->getUser()->getUserid());
    
    $WebuyNetworkUser = new WebuyNetworkUser();
    $WebuyNetworkUser->setDealId($this->deal->getId());
    $WebuyNetworkUser->setNetworkUserId($networkuser->getId());
    $WebuyNetworkUser->save();
  }
}
