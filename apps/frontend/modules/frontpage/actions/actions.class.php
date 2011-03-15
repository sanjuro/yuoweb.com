<?php

/**
 * frontpage actions.
 *
 * @package    Spark
 * @subpackage frontpage
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class frontpageActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {

  }
  
  public function executeHomepage(sfWebRequest $request)
  {

  }
  
  public function executeSignup(sfWebRequest $request)
  {
    $this->form = new FrontendSignupForm( );
    
  	if ($this->request->isMethod('post'))
	{
		  $this->form->bind(
		    $request->getParameter($this->form->getName()),
		    $request->getFiles($this->form->getName())
		  );
	      	 
	      if ($this->form->isValid())
	      {	 echo '<pre>';print_r('asd');exit;	
	      	$signup = $this->form->save();
	      	     
	     	$this->getUser()->setFlash('notice', sprintf('Your message has been sent.'));
	      	
	      	$this->redirect($this->generateUrl('message_index', $this->network));
	      
	      }else {
	      	      	
	      }
	}
  }
}
