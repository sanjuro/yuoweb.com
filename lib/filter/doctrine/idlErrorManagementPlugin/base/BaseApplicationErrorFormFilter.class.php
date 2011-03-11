<?php

/**
 * ApplicationError filter form base class.
 *
 * @package    Spark
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseApplicationErrorFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'message'    => new sfWidgetFormFilterInput(),
      'type'       => new sfWidgetFormFilterInput(),
      'file'       => new sfWidgetFormFilterInput(),
      'line'       => new sfWidgetFormFilterInput(),
      'trace'      => new sfWidgetFormFilterInput(),
      'code'       => new sfWidgetFormFilterInput(),
      'module'     => new sfWidgetFormFilterInput(),
      'action'     => new sfWidgetFormFilterInput(),
      'uri'        => new sfWidgetFormFilterInput(),
      'user'       => new sfWidgetFormFilterInput(),
      'comment'    => new sfWidgetFormFilterInput(),
      'severity'   => new sfWidgetFormChoice(array('choices' => array('' => '', 'low' => 'low', 'medium' => 'medium', 'high' => 'high', 'critical' => 'critical'))),
      'user_agent' => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'message'    => new sfValidatorPass(array('required' => false)),
      'type'       => new sfValidatorPass(array('required' => false)),
      'file'       => new sfValidatorPass(array('required' => false)),
      'line'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'trace'      => new sfValidatorPass(array('required' => false)),
      'code'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'module'     => new sfValidatorPass(array('required' => false)),
      'action'     => new sfValidatorPass(array('required' => false)),
      'uri'        => new sfValidatorPass(array('required' => false)),
      'user'       => new sfValidatorPass(array('required' => false)),
      'comment'    => new sfValidatorPass(array('required' => false)),
      'severity'   => new sfValidatorChoice(array('required' => false, 'choices' => array('low' => 'low', 'medium' => 'medium', 'high' => 'high', 'critical' => 'critical'))),
      'user_agent' => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('application_error_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ApplicationError';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'message'    => 'Text',
      'type'       => 'Text',
      'file'       => 'Text',
      'line'       => 'Number',
      'trace'      => 'Text',
      'code'       => 'Number',
      'module'     => 'Text',
      'action'     => 'Text',
      'uri'        => 'Text',
      'user'       => 'Text',
      'comment'    => 'Text',
      'severity'   => 'Enum',
      'user_agent' => 'Text',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
