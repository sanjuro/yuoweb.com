<?php

/**
 * speakout actions.
 *
 * @package    Spark
 * @subpackage speakout
 * @author     Your name here
 * @version    GIT: $Id: actions.class.php 1 2009-11-12 11:07:44Z Shadley.Wentzel $
 */
class sfSpeakoutFrontendActions extends sfActions
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
    $this->categorys = $this->network->getSpeakoutCategorys();    
  }
  
  public function executeShowtopic(sfWebRequest $request)
  {
    $topicid = $request->getParameter('topic');

	$this->topic = Doctrine_Core::getTable('SpeakoutTopic')->findOneById($topicid);

    $this->pager = new sfDoctrinePager(
	    'SpeakoutReply',
	    10
	);
	$this->pager->setQuery(Doctrine_Query::create()->from('SpeakoutReply sr')->leftJoin('sr.NetworkUser nu')->where('sr.topic_id = ?', $this->topic->getId()));	 
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
	      	
	      	$this->redirect($this->generateUrl( 'speakout_showtopic', array( 'topic' => $this->topic->getId() ) ) );
	      
	      }else {
	      	      	
	      }
	}
  }
}
