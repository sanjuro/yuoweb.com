<?php

/**
 * webuy actions.
 *
 * @package    yUoweb
 * @subpackage webuy
 * @author     Shadley Wentzel
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfWeBuyDealAdminActions extends sfActions
{ 
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->network = Doctrine_Core::getTable('Network')
	           ->findOneById($this->getUser()->getNetworkId());
  	
  	$this->deals = $this->network->getActiveDeals(); 
  	
  	$this->pager = new sfDoctrinePager(
	    'WebuyDeal',
	    20
	);
	$this->pager->setQuery(Doctrine::getTable('WebuyDeal')->getDealsWithProducts($this->network->getId() )); 
	$this->pager->setPage($request->getParameter('page', 1));	 
	$this->pager->init();
  }

  /**
  * Executes show action this will show the deal
  *
  * @param sfRequest $request A request object
  */
  public function executeEdit(sfWebRequest $request)
  {
    $this->network = Doctrine_Core::getTable('Network')
	           ->findOneById($this->getUser()->getNetworkId());
  	
  	$this->deal = $this->getRoute()->getObject();
  	
	$this->product = Doctrine_Core::getTable('WebuyProduct')
	           ->findOneById($this->deal->getProductId()); 
	           
    $this->form = new BackendWebuyDealForm( $this->deal, array( 'network' => $this->network) );

	if ($this->request->isMethod('post'))
	{			
		  $this->form->bind(
		    $request->getParameter($this->form->getName()),
		    $request->getFiles($this->form->getName())
		  );
		  
	      if ($this->form->isValid())
	      {	
	      	$deal = $this->form->save();
	      	     
	     	$this->getUser()->setFlash('notice', sprintf('Deal Editted'));
	      	
	      	$this->redirect($this->generateUrl('webuy_index_admin'));
	      
	      }else {
	      	      	
	      }
	}
  }
}
