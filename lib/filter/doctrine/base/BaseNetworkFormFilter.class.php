<?php

/**
 * Network filter form base class.
 *
 * @package    Spark
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseNetworkFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'client_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Client'), 'add_empty' => true)),
      'networktype_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkType'), 'add_empty' => true)),
      'networkcategory_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkCategory'), 'add_empty' => true)),
      'subdomain'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'title'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'feature_count'      => new sfWidgetFormFilterInput(),
      'user_count'         => new sfWidgetFormFilterInput(),
      'logo'               => new sfWidgetFormFilterInput(),
      'accesskey'          => new sfWidgetFormFilterInput(),
      'is_public'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_activated'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'expires_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'slug'               => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'client_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Client'), 'column' => 'id')),
      'networktype_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('NetworkType'), 'column' => 'id')),
      'networkcategory_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('NetworkCategory'), 'column' => 'id')),
      'subdomain'          => new sfValidatorPass(array('required' => false)),
      'title'              => new sfValidatorPass(array('required' => false)),
      'description'        => new sfValidatorPass(array('required' => false)),
      'feature_count'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'user_count'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'logo'               => new sfValidatorPass(array('required' => false)),
      'accesskey'          => new sfValidatorPass(array('required' => false)),
      'is_public'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_activated'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'expires_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'               => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('network_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Network';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'client_id'          => 'ForeignKey',
      'networktype_id'     => 'ForeignKey',
      'networkcategory_id' => 'ForeignKey',
      'subdomain'          => 'Text',
      'title'              => 'Text',
      'description'        => 'Text',
      'feature_count'      => 'Number',
      'user_count'         => 'Number',
      'logo'               => 'Text',
      'accesskey'          => 'Text',
      'is_public'          => 'Boolean',
      'is_activated'       => 'Boolean',
      'expires_at'         => 'Date',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
      'slug'               => 'Text',
    );
  }
}
