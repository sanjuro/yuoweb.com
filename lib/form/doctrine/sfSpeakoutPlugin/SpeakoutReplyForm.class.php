<?php

/**
 * SpeakoutReply form.
 *
 * @package    Spark
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SpeakoutReplyForm extends PluginSpeakoutReplyForm
{
  public $currentUser;
  public $topic;
	
  public function configure()
  {
  	parent::configure();
  	
     unset(
      $this['htmlbody'], $this['topic_id'],
      $this['networkuser_id'], $this['created_at'],
      $this['updated_at'], $this['deleted_at']
    );
    
  	if ($this->getOption("currentUser") instanceof sfUser)
	{
	    $this->currentUser = $this->getOption("currentUser");
	}

  	if ($this->getOption("topic") instanceof SpeakoutTopic)
	{
	    $this->topic = $this->getOption("topic");
	}	
    
    $this->widgetSchema['body'] = new sfWidgetFormTextarea();
        
  }
  
  public function updateObject($values = null)
  { 
    if (is_null($values))
    {
      $values = $this->values;
    }
    
    $values['htmlbody'] = $values['body'];
    
    $values['topic_id'] = $this->topic->getId();
     
    $values['networkuser_id'] = $this->currentUser->getNetworkUserId();

    $values['created_at'] = date('Y-m-d H:M:s');
	
	$values = $this->processValues($values);
		 
	$this->object->fromArray($values);
	   	 
	$this->updateObjectEmbeddedForms($values);
	   	 
	return $this->object;	
  }  
}
