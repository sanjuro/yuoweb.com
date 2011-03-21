<?php

class UserSearchForm extends sfForm
 {
  public function configure()
  {
 	$this->widgetSchema['search'] = new sfWidgetFormInputText();
 	
 	$this->validatorSchema['search'] = new sfValidatorString(array('max_length' => 20));
 		
    $this->widgetSchema->setNameFormat('user_search[%s]');
  }

}
?>