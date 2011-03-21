<?php

/**
 * SpeakoutReply filter form base class.
 *
 * @package    Spark
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSpeakoutReplyFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'body'           => new sfWidgetFormFilterInput(),
      'htmlbody'       => new sfWidgetFormFilterInput(),
      'topic_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SpeakoutTopic'), 'add_empty' => true)),
      'networkuser_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkUser'), 'add_empty' => true)),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'deleted_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'body'           => new sfValidatorPass(array('required' => false)),
      'htmlbody'       => new sfValidatorPass(array('required' => false)),
      'topic_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SpeakoutTopic'), 'column' => 'id')),
      'networkuser_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('NetworkUser'), 'column' => 'id')),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'deleted_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('speakout_reply_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SpeakoutReply';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'body'           => 'Text',
      'htmlbody'       => 'Text',
      'topic_id'       => 'ForeignKey',
      'networkuser_id' => 'ForeignKey',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
      'deleted_at'     => 'Date',
    );
  }
}
