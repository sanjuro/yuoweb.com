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
    $this->form = new FrontendSignupForm();
    
  	if ($this->request->isMethod('post'))
	{
		  $this->form->bind(
		    $request->getParameter($this->form->getName()),
		    $request->getFiles($this->form->getName())
		  );
	      	
	      if ($this->form->isValid())
	      {	
	      	$signup = $this->form->save();
	      	
	 /**     	
    $message = $this->getMailer()->compose(
      array('headhancho@yuoweb.com' => 'yUo Web'),
      $affiliate->getEmail(),
      'yUo Web SignUp',
      <<<EOF
Your have signed up to yUo Web, here are your login and network details
 
Your username is {$affiliate->getToken()}.

To reach your first network goto {$affiliate->getToken()}.
 
The yUo Web Team.
EOF
    );

    $this->getMailer()->send($message);
 **/
	      	     
	     	return 'Complete';	
	     	       
	      }else {
	      	 return 'Error';	     	
	      }
	}
	
  }
}
