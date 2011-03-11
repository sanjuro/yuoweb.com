<?php

/**
 * NetworkFeature form base class.
 *
 * @method NetworkFeature getObject() Returns the current form's model object
 *
 * @package    Spark
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNetworkFeatureForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'network_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Network'), 'add_empty' => true)),
      'feature_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Feature'), 'add_empty' => true)),
      'active'     => new sfWidgetFormInputText(),
      'position'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'network_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Network'), 'required' => false)),
      'feature_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Feature'), 'required' => false)),
      'active'     => new sfValidatorInteger(array('required' => false)),
      'position'   => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('network_feature[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'NetworkFeature';
  }

}
