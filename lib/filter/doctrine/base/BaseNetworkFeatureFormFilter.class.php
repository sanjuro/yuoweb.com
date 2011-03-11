<?php

/**
 * NetworkFeature filter form base class.
 *
 * @package    Spark
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseNetworkFeatureFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'network_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Network'), 'add_empty' => true)),
      'feature_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Feature'), 'add_empty' => true)),
      'active'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'position'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'network_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Network'), 'column' => 'id')),
      'feature_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Feature'), 'column' => 'id')),
      'active'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'position'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('network_feature_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'NetworkFeature';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'network_id' => 'ForeignKey',
      'feature_id' => 'ForeignKey',
      'active'     => 'Number',
      'position'   => 'Number',
    );
  }
}
