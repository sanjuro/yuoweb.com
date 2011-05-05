<?php

/**
 * WebuyDeal filter form base class.
 *
 * @package    Yuoweb
 * @subpackage filter
 * @author     Shadley Wentzel
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseWebuyDealFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'product_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('WebuyProduct'), 'add_empty' => true)),
      'network_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Network'), 'add_empty' => true)),
      'title'            => new sfWidgetFormFilterInput(),
      'full_price'       => new sfWidgetFormFilterInput(),
      'deal_price'       => new sfWidgetFormFilterInput(),
      'discount_percent' => new sfWidgetFormFilterInput(),
      'buyer_count'      => new sfWidgetFormFilterInput(),
      'tipping_count'    => new sfWidgetFormFilterInput(),
      'status'           => new sfWidgetFormFilterInput(),
      'g_lat'            => new sfWidgetFormFilterInput(),
      'g_long'           => new sfWidgetFormFilterInput(),
      'expires_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'slug'             => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'product_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('WebuyProduct'), 'column' => 'id')),
      'network_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Network'), 'column' => 'id')),
      'title'            => new sfValidatorPass(array('required' => false)),
      'full_price'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'deal_price'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'discount_percent' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'buyer_count'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipping_count'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'g_lat'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'g_long'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'expires_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'             => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('webuy_deal_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'WebuyDeal';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'product_id'       => 'ForeignKey',
      'network_id'       => 'ForeignKey',
      'title'            => 'Text',
      'full_price'       => 'Number',
      'deal_price'       => 'Number',
      'discount_percent' => 'Number',
      'buyer_count'      => 'Number',
      'tipping_count'    => 'Number',
      'status'           => 'Number',
      'g_lat'            => 'Number',
      'g_long'           => 'Number',
      'expires_at'       => 'Date',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
      'slug'             => 'Text',
    );
  }
}
