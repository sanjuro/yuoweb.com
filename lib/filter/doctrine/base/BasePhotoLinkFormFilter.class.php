<?php

/**
 * PhotoLink filter form base class.
 *
 * @package    Spark
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePhotoLinkFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'photo_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Photo'), 'add_empty' => true)),
      'gallery_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PhotoGallery'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'photo_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Photo'), 'column' => 'id')),
      'gallery_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PhotoGallery'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('photo_link_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PhotoLink';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'photo_id'   => 'ForeignKey',
      'gallery_id' => 'ForeignKey',
    );
  }
}
