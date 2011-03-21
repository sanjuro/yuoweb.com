<?php

class FrontendUserProfileForm extends BaseUserProfileForm
{
  public function configure()
  {
    unset(
      $this['id'], $this['sfuser_id'],
      $this['country'], $this['birthday'],
      $this['mobile_no'], $this['description'],
      $this['profile_pic']
    );
    
  }
}
?>