<?php

/**
 * ShoutClient form base class.
 *
 * @method ShoutClient getObject() Returns the current form's model object
 *
 * @package    Yuoweb
 * @subpackage form
 * @author     Shadley Wentzel
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseShoutClientForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'client_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Client'), 'add_empty' => true)),
      'network_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Network'), 'add_empty' => true)),
      'country_id'    => new sfWidgetFormInputText(),
      'username'      => new sfWidgetFormInputText(),
      'password'      => new sfWidgetFormInputText(),
      'api_id'        => new sfWidgetFormInputText(),
      'message_count' => new sfWidgetFormInputText(),
      'credit_left'   => new sfWidgetFormInputText(),
      'local_only'    => new sfWidgetFormInputText(),
      'dialing_code'  => new sfWidgetFormInputText(),
      'deleted_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'client_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Client'), 'required' => false)),
      'network_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Network'), 'required' => false)),
      'country_id'    => new sfValidatorInteger(array('required' => false)),
      'username'      => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'password'      => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'api_id'        => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'message_count' => new sfValidatorInteger(array('required' => false)),
      'credit_left'   => new sfValidatorNumber(array('required' => false)),
      'local_only'    => new sfValidatorInteger(array('required' => false)),
      'dialing_code'  => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'deleted_at'    => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('shout_client[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ShoutClient';
  }

}
