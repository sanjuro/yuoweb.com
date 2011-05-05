<?php

/**
 * Network form base class.
 *
 * @method Network getObject() Returns the current form's model object
 *
 * @package    Yuoweb
 * @subpackage form
 * @author     Shadley Wentzel
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNetworkForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'client_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Client'), 'add_empty' => false)),
      'networktype_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkType'), 'add_empty' => false)),
      'networkcategory_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkCategory'), 'add_empty' => false)),
      'subdomain'          => new sfWidgetFormInputText(),
      'title'              => new sfWidgetFormInputText(),
      'description'        => new sfWidgetFormTextarea(),
      'feature_count'      => new sfWidgetFormInputText(),
      'user_count'         => new sfWidgetFormInputText(),
      'logo'               => new sfWidgetFormInputText(),
      'accesskey'          => new sfWidgetFormInputText(),
      'is_public'          => new sfWidgetFormInputCheckbox(),
      'is_activated'       => new sfWidgetFormInputCheckbox(),
      'expires_at'         => new sfWidgetFormDateTime(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
      'slug'               => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'client_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Client'))),
      'networktype_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkType'))),
      'networkcategory_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkCategory'))),
      'subdomain'          => new sfValidatorString(array('max_length' => 255)),
      'title'              => new sfValidatorString(array('max_length' => 255)),
      'description'        => new sfValidatorString(array('max_length' => 4000)),
      'feature_count'      => new sfValidatorInteger(array('required' => false)),
      'user_count'         => new sfValidatorInteger(array('required' => false)),
      'logo'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'accesskey'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_public'          => new sfValidatorBoolean(array('required' => false)),
      'is_activated'       => new sfValidatorBoolean(array('required' => false)),
      'expires_at'         => new sfValidatorDateTime(),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
      'slug'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'Network', 'column' => array('subdomain'))),
        new sfValidatorDoctrineUnique(array('model' => 'Network', 'column' => array('slug', 'id'))),
        new sfValidatorDoctrineUnique(array('model' => 'Network', 'column' => array('slug'))),
      ))
    );

    $this->widgetSchema->setNameFormat('network[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Network';
  }

}
