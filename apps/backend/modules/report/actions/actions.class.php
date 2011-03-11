<?php

/**
 * report actions.
 *
 * @package    Spark
 * @subpackage report
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class reportActions extends sfActions
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
  }
}
