<?php

/**
 * user actions.
 *
 * @package    Spark
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userActions extends sfActions
{
  public function preExecute()
  {
 	$this->network = Doctrine_Core::getTable('Network')
	           		->findOneById($this->request->getParameter('network_id')); 
 	
 	if($this->getUser()->isAuthenticated()){
 		$this->networkuser = $this->network->getUser($this->getUser()->getUserid()); 
 	}
  }
  
  public function executeViewprofile(sfWebRequest $request)
  {
    $this->user = $this->getRoute()->getObject(); 
     
    $this->userprofile = $this->user->getSfGuardUserWithUserProfile();
    
    $this->photos = $this->user->getPhotosForUser();   

	$this->form = new FrontendUserForm( $this->userprofile, array ( 'sfGuardUser' => $this->user ) );

	if ($this->request->isMethod('post'))
	{
		  $this->form->bind(
		    $request->getParameter($this->form->getName()),
		    $request->getFiles($this->form->getName())
		  );
	    
	      if ($this->form->isValid())
	      {
	        $UserProfile = $this->form->save();	
	        
	      	$photoname = $UserProfile->getProfilePic();
	      	
	      	$photo = $this->form->getValue('url');
	      	
	      	if($photo) {
     		$filename = $photo->getSavedName();
     		
			$img50x50 = new sfImage($filename);	
			$img50x50->thumbnail(50,50);
			$img50x50->setQuality(80);
			$img50x50->saveAs(sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'profilepics'.DIRECTORY_SEPARATOR.'50x50'.DIRECTORY_SEPARATOR.$photoname );
			
			$img270x270 = new sfImage($filename);	
			$img270x270->thumbnail(270,270);
			$img270x270->setQuality(80);
			$img270x270->saveAs(sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'profilepics'.DIRECTORY_SEPARATOR.'270x270'.DIRECTORY_SEPARATOR.$photoname );
			
			//unlink($filename);
	      	}
			
			$this->getUser()->setFlash('notice', sprintf('Your profile has been updated.'));
	      
	      
	      }else {
	      	
	      }
	}else {
		
	}
  }
  
  public function executeViewprofileredirect(sfWebRequest $request){
  	
  }
  
  public function executeShowallusers(sfWebRequest $request)
  {
   $this->network = $this->getRoute()->getObject();
   
   $this->users = $this->network->getUsers();    
  }
  
  public function executeJoin(sfWebRequest $request)
  {
    $this->network = $this->getRoute()->getObject();
     
    $this->form = new FrontendNetworkJoinForm( null, array( 'network' => $this->network ));
  
	if ($this->request->isMethod('post'))
	{				   
		  $this->form->bind(
		    $request->getParameter($this->form->getName()),
		    $request->getFiles($this->form->getName())
		  );
				  
	      if ($this->form->isValid())
	      {	
	      	$user = $this->form->save();
	      	
	      	$this->getUser()->signin($user, false);
	      	    	
	      	return $this->redirect('@network_dashboard');
	      	
	      }else {
	      	      	
	      }
	}
	
  }  
}