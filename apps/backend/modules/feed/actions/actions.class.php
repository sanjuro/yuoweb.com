<?php

/**
 * feed actions.
 *
 * @package    Spark
 * @subpackage feed
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class feedActions extends sfActions
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

    $this->feeds = $this->network->getFeeds(); 
    //echo '<pre>';print_r($this->feeds);exit; 
  }
}
