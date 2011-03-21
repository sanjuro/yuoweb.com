<?php

/**
 * UserProfile form base class.
 *
 * @method UserProfile getObject() Returns the current form's model object
 *
 * @package    Spark
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserProfileForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'sfuser_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'mobile_no'   => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormInputText(),
      'profile_pic' => new sfWidgetFormInputText(),
      'gender_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gender'), 'add_empty' => true)),
      'city'        => new sfWidgetFormInputText(),
      'country'     => new sfWidgetFormInputText(),
      'birthday'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'sfuser_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'required' => false)),
      'mobile_no'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'profile_pic' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'gender_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Gender'), 'required' => false)),
      'city'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'country'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'birthday'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('user_profile[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserProfile';
  }

}
