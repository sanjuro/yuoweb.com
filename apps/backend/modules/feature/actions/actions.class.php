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
  	
  	$this->availiblethemes = Doctrine_Core::getTable('sfMultisiteThemeThemeInfo')->getActiveThemes()->fetchArray();
   
  	$networksfeatures =  $this->network->getFeatures(); 
  	
  	$this->features = array();
  	
  	foreach ($networksfeatures as $key => $value) {
  		$this->features[$key] = $value; 
  	}
  }
  
  public function executeShow(sfWebRequest $request)
  {
	$feature = $this->getRoute()->getObject();
  	
  	$this->redirect($feature->getUrl());
  }
  
  public function executeAdditem(sfWebRequest $request)
  {
    $this->feature =  $this->getRoute()->getObject();
  	
  	$this->forward($this->feature->getTitle(), 'index');
  }
  
  public function executeReorder(sfWebRequest $request)
  {
    $order =  explode(',', $this->getRequestParameter('featureOrder') );    
    
  	$flag = Doctrine_Core::getTable('NetworkFeature')->doSort($order);
  
 	return $flag ? sfView::NONE : sfView::ERROR;
  }
}
