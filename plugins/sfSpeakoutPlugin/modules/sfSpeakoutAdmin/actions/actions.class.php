<?php

/**
 * speakout actions.
 *
 * @package    Spark
 * @subpackage speakout
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfSpeakoutAdminActions extends sfActions
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

    $this->categorys = $this->network->getSpeakoutCategorys();  
  }
  
  public function executeAddcategory(sfWebRequest $request)
  {
  	$this->form = new SpeakoutCategoryForm( null, array( "networkId" => $this->getUser()->getNetworkId() ) );
	
	if ($this->request->isMethod('post'))
	{			
		  $this->form->bind(
		    $request->getParameter($this->form->getName()),
		    $request->getFiles($this->form->getName())
		  );
		  
	      if ($this->form->isValid())
	      {	
	      	$category = $this->form->save();
	      	     
	     	$this->getUser()->setFlash('notice', sprintf('Cateogry Added.'));
	      	
	      	$this->redirect($this->generateUrl('speakout_index_admin'));
	      
	      }else {
	      	
	      	$this->getUser()->setFlash('error', sprintf('Cateogry was not added.'));
	      	      	
	      }
	}
  }
  
  public function executeEditcategory(sfWebRequest $request)
  {
  	$this->category =  $this->getRoute()->getObject();
    
    $this->form = new SpeakoutCategoryForm( $this->category, array( "networkId" => $this->getUser()->getNetworkId() ) );

	if ($this->request->isMethod('post'))
	{			
		  $this->form->bind(
		    $request->getParameter($this->form->getName()),
		    $request->getFiles($this->form->getName())
		  );
		  
	      if ($this->form->isValid())
	      {	
	      	$category = $this->form->save();
	      	     
	     	$this->getUser()->setFlash('notice', sprintf('Cateogry Editted.'));
	      	
	      	$this->redirect($this->generateUrl('speakout_index_admin'));
	      
	      }else {
	      	      	
	      }
	}
  }
  
  public function executeAddtopic(sfWebRequest $request)
  {
  	$this->form = new SpeakoutTopicForm( null, array( "networkId" => $this->getUser()->getNetworkId() ) );

	if ($this->request->isMethod('post'))
	{			
		  $this->form->bind(
		    $request->getParameter($this->form->getName()),
		    $request->getFiles($this->form->getName())
		  );
		  
	      if ($this->form->isValid())
	      {	
	      	$topic = $this->form->save();
	      	     
	     	$this->getUser()->setFlash('notice', sprintf('Topic Added.'));
	      	
	      	$this->redirect($this->generateUrl('speakout_index_admin'));
	      
	      }else {
	      	      	
	      }
	}
  }
  
  public function executeEdittopic(sfWebRequest $request)
  {
  	$this->topic =  $this->getRoute()->getObject();
    
    $this->form = new SpeakoutTopicForm( $this->topic, array( "networkId" => $this->getUser()->getNetworkId() ) );

	if ($this->request->isMethod('post'))
	{			
		  $this->form->bind(
		    $request->getParameter($this->form->getName()),
		    $request->getFiles($this->form->getName())
		  );
		  
	      if ($this->form->isValid())
	      {	
	      	$topic = $this->form->save();
	      	     
	     	$this->getUser()->setFlash('notice', sprintf('Topic Editted.'));
	      	
	      	$this->redirect($this->generateUrl('speakout_index_admin'));
	      
	      }else {
	      	      	
	      }
	}
  }
  
  public function executeShowtopic(sfWebRequest $request)
  {
  	$this->topic =  $this->getRoute()->getObject();
  	
    $this->pager = new sfDoctrinePager(
	    'SpeakoutReply',
	    10
	);
	$this->pager->getQuery();	
	//$this->pager->getQuery(); 
	$this->pager->setPage($request->getParameter('page', 1));	 
	$this->pager->init();  	
  	
  }
  
  public function executeAddreply(sfWebRequest $request)
  {
    $this->topic = $this->getRoute()->getObject();
    
    $this->form = new SpeakoutReplyForm( null, array( 'currentUser' => $this->getUser(), 
													  'topic' => $this->topic) 
									    );

	if ($this->request->isMethod('post'))
	{			
		  $this->form->bind(
		    $request->getParameter($this->form->getName()),
		    $request->getFiles($this->form->getName())
		  );
		  
	      if ($this->form->isValid())
	      {	
	      	$reply = $this->form->save();	      	
	      	     
	     	$this->getUser()->setFlash('notice', sprintf('Your reply has been added.'));
	      	
	      	$this->redirect($this->generateUrl( 'speakout_showtopic_admin', array( 'topic' => $this->topic->getId() ) ) );
	      
	      }else {
	      	      	
	      }
	}
  }
  
  public function executeDeletereply(sfWebRequest $request) 
  {
  	$this->reply = $this->getRoute()->getObject();
  	
  	$this->reply->delete();
  	
  	$this->redirect($this->generateUrl( 'speakout_showtopic_admin', array( 'topic' => $this->reply->getTopicId() ) ) );
  }
}
