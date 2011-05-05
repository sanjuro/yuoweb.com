<?php

/**
 * sfMultisiteThemeProfileHost form base class.
 *
 * @method sfMultisiteThemeProfileHost getObject() Returns the current form's model object
 *
 * @package    Yuoweb
 * @subpackage form
 * @author     Shadley Wentzel
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasesfMultisiteThemeProfileHostForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                            => new sfWidgetFormInputHidden(),
      'sf_multisite_theme_profile_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfMultisiteThemeProfile'), 'add_empty' => false)),
      'host_uri'                      => new sfWidgetFormInputText(),
      'created_at'                    => new sfWidgetFormDateTime(),
      'updated_at'                    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'sf_multisite_theme_profile_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfMultisiteThemeProfile'))),
      'host_uri'                      => new sfValidatorString(array('max_length' => 255)),
      'created_at'                    => new sfValidatorDateTime(),
      'updated_at'                    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('sf_multisite_theme_profile_host[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfMultisiteThemeProfileHost';
  }

}
