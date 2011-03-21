<?php

/**
 * sfMultisiteThemeProfileHost filter form base class.
 *
 * @package    Spark
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasesfMultisiteThemeProfileHostFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sf_multisite_theme_profile_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfMultisiteThemeProfile'), 'add_empty' => true)),
      'host_uri'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'                    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'sf_multisite_theme_profile_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfMultisiteThemeProfile'), 'column' => 'id')),
      'host_uri'                      => new sfValidatorPass(array('required' => false)),
      'created_at'                    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('sf_multisite_theme_profile_host_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfMultisiteThemeProfileHost';
  }

  public function getFields()
  {
    return array(
      'id'                            => 'Number',
      'sf_multisite_theme_profile_id' => 'ForeignKey',
      'host_uri'                      => 'Text',
      'created_at'                    => 'Date',
      'updated_at'                    => 'Date',
    );
  }
}
