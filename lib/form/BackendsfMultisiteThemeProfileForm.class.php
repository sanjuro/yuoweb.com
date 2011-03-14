<?php

class BackendsfMultisiteThemeProfileForm extends BasesfMultisiteThemeProfileForm {

  public function configure()
  {
  	parent::configure();
  	
    $this->widgetSchema['sf_multisite_theme_theme_info_id'] = new sfWidgetFormDoctrineChoice(array('label' => 'Theme', 'model' => $this->getRelatedModelName('sfMultisiteThemeThemeInfo'), 'add_empty' => false ));
  }
}
?>