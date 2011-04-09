<?php

/**
 * photo actions.
 *
 * @package    Spark
 * @subpackage photo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class photoActions extends sfActions
{
  public function preExecute()
  { 
 	$this->network = Doctrine_Core::getTable('Network')
	           		->findOneById($this->request->getParameter('network_id')); 
 	
 	$this->networkuser = $this->network->getUser($this->getUser()->getUserid());
  }
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->photos = $this->networkuser->getPhotos();
    //echo '<pre>';print_r( $this->photos );exit;
  }
  
  public function executeShowphoto(sfWebRequest $request)
  {
  	$this->photo = Doctrine_Core::getTable('Photo')
	           		->findOneById($this->request->getParameter('photo')); 
  }
  
  public function executeAddphoto(sfWebRequest $request)
  {
    $this->form = new PhotoForm( null, array( 'currentUser' => $this->getUser()) );

	if ($this->request->isMethod('post'))
	{			
		  $this->form->bind(
		    $request->getParameter($this->form->getName()),
		    $request->getFiles($this->form->getName())
		  );
		  
	      if ($this->form->isValid())
	      {	
	      	$photo = $this->form->save();
	      	
	      	$photoname = $photo->getUrl();
	      	
	      	$photo = $this->form->getValue('url');
	      	
     		$filename = $photo->getSavedName();
     		
			$img50x50 = new sfImage($filename);	
			$img50x50->thumbnail(50,50);
			$img50x50->setQuality(80);
			$img50x50->saveAs(sfConfig::get('sf_upload_dir').'/pictures/50x50/'.$photoname );
			
			$img270x270 = new sfImage($filename);	
			$img270x270->thumbnail(270,270);
			$img270x270->setQuality(80);
			$img270x270->saveAs(sfConfig::get('sf_upload_dir').'/pictures/270x270/'.$photoname );
			
			//unlink($filename);
	      	     
	     	$this->getUser()->setFlash('notice', sprintf('Your photo has been uploaded.'));
	      	
	      	$this->redirect($this->generateUrl('photo_index', $this->network));
	      
	      }else {
	      	      	
	      }
	}
  }
}
