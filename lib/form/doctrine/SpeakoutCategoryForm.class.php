<?php

/**
 * SpeakoutCategory form.
 *
 * @package    Spark
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SpeakoutCategoryForm extends BaseSpeakoutCategoryForm
{
  public $NetworkId;
  
  public function configure()
  {
    unset(
      $this['created_at'], $this['updated_at']
    );
    
	if ($this->getOption("networkId"))
	{
	    $this->NetworkId = $this->getOption("networkId");
	}
	
	$this->widgetSchema['description'] = new sfWidgetFormTextarea();
    
  }
  
  public function updateObject($values = null)
  { 
    if (is_null($values))
    {
      $values = $this->values;
    }	    

	$values['network_id'] = $this->NetworkId;
		  	 
	$values = $this->processValues($values);
		 
	$this->object->fromArray($values);
	     
	parent::updateObjectEmbeddedForms($values);
		 
	return $this->object;	
  }
}
