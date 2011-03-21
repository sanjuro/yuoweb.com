<?php

require_once dirname(__FILE__).'/../lib/networkuserGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/networkuserGeneratorHelper.class.php';

/**
 * networkuser actions.
 *
 * @package    Spark
 * @subpackage networkuser
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class networkuserActions extends autoNetworkuserActions
{
  /*
  protected function buildQuery()
  {
    $tableMethod = $this->configuration->getTableMethod();
    
    $query = Doctrine_Core::getTable('NetworkUser')
      ->createQuery('a')
      ->where('network_id = ?', $this->getUser()->getNetworkId());
      
    $query = Doctrine_Core::getTable('NetworkUser')->getBackendAllNetworkUsers($query);

    if ($tableMethod)
    {
      $query = Doctrine_Core::getTable('NetworkUser')->$tableMethod($query);
    }

    $this->addSortQuery($query);

    $event = $this->dispatcher->filter(new sfEvent($this, 'admin.build_query'), $query);
    $query = $event->getReturnValue();

    return $query;
  }
  */
	protected function buildQuery()
	{
	   $networkid = $this->getUser()->getNetworkId(); 
	       
	   $query = parent::buildQuery();
	   // do what ever you like with the query like
	   $query->andWhere('network_id = ?', $networkid);
	   
	   return $query;
	}
}
