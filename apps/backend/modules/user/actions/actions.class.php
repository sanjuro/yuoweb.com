<?php

/**
 * user actions.
 *
 * @package    Spark
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }
  
 /**
  * Executes show action to show all users on netwokrs
  *
  * @param sfRequest $request A request object
  */
  public function executeShow(sfWebRequest $request)
  {
 	$this->network =  $this->getRoute()->getObject();
 	
    $this->pager = new sfDoctrinePager(
	    'NetworkUser',
	    20
	);
	$this->pager->setQuery($this->network->fetchUsersQuery());	 
	$this->pager->setPage($request->getParameter('page', 1));	 
	$this->pager->init();
	
	//$this->users = $this->network->getUsers();
	
	//echo '<pre>';print_r( $q->fetchArray() );exit;
	

  }
}
