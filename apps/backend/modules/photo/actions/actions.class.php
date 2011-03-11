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
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $networkid = $this->getUser()->getNetworkId(); 
  	
  	$this->pager = new sfDoctrinePager(
	    'Photo',
	    20
	);
	$this->pager->setQuery(Doctrine::getTable('Photo')->getPhotosForNetworkUsers($networkid)); 
	$this->pager->setPage($request->getParameter('page', 1));	 
	$this->pager->init();
  }
  
  public function executeEdit(sfWebRequest $request)
  {
    $this->photo =  $this->getRoute()->getObject();
         
    $this->form = new BackendPhotoForm( $this->photo );

	if ($this->request->isMethod('post'))
	{			
		  $this->form->bind(
		    $request->getParameter($this->form->getName()),
		    $request->getFiles($this->form->getName())
		  );
		  
	      if ($this->form->isValid())
	      {	
	      	$photo = $this->form->save();
	      	     
	     	$this->getUser()->setFlash('notice', sprintf('Photo Editted'));
	      	
	      	$this->redirect($this->generateUrl('photos'));
	      
	      }else {
	      	      	
	      }
	}
  }
  
  public function executeDelete(sfWebRequest $request)
  {
    $this->photo =  $this->getRoute()->getObject();
    
	$this->photo->delete();
	
	$this->getUser()->setFlash('notice', sprintf('Photo Deleted'));
	      	
	$this->redirect($this->generateUrl('photos'));
  }
}
