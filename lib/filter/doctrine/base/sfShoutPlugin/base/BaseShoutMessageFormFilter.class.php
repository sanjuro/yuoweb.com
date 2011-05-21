<?php

/**
 * ShoutMessage filter form base class.
 *
 * @package    Spark
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseShoutMessageFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'networkuser_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkUser'), 'add_empty' => true)),
      'shoutclient_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ShoutClient'), 'add_empty' => true)),
      'mobile_number'  => new sfWidgetFormFilterInput(),
      'message'        => new sfWidgetFormFilterInput(),
      'status'         => new sfWidgetFormFilterInput(),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'deleted_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'networkuser_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('NetworkUser'), 'column' => 'id')),
      'shoutclient_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ShoutClient'), 'column' => 'id')),
      'mobile_number'  => new sfValidatorPass(array('required' => false)),
      'message'        => new sfValidatorPass(array('required' => false)),
      'status'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'deleted_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('shout_message_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ShoutMessage';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'networkuser_id' => 'ForeignKey',
      'shoutclient_id' => 'ForeignKey',
      'mobile_number'  => 'Text',
      'message'        => 'Text',
      'status'         => 'Number',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
      'deleted_at'     => 'Date',
    );
  }
}
