<?php

/**
 * HeadspacePostTag form base class.
 *
 * @method HeadspacePostTag getObject() Returns the current form's model object
 *
 * @package    Yuoweb
 * @subpackage form
 * @author     Shadley Wentzel
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseHeadspacePostTagForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'      => new sfWidgetFormInputHidden(),
      'post_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('HeadspacePost'), 'add_empty' => true)),
      'tag_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('HeadspaceTag'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'post_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('HeadspacePost'), 'required' => false)),
      'tag_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('HeadspaceTag'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('headspace_post_tag[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'HeadspacePostTag';
  }

}
