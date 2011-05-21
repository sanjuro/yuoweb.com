<?php

/**
 * Notification filter form base class.
 *
 * @package    Yuoweb
 * @subpackage filter
 * @author     Shadley Wentzel
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseNotificationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'network_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Network'), 'add_empty' => true)),
      'networkuser_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkUser'), 'add_empty' => true)),
      'notificationtype_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NotificationType'), 'add_empty' => true)),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'network_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Network'), 'column' => 'id')),
      'networkuser_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('NetworkUser'), 'column' => 'id')),
      'notificationtype_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('NotificationType'), 'column' => 'id')),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('notification_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Notification';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'network_id'          => 'ForeignKey',
      'networkuser_id'      => 'ForeignKey',
      'notificationtype_id' => 'ForeignKey',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}
