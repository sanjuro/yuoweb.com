<?php

/**
 * Event form base class.
 *
 * @method Event getObject() Returns the current form's model object
 *
 * @package    Spark
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEventForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'networkuser_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkUser'), 'add_empty' => true)),
      'network_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Network'), 'add_empty' => true)),
      'eventtype_id'   => new sfWidgetFormInputText(),
      'title'          => new sfWidgetFormInputText(),
      'description'    => new sfWidgetFormInputText(),
      'accept_count'   => new sfWidgetFormInputText(),
      'accept_limit'   => new sfWidgetFormInputText(),
      'address'        => new sfWidgetFormInputText(),
      'g_lat'          => new sfWidgetFormInputText(),
      'g_long'         => new sfWidgetFormInputText(),
      'contact_no'     => new sfWidgetFormInputText(),
      'start_at'       => new sfWidgetFormDateTime(),
      'end_at'         => new sfWidgetFormDateTime(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
      'deleted_at'     => new sfWidgetFormDateTime(),
      'slug'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'networkuser_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkUser'), 'required' => false)),
      'network_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Network'), 'required' => false)),
      'eventtype_id'   => new sfValidatorInteger(array('required' => false)),
      'title'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'description'    => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'accept_count'   => new sfValidatorInteger(array('required' => false)),
      'accept_limit'   => new sfValidatorInteger(array('required' => false)),
      'address'        => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'g_lat'          => new sfValidatorInteger(array('required' => false)),
      'g_long'         => new sfValidatorInteger(array('required' => false)),
      'contact_no'     => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'start_at'       => new sfValidatorDateTime(array('required' => false)),
      'end_at'         => new sfValidatorDateTime(array('required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
      'deleted_at'     => new sfValidatorDateTime(array('required' => false)),
      'slug'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Event', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('event[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Event';
  }

}
