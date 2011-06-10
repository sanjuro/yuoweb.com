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
	$page = 1;
  	
    // pager
    if ($request->getParameter('page'))
    {
     $page =  $request->getParameter('page');
    }
	
    $pager = $this->getPager($this->sfGuardUser->getId(), $page, 10);
    
    $this->pager = $pager;
    
    $this->messages = $this->pager->execute();
  }
  
  public function executeShowinbox(sfWebRequest $request)
  {
	$page = 1;
  	
    // pager
    if ($request->getParameter('page'))
    {
     $page =  $request->getParameter('page');
    }
	
    $pager = $this->getPager($this->sfGuardUser->getId(), $page, 10);
    
    $this->pager = $pager;
    
    $this->messages = $this->pager->execute();
  }
  
 /**
  * Executes more action to show more feeds using a
  * Doctrine pager not the Symfony provided one.
  *
  * @param sfRequest $request A request object
  */
  public function executeMore(sfWebRequest $request)
  { 
    $this->user = $this->getRoute()->getObject();
    
  	$this->messagesForUser = $this->user->getMessages(10);
  	
  	$page = 1;
  	
    // pager
    if ($request->getParameter('page'))
    {
     $page =  $request->getParameter('page');
    }
	
    $pager = $this->getPager($this->user->getId(), $page, 2);
    
    $this->pager = $pager;
    
    $this->messages = $this->pager->execute();

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
	      	     
	     	$this->getUser()->setFlash('notice', sprintf('Your reply has been sent.'));
	      	
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
  
 /**
  * Function to build the pager for fetching messages
  *
  * @param integer $userid The user id of the User whos feeds we need to retrieve
  * @param integer $currentPage The page needed for the pager
  * 
  * @return 
  */
  protected function getPager($userid, $currentPage, $resultsPerPage)
  {      
	$pager = new Doctrine_Pager(
      Doctrine_Query::create()
       ->from('MessageReciever mr')
       ->where('mr.user_id = ?', $userid)
       ->leftJoin('mr.Message m')
       ->orderBy('m.created_at DESC')  ,
      $currentPage, // Current page of request
      $resultsPerPage // (Optional) Number of results per page. Default is 25
      );
     
    // $event = $this->dispatcher->filter(new sfEvent($this, 'frontend.build_query'), $pager);
    // $pager = $event->getReturnValue();
    
    return $pager;
  }

}
