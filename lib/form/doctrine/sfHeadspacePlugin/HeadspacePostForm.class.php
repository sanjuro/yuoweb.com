<?php

/**
 * HeadspacePost form.
 *
 * @package    Spark
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class HeadspacePostForm extends PluginHeadspacePostForm
{
 public $network;
 public $networkuser;
	
  public function configure()
  {
  	parent::configure();
  	
    if ($this->getOption("network") instanceof Network && ($this->getOption("network")))
	{
	    $this->network = $this->getOption("network");
	}else{
		throw new InvalidArgumentException("You must pass a network object as an option to this form!");	
	}
	
    if ($this->getOption("networkuser") instanceof NetworkUser && ($this->getOption("networkuser")))
	{
	    $this->networkuser = $this->getOption("networkuser");
	}else{
		throw new InvalidArgumentException("You must pass a network user object as an option to this form!");	
	}
  	
    unset(
      $this['network_id'], $this['networkuser_id'],
      $this['html_body'], $this['status'],
      $this['created_at'], $this['updated_at'],
      $this['slug']
    );
  	
  	$this->widgetSchema['body'] = new sfWidgetFormTextarea();
  	
  	$this->widgetSchema['allow_comments'] = new sfWidgetFormInputCheckbox( array( 'label' => 'Allow Comments' ) );
  	
  	$this->validatorSchema['allow_comments'] = new sfValidatorChoice(array( 
											   'required' => false,
											   'choices' => array('on', 'off')));
  	
  }
  
  public function updateObject($values = null)
  { 
    if (is_null($values))
    {
      $values = $this->values;
    }
	
	if (isset($values['allow_comments']) && $values['allow_comments'] == 'on'){
		$values['allow_comments'] = 1;
	}else{
		$values['allow_comments'] = 0;
	}

	$values['network_id'] = $this->network->getId();
	
	$values['networkuser_id'] = $this->networkuser->getId();
	
	$values = $this->processValues($values);
	
	$values['html_body'] = $values['body'];
		 
	$this->object->fromArray($values);
	   	 
	$this->updateObjectEmbeddedForms($values);
	   	 
	return $this->object;	
  }
}
