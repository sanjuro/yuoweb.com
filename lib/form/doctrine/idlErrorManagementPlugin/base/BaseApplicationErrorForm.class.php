<?php

/**
 * ApplicationError form base class.
 *
 * @method ApplicationError getObject() Returns the current form's model object
 *
 * @package    Spark
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseApplicationErrorForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'message'    => new sfWidgetFormTextarea(),
      'type'       => new sfWidgetFormInputText(),
      'file'       => new sfWidgetFormTextarea(),
      'line'       => new sfWidgetFormInputText(),
      'trace'      => new sfWidgetFormTextarea(),
      'code'       => new sfWidgetFormInputText(),
      'module'     => new sfWidgetFormInputText(),
      'action'     => new sfWidgetFormInputText(),
      'uri'        => new sfWidgetFormTextarea(),
      'user'       => new sfWidgetFormInputText(),
      'comment'    => new sfWidgetFormTextarea(),
      'severity'   => new sfWidgetFormChoice(array('choices' => array('low' => 'low', 'medium' => 'medium', 'high' => 'high', 'critical' => 'critical'))),
      'user_agent' => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'message'    => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'type'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'file'       => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'line'       => new sfValidatorInteger(array('required' => false)),
      'trace'      => new sfValidatorString(array('required' => false)),
      'code'       => new sfValidatorInteger(array('required' => false)),
      'module'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'action'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'uri'        => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'user'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'comment'    => new sfValidatorString(array('required' => false)),
      'severity'   => new sfValidatorChoice(array('choices' => array(0 => 'low', 1 => 'medium', 2 => 'high', 3 => 'critical'), 'required' => false)),
      'user_agent' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('application_error[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ApplicationError';
  }

}
