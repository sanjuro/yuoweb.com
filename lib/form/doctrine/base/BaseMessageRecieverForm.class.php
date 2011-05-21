<?php

/**
 * MessageReciever form base class.
 *
 * @method MessageReciever getObject() Returns the current form's model object
 *
 * @package    Yuoweb
 * @subpackage form
 * @author     Shadley Wentzel
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMessageRecieverForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'message_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Message'), 'add_empty' => true)),
      'user_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'messagestatus_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MessageStatus'), 'add_empty' => true)),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'message_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Message'), 'required' => false)),
      'user_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'required' => false)),
      'messagestatus_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MessageStatus'), 'required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('message_reciever[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MessageReciever';
  }

}
