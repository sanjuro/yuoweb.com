<?php

require_once dirname(__FILE__).'/../lib/messageGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/messageGeneratorHelper.class.php';

/**
 * message actions.
 *
 * @package    Spark
 * @subpackage message
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class messageActions extends autoMessageActions
{
	protected function buildQuery()
	{
	   $networkid = $this->getUser()->getNetworkId(); 
	       
	   $query = parent::buildQuery();
	   // do what ever you like with the query like
	   $query->andWhere('network_id = ?', $networkid);
	   
	   return $query;
	}
}
