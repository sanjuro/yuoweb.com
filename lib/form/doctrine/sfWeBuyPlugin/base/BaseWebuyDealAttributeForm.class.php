<?php

/**
 * WebuyDealAttribute form base class.
 *
 * @method WebuyDealAttribute getObject() Returns the current form's model object
 *
 * @package    Spark
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseWebuyDealAttributeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'deal_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('WebuyDeal'), 'add_empty' => true)),
      'attribute_name'  => new sfWidgetFormInputText(),
      'attribute_value' => new sfWidgetFormInputText(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'deal_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('WebuyDeal'), 'required' => false)),
      'attribute_name'  => new sfValidatorString(array('max_length' => 155, 'required' => false)),
      'attribute_value' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('webuy_deal_attribute[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'WebuyDealAttribute';
  }

}
