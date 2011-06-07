<?php

/**
 * feed actions.
 *
 * @package    Spark
 * @subpackage feed
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class feedActions extends sfActions
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
    $this->feedsForUser = $this->sfGuardUser->getFeeds(5);
  
    $this->followingsWithFeeds = $this->sfGuardUser->getFeedsForFriends();
    
    $this->form = new FrontendFeedForm(  null, array( 'currentUser' => $this->getUser())  );
  }
  
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeAddfeed(sfWebRequest $request)
  {
   $this->form = new FrontendFeedForm(  null, array( 'currentUser' => $this->getUser())  );
   
	if ($this->request->isMethod('post'))
	{			
		  $this->form->bind(
		    $request->getParameter($this->form->getName()),
		    $request->getFiles($this->form->getName())
		  );
		  
	      if ($this->form->isValid())
	      {	
	      	$feed = $this->form->save();
	      	
	      	$notification = new Notification();
			$notification->setNetworkId($this->network->getId());
			$notification->setUserId($this->getUser()->getUserId());
			$notification->setNotificationtypeId(2);
			$notification->save();
	      	
	      	$this->getUser()->setFlash('notice', sprintf('Your feed has been added.'));
	      	
	      	$this->redirect($this->generateUrl('feed_index', $this->network));
	      }
	      
  }else {
  	
  }
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
    
  	$this->feedsForUser = $this->user->getFeeds(10);
  	
  	$page = 1;
  	
    // pager
    if ($request->getParameter('page'))
    {
     $page =  $request->getParameter('page');
    }
	
    $pager = $this->getPager($this->user->getId(), $page, 10);
    
    $this->pager = $pager;
    
    $feeds = $this->pager->execute();

    $this->feeds = $this->cleanFeeds($feeds);
  }
  
 /**
  * Function to build the pager
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
	      ->from('Feed f')
	      ->where('f.user_id = ?',  $userid)
	      ->orderBy('f.created_at DESC'),
      $currentPage, // Current page of request
      $resultsPerPage // (Optional) Number of results per page. Default is 25
      );
     
    // $event = $this->dispatcher->filter(new sfEvent($this, 'frontend.build_query'), $pager);
    // $pager = $event->getReturnValue();
    
    return $pager;
  }
  
 /**
  * Function clean feeds and add the nice date stamps
  *
  * @param $feeds Array of Feeds
  * 
  * @return 
  */
  protected function cleanFeeds($feeds){
  	 // Cleanup the feeds order by day
	 $result = array();   
 
	 foreach ($feeds as $feed){ 
	 	$feed = $feed->toArray();
		$oDate = strtotime($feed['created_at']);
		$index = date("m_d_y",$oDate);
		
		$result[$index]['date_for_group'] = date('l',$oDate).', '.date('d',$oDate).' '.date('F',$oDate).' '.date('Y',$oDate);
   	 
	   	$result[$index]['feeds'][$feed['id']] = $feed;
	   	$result[$index]['feeds'][$feed['id']]['posted_at'] = Yuoweb::time_offset(strtotime($feed['created_at']));
	 
	   }
	
	 return $result;
  }

}
