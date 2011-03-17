<?php
class FrontendSignupForm extends BasesfGuardUserForm
 {
  public $Client;
  
  public function configure()
  {
    parent::configure();
    
    $this->Client = '';
    
    unset(
      $this['id'], $this['first_name'],
      $this['last_name'], $this['password'], $this['algorithm'],
      $this['salt'], $this['is_active'],
      $this['is_super_admin'], $this['last_login'],
      $this['created_at'], $this['updated_at'],
      $this['groups_list'], $this['permissions_list']
    );
        
    // create a new subcategory form for a new subcategory model object
	$frontend_network_form = new FrontendNetworkSignupForm();
	 
	// embed the subcategory form in the main category form
	$this->embedForm('frontendnetwork', $frontend_network_form);
    //$this->mergeForm(new FrontendNetworkSignupForm());
	
	// set a custom label for the embedded form
    $this->widgetSchema['frontendnetwork']->setLabel('Network');

  }
  
  public function updateObject($values = null)
  { 
    if (is_null($values))
    {
      $values = $this->values;
    }
    
    $values['username'] = $values['email_address'];
		
	$values = $this->processValues($values);
		 
	$this->object->fromArray($values);
	   	 
	$this->updateObjectEmbeddedForms($values);
	   	 
	return $this->object;	
  }
  
  protected function doSave($con = null)
  { 
    if (is_null($con))
    {
      $con = $this->getConnection();
    }
   
    $this->updateObject();

    $this->object->save($con);
    
    $this->object->setPassword($this->object->getEmailAddress());
    
    $this->object->save($con);
    
  	if($this->isNew())
	{ 
		$Client = new Client();
		$Client->setUserId($this->object->getId());
		$Client->setFullname(ucwords($this->object->getUsername()));
		$Client->setEmail($this->object->getEmailAddress());
		$Client->setIsActivated(0);
		$Client->setNetworkCount(1);
		$Client->save();
		
		$Network = new Network();
		$Network->setClientId($Client->getId());
		$Network->setNetworktypeId(2);
		$Network->setSubdomain($this->values['frontendnetwork']['subdomain']);
		$Network->setTitle($this->object->getUsername().' Network');
		$Network->setFeatureCount(4);
		$Network->setUserCount(0);
		$Network->setIsPublic(1);
		$Network->setIsActivated(0);
		$Network->save();
		
		$ThemeProfile = new sfMultisiteThemeProfile();
		$ThemeProfile->setSiteName($Network->getSlug());
		$ThemeProfile->setsfMultisiteThemeThemeInfoId(1);
		$ThemeProfile->save();
	}

    // embedded forms
    parent::saveEmbeddedForms($con); 
  }
}
?>