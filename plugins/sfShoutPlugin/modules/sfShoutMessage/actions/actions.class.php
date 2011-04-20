<?php

/**
 * shout actions.
 *
 * @package    yUoweb
 * @subpackage shout
 * @author     Shadley Wentzel
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfShoutMessageActions extends sfActions
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
  * Executes show action
  *
  * @param sfRequest $request A request object
  */
  public function executeAdd(sfWebRequest $request)
  {
    $this->form = new FrontendShoutMessageForm();
    
    $this->country = 'South Africa';

	if ($this->request->isMethod('post'))
	{			
		  $this->form->bind(
		    $request->getParameter($this->form->getName()),
		    $request->getFiles($this->form->getName())
		  );
		  
		  
	      if ($this->form->isValid())
	      {	
	      	$sfShoutMessage = $this->form->save();
	      	
		    $sfShoutClient = Doctrine_Core::getTable('ShoutClient')->
		  					findOneByNetworkId($this->network->getId());
      		
	      	$sfShoutMessage->setNetworkuserId($this->networkuser->getId());
	      	$sfShoutMessage->setShoutclientId($sfShoutClient->getId());
	      	$sfShoutMessage->save();
	      	
			// Construct the message object
			$sfShoutSms = new sfShoutSms($sfShoutClient->getApiId(), 
								  $sfShoutClient->getUsername(), 
								  $sfShoutClient->getPassword());

			// Query the account balance
			$balance = $sfShoutSms->accountBalance();
			
			
			// Simply send a message
			$messageID = $sfShoutSms->sendMessage($sfShoutClient->getDailingCode().$sfShoutMessage->getMobileNumber(), 
												  $sfShoutMessage->getMessage());
			
			// Send a message with extended options
			/** $messageID = $sfShoutSms->sendMessage(
			*            "+CCNNUUMMBBEERR", 
			*           "message",
			*            array(
			*                'callback' => 3,
			*                'deliv_ack' => 1,
			*                'from' => '+CCNNUUMMBBEERR'
			*                ));
			*/             
			// Retrieve a status update using a messageID
			$this->status = $sfShoutSms->queryMessage($messageID);	   	     
	      	   	
	     	$this->getUser()->setFlash('notice', sprintf('Your message has been sent.'));
	      	
	      	$this->redirect($this->generateUrl('shout_add', $this->network));
	      
	      }else {
	      	      	
	      }
	}
  }
}