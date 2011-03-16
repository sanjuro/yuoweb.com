<?php
class FrontendSignupForm extends BasesfGuardUserForm
 {
  public function configure()
  {
    parent::configure();
    
    unset(
      $this['id'], $this['first_name'],
      $this['last_name'], $this['algorithm'],
      $this['salt'], $this['is_active'],
      $this['is_super_admin'], $this['last_login'],
      $this['created_at'], $this['updated_at'],
      $this['groups_list'], $this['permissions_list']
    );
        
    // create a new subcategory form for a new subcategory model object
	$frontend_network_form = new FrontendNetworkSignupForm();
	 
	// embed the subcategory form in the main category form
	$this->embedForm('frontendnetwork', $frontend_network_form);
	
	// set a custom label for the embedded form
    $this->widgetSchema['frontendnetwork']->setLabel('Network');

  }
  
	public function bind(array $taintedValues = null, array $taintedFiles = null) {
	 
	    // remove the embedded new form if the name field was not provided
	    if (is_null($taintedValues['frontendnetwork']['subdomain']) || strlen($taintedValues['frontendnetwork']['subdomain']) === 0 ) {
	 
	        unset($this->embeddedForms['frontendnetwork'], $taintedValues['frontendnetwork']);
	 
	        // pass the new form validations
	        $this->validatorSchema['frontendnetwork'] = new sfValidatorPass();
	 
	    } else {
	 
	        // set the category of the new subcategory form object
	        $this->embeddedForms['frontendnetwork']->getObject()->setClient($this->getObject());
	 
	    }
	 
	    // call parent bind method
	    parent::bind($taintedValues, $taintedFiles);
	 
	}
  

}
?>