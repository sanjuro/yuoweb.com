<?php

/**
 * Client form base class.
 *
 * @method Client getObject() Returns the current form's model object
 *
 * @package    Spark
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseClientForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'user_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => false)),
      'fullname'      => new sfWidgetFormInputText(),
      'logo'          => new sfWidgetFormInputText(),
      'url'           => new sfWidgetFormInputText(),
      'email'         => new sfWidgetFormInputText(),
      'description'   => new sfWidgetFormInputText(),
      'token'         => new sfWidgetFormInputText(),
      'is_activated'  => new sfWidgetFormInputCheckbox(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
      'network_count' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'))),
      'fullname'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'logo'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'url'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'token'         => new sfValidatorString(array('max_length' => 255)),
      'is_activated'  => new sfValidatorBoolean(array('required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
      'network_count' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Client', 'column' => array('token')))
    );

    $this->widgetSchema->setNameFormat('client[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Client';
  }

}
