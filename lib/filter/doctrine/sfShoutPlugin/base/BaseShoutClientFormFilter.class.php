<?php

/**
 * ShoutClient filter form base class.
 *
 * @package    Yuoweb
 * @subpackage filter
 * @author     Shadley Wentzel
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseShoutClientFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'client_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Client'), 'add_empty' => true)),
      'network_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Network'), 'add_empty' => true)),
      'country_id'    => new sfWidgetFormFilterInput(),
      'username'      => new sfWidgetFormFilterInput(),
      'password'      => new sfWidgetFormFilterInput(),
      'api_id'        => new sfWidgetFormFilterInput(),
      'message_count' => new sfWidgetFormFilterInput(),
      'credit_left'   => new sfWidgetFormFilterInput(),
      'local_only'    => new sfWidgetFormFilterInput(),
      'dialing_code'  => new sfWidgetFormFilterInput(),
      'deleted_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'client_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Client'), 'column' => 'id')),
      'network_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Network'), 'column' => 'id')),
      'country_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'username'      => new sfValidatorPass(array('required' => false)),
      'password'      => new sfValidatorPass(array('required' => false)),
      'api_id'        => new sfValidatorPass(array('required' => false)),
      'message_count' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'credit_left'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'local_only'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'dialing_code'  => new sfValidatorPass(array('required' => false)),
      'deleted_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('shout_client_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ShoutClient';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'client_id'     => 'ForeignKey',
      'network_id'    => 'ForeignKey',
      'country_id'    => 'Number',
      'username'      => 'Text',
      'password'      => 'Text',
      'api_id'        => 'Text',
      'message_count' => 'Number',
      'credit_left'   => 'Number',
      'local_only'    => 'Number',
      'dialing_code'  => 'Text',
      'deleted_at'    => 'Date',
    );
  }
}
