<?php

/**
 * network components.
 *
 * @package    Spark
 * @subpackage network
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class networkComponents extends sfComponents
{
    public function executeGetnetworkdropdown()
    {
  		$client = Doctrine_Core::getTable('Client')->findOneById($this->clientid);
  		
    	if($this->getUser()->hasGroup('admin')){
			$this->networks = Doctrine_Core::getTable('Network')->getActiveNetworks()->execute(); 
		}else{
			$this->networks = $client->getActiveNetworks()->execute(); 
		}

    } 
	
	public function executeGetfeaturenavigation(sfWebRequest $request)  
     {       
        $this->network = Doctrine_Core::getTable('Network')->findOneById($this->networkid);  
         
        $this->networkfeatures = $this->network->getFeatures(); 
        //echo '<pre>';print_R($this->networkfeatures);exit;
     }  
}