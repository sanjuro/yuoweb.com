<?php

/**
 * WebuyNetworkUser form base class.
 *
 * @method WebuyNetworkUser getObject() Returns the current form's model object
 *
 * @package    Yuoweb
 * @subpackage form
 * @author     Shadley Wentzel
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseWebuyNetworkUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'networkuser_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkUser'), 'add_empty' => true)),
      'deal_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('WebuyDeal'), 'add_empty' => true)),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'networkuser_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkUser'), 'required' => false)),
      'deal_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('WebuyDeal'), 'required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('webuy_network_user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'WebuyNetworkUser';
  }

}
