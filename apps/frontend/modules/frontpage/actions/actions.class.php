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
	      	$values = $this->form->getValues();
	      	
	      	$this->subdomain = $values['frontendnetwork']['subdomain'];
	      	
	      	$sfGuardUser = $this->form->save();
	      
	
      $message = $this->getMailer()->compose(
      array('headhancho@yuoweb.com' => 'yUo Web'),
      $sfGuardUser->getEmailAddress(),
      'yUo Web SignUp',
      <<<EOF
Your have signed up to yUo Web, here are your login and network details
 
The backend link is www.youweb.com/backend.php
 
Your username is {$sfGuardUser->getUsername()}.
Your password is {$sfGuardUser->getEmailAddress()}(change this its very un-secure).

To reach your first network goto {$this->subdomain}.yuoweb.com/index.php(customize this)
 
The yUo Web Team.
EOF
    );

    $this->getMailer()->send($message);
    
      $message = $this->getMailer()->compose(
      array('headhancho@yuoweb.com' => 'yUo Web'),
      sfConfig::get('app_email_admin'),
      'yUo Web Network Activation',
      <<<EOF
There is a network that needs to be activated.

{$this->subdomain}.yuoweb.com/index.php
 
 
Client Email: {$sfGuardUser->getUsername()}.
 
The yUo Web Team.
EOF
    );

    $this->getMailer()->send($message);
	      	    
	     	return 'Complete';	
	     	       
	      }else { 	
	      	 return 'Error';	     	
	      }
	}
	
  }
}
