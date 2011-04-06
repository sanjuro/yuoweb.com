<?php

/**
 * feature actions.
 *
 * @package    Spark
 * @subpackage feature
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class featureActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeLayout(sfWebRequest $request)
  {
  	$this->network =  $this->getRoute()->getObject();
  	
  	$this->theme = $this->network->getCurrentTheme()->fetchArray();
  	
  	$this->availiblethemes = Doctrine_Core::getTable('sfMultisiteThemeThemeInfo')->getActivePublicThemes()->fetchArray();
   
  	$networksfeatures =  $this->network->getFeatures(); 

  	$this->features = array();
  	
  	foreach ($networksfeatures as $key => $value) {
  		$this->features[$key] = $value; 
  	}
  	
  	$this->availibleFeatures = $this->network->getAvailibleFeatures();
  }
  
  public function executeShow(sfWebRequest $request)
  {
	$feature = $this->getRoute()->getObject();
 
	if ($feature->getId() == 5) {
		$url = $feature->getUrl().'_admin';
	}elseif ($feature->getId() == 6) {
		$url = $feature->getUrl().'_admin';
	}else {
		$url = $feature->getUrl();
	}
	
  	$this->redirect($url);
  }
  
  public function executeAdditem(sfWebRequest $request)
  { 
    $featureid = $request->getParameter('id');
    
    $networkid = $this->getUser()->getNetworkId();
    
  	$network = Doctrine_Core::getTable('Network')->findOneById($networkid);  

  	$networkfeatures =  $network->getFeatures(); 
  
  	$lastPostiion = 0;
  	foreach ($networkfeatures as $networkfeature) {
  		if($networkfeature['position'] > $lastPostiion ){
  			$lastPostiion = $networkfeature['position'];
  		}
  	}
   
    $networkFeature = new NetworkFeature();
    $networkFeature->setNetworkId($networkid);
    $networkFeature->setFeatureId($featureid);
    $networkFeature->setPosition($lastPostiion + 10);
    $networkFeature->setActive(1);
    $networkFeature->Save();
  	
  	$networkfeatures =  $network->getFeatures(); 
  	
  	$this->features = array();
  	
  	foreach ($networkfeatures as $key => $value) {
  		$this->features[$key] = $value; 
  	}
  	
  	$this->availibleFeatures = $network->getAvailibleFeatures();
  }
  
  public function executeRemoveitem(sfWebRequest $request)
  { 
    $networkfeatureid = $request->getParameter('id');
    
  	$networkFeature = Doctrine_Core::getTable('NetworkFeature')->findOneById($networkfeatureid);    
  	
    $networkFeature->Delete();
    
    $networkid = $this->getUser()->getNetworkId();
    
  	$network = Doctrine_Core::getTable('Network')->findOneById($networkid);   

  	$networksfeatures =  $network->getFeatures(); 
  	
  	$this->features = array();
  	
  	foreach ($networksfeatures as $key => $value) {
  		$this->features[$key] = $value; 
  	}
  	
  	$this->availibleFeatures = $network->getAvailibleFeatures();  	
  	//$this->redirect($this->generateUrl('feature_layout', $network));
  }
  
  public function executeReorder(sfWebRequest $request)
  {
    $order =  explode(',', $this->getRequestParameter('featureOrder') );    
    
  	$flag = Doctrine_Core::getTable('NetworkFeature')->doSort($order);

 	return $flag ? sfView::NONE : sfView::ERROR;
  }
}
