<?php

/**
 * message actions.
 *
 * @package    Spark
 * @subpackage message
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class messageActions extends sfActions
{
  public function preExecute()
  { 
 	$this->network = $this->getUser()->getNetworkFromSession($this->getUser()->getNetworkId()); 
	 		
 	$this->networkuser = $this->network->getUser($this->getUser()->getUserid());
 	
 	$this->sfGuardUser = $this->getUser()->getGuardUser();
  }
  
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->messages = $this->sfGuardUser->getMessages();
  }
  
  public function executeShowinbox(sfWebRequest $request)
  {
	$this->messages = $this->sfGuardUser->getMessages();
  }
  
  public function executeShowmessage(sfWebRequest $request)
  {
	$messagereciever = $this->getRoute()->getObject();
	
	if($messagereciever->getMessagestatusId() != 2)
	{
		$messagereciever->setMessagestatusId(2);
		
		$messagereciever->save();
    }
    
    $this->messagereciever = $messagereciever;
	
	$this->message = $messagereciever->getMessage();
	
  }
  
  public function executeReplymessage(sfWebRequest $request)
  {
	$messagereciever = $this->getRoute()->getObject();
	
	$this->message = $messagereciever->getMessage();
	
	if($messagereciever->getMessagestatusId() != 2)
	{
		$messagereciever->setMessagestatusId(2);
		
		$messagereciever->save();
    }

    $message = new Message();
    
    $message->setSubject('Reply: '.$this->message->getSubject());
	
    $this->form = new MessageForm( $message, array( 'network' => $this->network, 'currentUser' => $this->getUser() ) );
	
	$this->form->setDefault('subject', 'Reply: '.$this->message->getSubject()); 
	
  	if ($this->request->isMethod('post'))
	{
		  $this->form->bind(
		    $request->getParameter($this->form->getName()),
		    $request->getFiles($this->form->getName())
		  );
	      	 
	      if ($this->form->isValid())
	      {	 
	      	$signup = $this->form->save();
	      	     
	     	$this->getUser()->setFlash('notice', sprintf('Your message has been sent.'));
	      	
	      	$this->redirect($this->generateUrl('message_index', $this->network));
	      
	      }else {
	      	      	
	      }
	}

  }
  
  public function executeAddmessage(sfWebRequest $request)
  {
    $this->form = new MessageForm( null, array( 'network' => $this->network, 'currentUser' => $this->getUser()) );

	if ($this->request->isMethod('post'))
	{
		  $this->form->bind(
		    $request->getParameter($this->form->getName()),
		    $request->getFiles($this->form->getName())
		  );
	      	 
	      if ($this->form->isValid())
	      {	 	
	      	$message = $this->form->save();
	      	     
	     	$this->getUser()->setFlash('notice', sprintf('Your message has been sent.'));
	      	
	      	$this->redirect($this->generateUrl('message_showinbox', $this->network));
	      
	      }else {
	      	      	
	      }
	}
  }
  
  public function executeSend(sfWebRequest $request)
  {
    $this->user = $this->getRoute()->getObject(); 
  	
  	$this->form = new MessageForm( null, array( 'network' => $this->network, 'currentUser' => $this->getUser()) );
  	
  	$this->form->setDefault('friend', $this->user->getId() );

	if ($this->request->isMethod('post'))
	{
		  $this->form->bind(
		    $request->getParameter($this->form->getName()),
		    $request->getFiles($this->form->getName())
		  );
	      	 
	      if ($this->form->isValid())
	      {	 	
	      	$message = $this->form->save();
	      	     
	     	$this->getUser()->setFlash('notice', sprintf('Your message has been sent to '.$this->user->getUsername().'.'));
	      	
	      	$this->redirect($this->generateUrl('message_showinbox', $this->network));
	      
	      }else {
	      	      	
	      }
	}
  }

}
