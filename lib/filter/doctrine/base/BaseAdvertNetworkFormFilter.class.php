<?php

/**
 * AdvertNetwork filter form base class.
 *
 * @package    Spark
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAdvertNetworkFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'advert_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Advert'), 'add_empty' => true)),
      'network_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Network'), 'add_empty' => true)),
      'click_count' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'position'    => new sfWidgetFormFilterInput(),
      'is_active'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'advert_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Advert'), 'column' => 'id')),
      'network_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Network'), 'column' => 'id')),
      'click_count' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'position'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_active'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('advert_network_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdvertNetwork';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'advert_id'   => 'ForeignKey',
      'network_id'  => 'ForeignKey',
      'click_count' => 'Number',
      'position'    => 'Number',
      'is_active'   => 'Boolean',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
    );
  }
}
