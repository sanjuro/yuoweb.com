<?php

/**
 * acNetworkObjectRoute
 * 
 * This class sets the environemnt for the mobile network depending on the subdomain
 * supplied
 * 
 * @package    Spark
 * @subpackage model
 * @author     Shadley Wentzel
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class acNetworkObjectRoute extends sfDoctrineRoute
{
    //protected $baseHost = '10.32.1.235';
    //protected $baseHost = '.spark1.com';
    protected $baseHost = '.yuoweb.localhost';
 
    public function matchesUrl($url, $context = array())
    {
	    if (false === $parameters = parent::matchesUrl($url, $context))
	    {
	      return false;
	    }
	    /*
	    // return false if the baseHost isn't found
	    if (strpos($context['host'], $this->baseHost) === false)
	    {
	      return false;
	    }
	    	
	    $subdomain = str_replace($this->baseHost, '', $context['host']);
	    
	    $subdomain = str_replace('.', '', $subdomain);
	    */
	 	$subdomain = 'picnpay';
	 
	    $network = Doctrine_Core::getTable('Network')
	      ->findOneBySubdomain($subdomain);
	  
	    if (!$network)
	    {
	      return false;
	    }
        	
		return array_merge(array('network_id' => $network->getId()), $parameters);
    }
  
	protected function getRealVariables()
	{
	    return array_merge(array('network_id'), parent::getRealVariables());
	}
	
	protected function doConvertObjectToArray($object)
	{
	  $parameters = parent::doConvertObjectToArray($object);
	 
	  //unset($parameters['network_id']);
	 
	  return $parameters;
	}
}
?>