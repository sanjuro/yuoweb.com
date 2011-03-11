<?php

/**
 * SpeakoutReply form.
 *
 * @package    Spark
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SpeakoutReplyForm extends BaseSpeakoutReplyForm
{
  public $currentUser;
  public $topic;
  
  public function configure()
  {
    unset(
       $this['created_at'], $this['updated_at'],
       $this['htmlbody'], $this['networkuser_id'],
       $this['topic_id']
    );
    
	if ($this->getOption("currentUser") instanceof sfUser)
	{
	    $this->currentUser = $this->getOption("currentUser");
	}
	
	if ($this->getOption("topic") instanceof SpeakoutTopic)
	{
	    $this->topic = $this->getOption("topic");
	}
    
    $this->widgetSchema['topic_id'] = new sfWidgetFormInputHidden();
   
    $this->widgetSchema['body'] = new sfWidgetFormTextarea();
  }
  
  public function updateObject($values = null)
  { 
    if (is_null($values))
    {
      $values = $this->values;
    }	    
	
	$NetworkUser = Doctrine_Core::getTable('NetworkUser')->findOneById($this->currentUser->getNetworkUserId());
	
	$values['networkuser_id'] = $NetworkUser->getId();
	
	$values['topic_id'] = $this->topic->getId();
		  	 
	$values = $this->processValues($values);
		 
	$this->object->fromArray($values);
	     
	parent::updateObjectEmbeddedForms($values);
		 
	return $this->object;	
  }
  
}
