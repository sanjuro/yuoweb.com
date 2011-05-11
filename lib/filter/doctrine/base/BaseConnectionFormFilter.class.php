<?php

/**
 * Connection filter form base class.
 *
 * @package    Yuoweb
 * @subpackage filter
 * @author     Shadley Wentzel
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseConnectionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'owner_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Owner'), 'add_empty' => true)),
      'reciever_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Reciever'), 'add_empty' => true)),
      'owner_response'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('OwnerResponse'), 'add_empty' => true)),
      'reciever_response' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('RecieverResponse'), 'add_empty' => true)),
      'type_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ConnectionType'), 'add_empty' => true)),
      'state_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ConnectionState'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'owner_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Owner'), 'column' => 'id')),
      'reciever_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Reciever'), 'column' => 'id')),
      'owner_response'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('OwnerResponse'), 'column' => 'id')),
      'reciever_response' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('RecieverResponse'), 'column' => 'id')),
      'type_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ConnectionType'), 'column' => 'id')),
      'state_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ConnectionState'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('connection_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Connection';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'owner_id'          => 'ForeignKey',
      'reciever_id'       => 'ForeignKey',
      'owner_response'    => 'ForeignKey',
      'reciever_response' => 'ForeignKey',
      'type_id'           => 'ForeignKey',
      'state_id'          => 'ForeignKey',
    );
  }
}
