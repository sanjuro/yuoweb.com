<?php

/**
 * PhotoComment form base class.
 *
 * @method PhotoComment getObject() Returns the current form's model object
 *
 * @package    Spark
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePhotoCommentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'body'           => new sfWidgetFormInputText(),
      'htmlbody'       => new sfWidgetFormInputText(),
      'networkuser_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkUser'), 'add_empty' => true)),
      'photolink_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PhotoLink'), 'add_empty' => true)),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'body'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'htmlbody'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'networkuser_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkUser'), 'required' => false)),
      'photolink_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PhotoLink'), 'required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('photo_comment[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PhotoComment';
  }

}
