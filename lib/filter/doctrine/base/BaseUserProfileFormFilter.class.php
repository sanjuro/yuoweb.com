<?php

/**
 * UserProfile filter form base class.
 *
 * @package    Spark
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUserProfileFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sfuser_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'mobile_no'   => new sfWidgetFormFilterInput(),
      'description' => new sfWidgetFormFilterInput(),
      'profile_pic' => new sfWidgetFormFilterInput(),
      'gender_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gender'), 'add_empty' => true)),
      'city'        => new sfWidgetFormFilterInput(),
      'country'     => new sfWidgetFormFilterInput(),
      'birthday'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'sfuser_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'mobile_no'   => new sfValidatorPass(array('required' => false)),
      'description' => new sfValidatorPass(array('required' => false)),
      'profile_pic' => new sfValidatorPass(array('required' => false)),
      'gender_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Gender'), 'column' => 'id')),
      'city'        => new sfValidatorPass(array('required' => false)),
      'country'     => new sfValidatorPass(array('required' => false)),
      'birthday'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('user_profile_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserProfile';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'sfuser_id'   => 'ForeignKey',
      'mobile_no'   => 'Text',
      'description' => 'Text',
      'profile_pic' => 'Text',
      'gender_id'   => 'ForeignKey',
      'city'        => 'Text',
      'country'     => 'Text',
      'birthday'    => 'Date',
    );
  }
}
