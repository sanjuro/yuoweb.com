<?php

/**
 * WebuySupplier form base class.
 *
 * @method WebuySupplier getObject() Returns the current form's model object
 *
 * @package    Spark
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseWebuySupplierForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'fullname'       => new sfWidgetFormInputText(),
      'product_count'  => new sfWidgetFormInputText(),
      'contact_number' => new sfWidgetFormInputText(),
      'address'        => new sfWidgetFormInputText(),
      'g_lat'          => new sfWidgetFormInputText(),
      'g_long'         => new sfWidgetFormInputText(),
      'logo'           => new sfWidgetFormInputText(),
      'url'            => new sfWidgetFormInputText(),
      'email'          => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
      'slug'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'fullname'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'product_count'  => new sfValidatorInteger(array('required' => false)),
      'contact_number' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'address'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'g_lat'          => new sfValidatorInteger(array('required' => false)),
      'g_long'         => new sfValidatorInteger(array('required' => false)),
      'logo'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'url'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
      'slug'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'WebuySupplier', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('webuy_supplier[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'WebuySupplier';
  }

}
