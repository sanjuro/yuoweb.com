<?php

/**
 * sfMultisiteThemeProfile form base class.
 *
 * @method sfMultisiteThemeProfile getObject() Returns the current form's model object
 *
 * @package    Spark
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasesfMultisiteThemeProfileForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                               => new sfWidgetFormInputHidden(),
      'site_name'                        => new sfWidgetFormInputText(),
      'sf_multisite_theme_theme_info_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfMultisiteThemeThemeInfo'), 'add_empty' => false)),
      'created_at'                       => new sfWidgetFormDateTime(),
      'updated_at'                       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'site_name'                        => new sfValidatorString(array('max_length' => 255)),
      'sf_multisite_theme_theme_info_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfMultisiteThemeThemeInfo'), 'required' => false)),
      'created_at'                       => new sfValidatorDateTime(),
      'updated_at'                       => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'sfMultisiteThemeProfile', 'column' => array('site_name')))
    );

    $this->widgetSchema->setNameFormat('sf_multisite_theme_profile[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfMultisiteThemeProfile';
  }

}
