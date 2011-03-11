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
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  	$Client = Doctrine_Core::getTable('Client')->retrieveByPk($this->getUser()->getClientId());
  	
  	$this->networks = Doctrine_Core::getTable('Client')->getAllNetworks()->execute();  
  }
  
  public function executeAdd(sfWebRequest $request)
  {
  	$this->client =  $this->getRoute()->getObject();
  	
  	$network = new Network();
 	$network->setClientId($this->client->getId());
	$network->setNetworktypeId(2);
         
    $this->form = new NetworkForm( $network );

	if ($this->request->isMethod('post'))
	{			
		  $this->form->bind(
		    $request->getParameter($this->form->getName()),
		    $request->getFiles($this->form->getName())
		  );
		  
	      if ($this->form->isValid())
	      {	
	      	$network = $this->form->save();
	      	     
	     	$this->getUser()->setFlash('notice', sprintf('Your Network has been added but it needs to be approved by the spark admins'));
	      	
	      	$this->redirect($this->generateUrl('networks'));
	      
	      }else {
	      	      	
	      }
	}
  }
  
  public function executeShow(sfWebRequest $request)
  {
  	$this->network =  $this->getRoute()->getObject();
     
    $this->getUser()->setAttribute('network_id', $this->network->getId(), 'sfGuardSecurityUser');
    
    $this->form = new NetworkForm( $this->network );

	if ($this->request->isMethod('post'))
	{			
		  $this->form->bind(
		    $request->getParameter($this->form->getName()),
		    $request->getFiles($this->form->getName())
		  );
		  
	      if ($this->form->isValid())
	      {	
	      	$network = $this->form->save();
	      	     
	     	$this->getUser()->setFlash('notice', sprintf('Your Network has been editted.'));
	      	
	      	//$this->redirect($this->generateUrl('networks'));
	      
	      }else {
	      	      	
	      }
	}
  }
  
  public function executeChange(sfWebRequest $request)
  {
   	$networkid = $request->getParameter('network');

	$network = Doctrine_Core::getTable('Network')->findOneBySlug($networkid);

   	$this->getUser()->setNetworkId($network->getId());
   	
   	$this->getUser()->setNetworkSlug($network->getSlug());
 	
 	return sfView::NONE;
  }
}
