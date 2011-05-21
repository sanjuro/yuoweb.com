<?php

/**
 * WebuySupplier filter form base class.
 *
 * @package    Yuoweb
 * @subpackage filter
 * @author     Shadley Wentzel
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseWebuySupplierFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fullname'       => new sfWidgetFormFilterInput(),
      'product_count'  => new sfWidgetFormFilterInput(),
      'contact_number' => new sfWidgetFormFilterInput(),
      'address'        => new sfWidgetFormFilterInput(),
      'g_lat'          => new sfWidgetFormFilterInput(),
      'g_long'         => new sfWidgetFormFilterInput(),
      'logo'           => new sfWidgetFormFilterInput(),
      'url'            => new sfWidgetFormFilterInput(),
      'email'          => new sfWidgetFormFilterInput(),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'slug'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'fullname'       => new sfValidatorPass(array('required' => false)),
      'product_count'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'contact_number' => new sfValidatorPass(array('required' => false)),
      'address'        => new sfValidatorPass(array('required' => false)),
      'g_lat'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'g_long'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'logo'           => new sfValidatorPass(array('required' => false)),
      'url'            => new sfValidatorPass(array('required' => false)),
      'email'          => new sfValidatorPass(array('required' => false)),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('webuy_supplier_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'WebuySupplier';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'fullname'       => 'Text',
      'product_count'  => 'Number',
      'contact_number' => 'Text',
      'address'        => 'Text',
      'g_lat'          => 'Number',
      'g_long'         => 'Number',
      'logo'           => 'Text',
      'url'            => 'Text',
      'email'          => 'Text',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
      'slug'           => 'Text',
    );
  }
}
