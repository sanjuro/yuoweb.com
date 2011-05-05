<?php

/**
 * headspace frontend actions.
 *
 * @package    yUoweb
 * @subpackage headspace frontend
 * @author     Shadley Wentzel
 * @version    SVN: $Id: actions.class.php 
 */
class sfHeadSpaceActions extends sfActions
{
 /**
  * Executes preExcute  action
  *
  * @param void
  */
  public function preExecute()
  { 
 	$this->network = $this->getUser()->getNetworkFromSession($this->getUser()->getNetworkId()); 
	 		
 	$this->networkuser = $this->network->getUser($this->getUser()->getUserid());
  }	
	
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->network = Doctrine_Core::getTable('Network')
	           ->findOneBySlug($this->getUser()->getNetworkId());
	          
	$this->networkuser = $this->network->getUser($this->getUser()->getUserid());
	          
  	$sfGuardUser = $this->networkuser->getsfGuardUser();
  	
  	$this->recentPosts = $this->network->getNewestHeadspacePosts($sfGuardUser[0]['last_login']); 
  
  }

   /**
  * Executes add post action
  *
  * @param sfRequest $request A request object
  */
  public function executeAddpost(sfWebRequest $request)
  {
    $this->form = new HeadspacePostForm( null, array( 'network' => $this->network, 
    												  'networkuser' => $this->networkuser) );

	if ($this->request->isMethod('post'))
	{
		  $this->form->bind(
		    $request->getParameter($this->form->getName()),
		    $request->getFiles($this->form->getName())
		  );
	      	 
	      if ($this->form->isValid())
	      {	 	
	      	$post = $this->form->save();
	      	     
	     	$this->getUser()->setFlash('notice', sprintf('Your post has been submitted.'));
	      	
	      	$this->redirect($this->generateUrl('headspace_index', $this->network));
	      
	      }else {
	      	      	
	      }
	}
  }
  
 /**
  * Executes show post action
  *
  * @param sfRequest $request A request object
  */
  public function executeShowpost(sfWebRequest $request)
  {
    $this->post = $this->getRoute()->getObject();  
  }
  
}