<?php
class FrontendSignupForm extends BaseUserProfileForm
 {
  public function configure()
  {
    parent::configure();
    
    $this->embedRelation('sfGuardUser');
    
    $this->widgetSchema['description'] = new sfWidgetFormTextarea();
    
	$this->widgetSchema['profile_pic'] = new sfWidgetFormInputFile(array(
	  'label' => 'Profile Pic',
	));

  }

}
?>