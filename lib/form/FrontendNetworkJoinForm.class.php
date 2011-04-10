<?php
class FrontendNetworkJoinForm extends BasesfGuardUserForm
{
  public $network;
  public $sfGuardUser;
  
  public function configure()
  {
    parent::configure();

	if ($this->getOption("network") instanceof Network)
	{
	    $this->network = $this->getOption("network");
	}
    
    unset(
      $this['id'], $this['algorithm'],
      $this['first_name'], $this['last_name'],
      $this['salt'], $this['is_active'],
      $this['is_super_admin'], $this['last_login'],
      $this['created_at'], $this['updated_at'],
      $this['groups_list'], $this['permissions_list']
    );
        
    $this->validatorSchema['username'] = new sfValidatorString(array('max_length' => 128), array(
     'required'   => 'Please choose a username',
    ));
    
    $this->validatorSchema['email_address'] = new sfValidatorString(array('max_length' => 255, 'required' => false));
    
    $this->validatorSchema->setPostValidator(
  		new sfValidatorCallback(array
    		('callback' => array($this, 'sfGuardUser_callback'))));
     
	
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
  
  public function bind(array $taintedValues = null, array $taintedFiles = null)
  {

	if ($this->sfGuardUser)
	{
    $userProfilesForm = new sfForm();
  
    foreach($taintedValues['userProfiles'] as $key => $new_occurrence)
    {
      $userProfileObj = new UserProfile();
      $userProfileObj->setsfGuardUser($this->getObject());  
      $userProfileObj_form = new FrontendUserProfileForm($userProfileObj);
	
      $userProfilesForm->embedForm( $key, $userProfileObj_form );
    }
	
    $this->embedForm('userProfiles', $userProfilesForm);
	}
	
    parent::bind($taintedValues, $taintedFiles);
  }
  
  protected function doSave($con = null)
  { 
    if (is_null($con))
    {
      $con = $this->getConnection();
    }
    
    if ($this->sfGuardUser->getId())  
    {	   
	    $this->object = $this->sfGuardUser;
    	
    	$NetworkUser = new NetworkUser();
	    $NetworkUser->setUserId($this->sfGuardUser->getId());
	    $NetworkUser->setNetworkId($this->network->getId());
	    $NetworkUser->save();

    }else {
   	 	$this->updateObject();
	
    	$this->object->save($con);      

	    $NetworkUser = new NetworkUser();
	    $NetworkUser->setUserId($this->object->getId());
	    $NetworkUser->setNetworkId($this->network->getId());
	    $NetworkUser->save();
	    
    	// embedded forms
   	 	parent::saveEmbeddedForms($con); 
    }


  }
  
  public function sfGuardUser_callback($validator, $values)
  {    

	$sfGuardUserFromUsername = Doctrine_Core::getTable('sfGuardUser')
	           		->findOneByUsername($values['username']); 
	           		
	$sfGuardUserFromUsernameFromEmail = Doctrine_Core::getTable('sfGuardUser')
	           		->findOneByEmailAddress($values['email_address']); 
 
   if ($sfGuardUserFromUsername)
   {
     if($sfGuardUserFromUsername->getEmailAddress() == $values['email_address']){
     	$this->sfGuardUser = $sfGuardUserFromUsername;
     }else {
     	throw new sfValidatorError($validator, 'This username is in use');
     	
     }
   }
   
   if ($sfGuardUserFromUsernameFromEmail)
   {
     if($sfGuardUserFromUsernameFromEmail->getUsername() == $values['username']){
     	$this->sfGuardUser = $sfGuardUserFromUsernameFromEmail;
     }else {
     	throw new sfValidatorError($validator, 'This email is in use');     	
     }
   }
   
   return $values;
  }
}
?>