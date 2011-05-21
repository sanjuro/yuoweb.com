<?php

/**
 * PhotoGallery filter form base class.
 *
 * @package    Yuoweb
 * @subpackage filter
 * @author     Shadley Wentzel
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePhotoGalleryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'          => new sfWidgetFormFilterInput(),
      'networkuser_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkUser'), 'add_empty' => true)),
      'photo_count'    => new sfWidgetFormFilterInput(),
      'is_private'     => new sfWidgetFormFilterInput(),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'title'          => new sfValidatorPass(array('required' => false)),
      'networkuser_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('NetworkUser'), 'column' => 'id')),
      'photo_count'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_private'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('photo_gallery_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PhotoGallery';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'title'          => 'Text',
      'networkuser_id' => 'ForeignKey',
      'photo_count'    => 'Number',
      'is_private'     => 'Number',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
    );
  }
}
