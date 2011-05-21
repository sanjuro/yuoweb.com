<?php

/**
 * FrontendFeedForm for adding a new feed item
 *
 * @package    yUoweb
 * @subpackage form
 * @author     Shadley Wentzel <shad6ster@gmail.com>
 * @version    SVN: $Id: FrontendFeedForm.class.php 1 2009-11-02 21:41:21Z Shadley Wentzel $
 */
class FrontendFeedForm extends BaseFeedForm
{
  public $currentUser;
  
  public function configure()
  {
  	parent::configure();
  	
    unset(
      $this['user_id'], $this['feedtype_id'],
      $this['htmlbody'], $this['id'],
      $this['created_at'], $this['updated_at']
    );
    
  	if ($this->getOption("currentUser") instanceof sfUser)
	{
	    $this->currentUser = $this->getOption("currentUser");
	}
    
    $this->widgetSchema['body'] = new sfWidgetFormTextarea(array("label" => "Whats on your mind"));
        
  }
  
  public function updateObject($values = null)
  { 
    if (is_null($values))
    {
      $values = $this->values;
    }
    
	$values['user_id'] = $this->currentUser->getUserId();
    
    $values['feedtype_id'] = 1;
    
    $values['html_body'] = $values['body'];
	
	$values = $this->processValues($values);
		 
	$this->object->fromArray($values);
	   	 
	$this->updateObjectEmbeddedForms($values);
	   	 
	return $this->object;	
  }
  
}