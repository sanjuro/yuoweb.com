<?php

/**
 * Connection form base class.
 *
 * @method Connection getObject() Returns the current form's model object
 *
 * @package    Yuoweb
 * @subpackage form
 * @author     Shadley Wentzel
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseConnectionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'owner_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Owner'), 'add_empty' => true)),
      'reciever_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Reciever'), 'add_empty' => true)),
      'owner_response'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('OwnerResponse'), 'add_empty' => true)),
      'reciever_response' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RecieverResponse'), 'add_empty' => true)),
      'type_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ConnectionType'), 'add_empty' => true)),
      'state_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ConnectionState'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'owner_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Owner'), 'required' => false)),
      'reciever_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Reciever'), 'required' => false)),
      'owner_response'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('OwnerResponse'), 'required' => false)),
      'reciever_response' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('RecieverResponse'), 'required' => false)),
      'type_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ConnectionType'), 'required' => false)),
      'state_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ConnectionState'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('connection[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Connection';
  }

}
