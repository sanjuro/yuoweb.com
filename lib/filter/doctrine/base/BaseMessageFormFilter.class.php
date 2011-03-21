<?php

/**
 * Message filter form base class.
 *
 * @package    Spark
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMessageFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'subject'        => new sfWidgetFormFilterInput(),
      'body'           => new sfWidgetFormFilterInput(),
      'htmlbody'       => new sfWidgetFormFilterInput(),
      'networkuser_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkUser'), 'add_empty' => true)),
      'network_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Network'), 'add_empty' => true)),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'subject'        => new sfValidatorPass(array('required' => false)),
      'body'           => new sfValidatorPass(array('required' => false)),
      'htmlbody'       => new sfValidatorPass(array('required' => false)),
      'networkuser_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('NetworkUser'), 'column' => 'id')),
      'network_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Network'), 'column' => 'id')),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('message_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Message';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'subject'        => 'Text',
      'body'           => 'Text',
      'htmlbody'       => 'Text',
      'networkuser_id' => 'ForeignKey',
      'network_id'     => 'ForeignKey',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
    );
  }
}
