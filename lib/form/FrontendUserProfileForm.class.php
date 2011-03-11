<?php

class FrontendUserProfileForm extends BaseUserProfileForm
{
  public function configure()
  {
    unset(
      $this['id'], $this['sfuser_id'],
      $this['mobile_no'], $this['description'],
      $this['profile_pic']
    );
    
     $this->validatorSchema['birthday'] = new sfValidatorDateTime(array('required' => false));
  }
}
?>