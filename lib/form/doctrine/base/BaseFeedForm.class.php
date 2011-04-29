<?php

/**
 * Feed form base class.
 *
 * @method Feed getObject() Returns the current form's model object
 *
 * @package    Spark
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFeedForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'networkuser_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkUser'), 'add_empty' => true)),
      'feedtype_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('FeedType'), 'add_empty' => true)),
      'body'           => new sfWidgetFormInputText(),
      'htmlbody'       => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'networkuser_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkUser'), 'required' => false)),
      'feedtype_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('FeedType'), 'required' => false)),
      'body'           => new sfValidatorString(array('max_length' => 160, 'required' => false)),
      'htmlbody'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('feed[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Feed';
  }

}
