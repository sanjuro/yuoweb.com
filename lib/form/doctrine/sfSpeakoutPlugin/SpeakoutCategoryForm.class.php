<?php

/**
 * SpeakoutCategory form.
 *
 * @package    Spark
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SpeakoutCategoryForm extends PluginSpeakoutCategoryForm
{
 public $networkid; 
	
 public function configure()
  {
	parent::configure();
  	
  	unset(
      $this['id'], $this['topic_count'], $this['created_at'],
      $this['updated_at'], $this['deleted_at']
    );
    
    if ($this->getOption("networkId"))
	{
	    $this->networkid = $this->getOption("networkId");
	}
	
  }
  
  public function updateObject($values = null)
  { 
    if (is_null($values))
    {
      $values = $this->values;
    }	
	
	$values['network_id'] = $this->networkid;
 	 
	$values = $this->processValues($values);
		 
	$this->object->fromArray($values);
	     
	parent::updateObjectEmbeddedForms($values);
		 
	return $this->object;	
  }
}
