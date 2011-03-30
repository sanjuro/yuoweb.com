<?php

/**
 * WebuyDeal form base class.
 *
 * @method WebuyDeal getObject() Returns the current form's model object
 *
 * @package    Spark
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseWebuyDealForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'product_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('WebuyProduct'), 'add_empty' => true)),
      'network_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Network'), 'add_empty' => true)),
      'title'            => new sfWidgetFormInputText(),
      'full_price'       => new sfWidgetFormInputText(),
      'deal_price'       => new sfWidgetFormInputText(),
      'discount_percent' => new sfWidgetFormInputText(),
      'buyer_count'      => new sfWidgetFormInputText(),
      'tipping_count'    => new sfWidgetFormInputText(),
      'status'           => new sfWidgetFormInputText(),
      'g_lat'            => new sfWidgetFormInputText(),
      'g_long'           => new sfWidgetFormInputText(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
      'slug'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'product_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('WebuyProduct'), 'required' => false)),
      'network_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Network'), 'required' => false)),
      'title'            => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'full_price'       => new sfValidatorNumber(array('required' => false)),
      'deal_price'       => new sfValidatorNumber(array('required' => false)),
      'discount_percent' => new sfValidatorNumber(array('required' => false)),
      'buyer_count'      => new sfValidatorInteger(array('required' => false)),
      'tipping_count'    => new sfValidatorInteger(array('required' => false)),
      'status'           => new sfValidatorInteger(array('required' => false)),
      'g_lat'            => new sfValidatorInteger(array('required' => false)),
      'g_long'           => new sfValidatorInteger(array('required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
      'slug'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'WebuyDeal', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('webuy_deal[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'WebuyDeal';
  }

}
