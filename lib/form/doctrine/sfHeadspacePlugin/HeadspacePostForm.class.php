<?php

/**
 * HeadspacePost form.
 *
 * @package    yUoweb
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
      $this['allow_comments'], $this['slug']
    );
  	
  	$this->widgetSchema['body'] = new sfWidgetFormTextarea();
  	
  	$this->widgetSchema['allow_comments'] = new sfWidgetFormInputCheckbox( array( 'label' => 'Allow Comments' ) );
  	
  	$this->validatorSchema['allow_comments'] = new sfValidatorChoice(array( 
											   'required' => false,
											   'choices' => array('on', 'off')));
  	
  	// HeadspacePostTag creation form
    $postTagForm = new FrontendHeadspacePostTagForm();
    $postTagForm->setDefault('post_id', $this->object->id);
    $this->embedForm('HeadspacePostTags', $postTagForm);
  		
    $this->embedRelation('HeadspacePostTag');
    
    $this->widgetSchema['HeadspacePostTags']->setLabel('Tags');
  	
  } 
  
  public function updateObject($values = null)
  { 
    if (is_null($values))
    {
      $values = $this->values;
    }
	
	$values['allow_comments'] = 1;

	$values['network_id'] = $this->network->getId();
	
	$values['networkuser_id'] = $this->networkuser->getId();
	
	$values = $this->processValues($values);
	
	$values['html_body'] = $values['body'];
		 
	$this->object->fromArray($values);
	   	 
	$this->updateObjectEmbeddedForms($values);
	   	 
	return $this->object;	
  }
}
