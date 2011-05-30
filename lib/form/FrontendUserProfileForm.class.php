<?php

class FrontendUserProfileForm extends BaseUserProfileForm
{
  public function configure()
  {
    unset(
      $this['id'], $this['sfuser_id'],
      $this['country'], $this['birthday'],
      $this['mobile_no'], $this['description'],
      $this['profile_pic'], $this['updated_at'],
      $this['created_at']
    );
    
  }
  
  public function updateObject($values = null)
  { 
    if (is_null($values))
    {
      $values = $this->values;
    }	    

    if($this->isNew()){
		$values['created_at'] = date('Y-m-d H:m:s');
    }
    
    $values['updated_at'] = date('Y-m-d H:m:s');
	  	 
	parent::updateObject();
  }
}
?>