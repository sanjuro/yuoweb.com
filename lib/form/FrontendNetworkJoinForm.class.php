<?php
class FrontendNetworkJoinForm extends BasesfGuardUserForm
{
  public $network;
  
  public function configure()
  {
    parent::configure();

	if ($this->getOption("network") instanceof Network)
	{
	    $this->network = $this->getOption("network");
	}
    
    unset(
      $this['id'], $this['algorithm'],
      $this['first_name'], $this['lasst_name'],
      $this['salt'], $this['is_active'],
      $this['is_super_admin'], $this['last_login'],
      $this['created_at'], $this['updated_at'],
      $this['groups_list'], $this['permissions_list']
    );
    
    $this->validatorSchema['email_address'] = new sfValidatorString(array('max_length' => 255, 'required' => false));

	/////////////////////////////////////////////////////////////////////
	/// Embed UserProfile Form
	///////////////////////////////////////////////////////////////////// 
	if(!$this->isNew()) 	
	{
		$userProfileObjs = $this->getObject()->getUserProfile()->execute(); 
	}else{
		$userProfileObjs = array();
	}
	
	if (count($userProfileObjs) < 1){
	      $userProfileObj = new UserProfile();  
	      $userProfileObjs[] = $userProfileObj;
	}
	
	$userProfilesForm = new sfForm();
	  
	$count = 0;    
	
  	if(!$this->isNew())
	{	
		foreach( $userProfileObjs as $key => $userProfileObj )
		{	 
			  $userProfilesForm->embedForm($key, new FrontendUserProfileForm( $userProfileObj ) );
	     
		}  
	}else{
		 $userProfilesForm->embedForm( 0, new FrontendUserProfileForm( $userProfileObj ) );
	}
	// embed the contacts forms
    $this->embedForm('userProfiles', $userProfilesForm);
    
  }
  
  public function bind(array $taintedValues = null, array $taintedFiles = null){

    $userProfilesForm = new sfForm();
  
    foreach($taintedValues['userProfiles'] as $key => $new_occurrence)
    {
      $userProfileObj = new UserProfile();
      $userProfileObj->setsfGuardUser($this->getObject());  
      $userProfileObj_form = new FrontendUserProfileForm($userProfileObj);
	
      $userProfilesForm->embedForm( $key, $userProfileObj_form );
    }
	
    $this->embedForm('userProfiles', $userProfilesForm);

    parent::bind($taintedValues, $taintedFiles);
  }
  
  protected function doSave($con = null)
  { 
    if (is_null($con))
    {
      $con = $this->getConnection();
    }
      
    $this->updateObject();
	
    $this->object->save($con);    
    
  	if($this->isNew())
	{ 
	    $NetworkUser = new NetworkUser();
	    $NetworkUser->setUserId($this->object->getId());
	    $NetworkUser->setNetworkId($this->network->getId());
	    $NetworkUser->save();
	}

    // embedded forms
    parent::saveEmbeddedForms($con); 
  }
}
?>