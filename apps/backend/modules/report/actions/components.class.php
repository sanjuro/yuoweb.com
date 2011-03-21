<?php

/**
 * network actions.
 *
 * @package    Spark
 * @subpackage network
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class reportComponents extends sfComponents
{
    public function executeGetuserstable(sfWebRequest $request)
    {
    	$this->UserAnalysis = $this->network->getNetworkUserAnalysis();    	
	
    } 
	
	public function executeGetfeaturenavigation(sfWebRequest $request)  
    {       

    }  
}