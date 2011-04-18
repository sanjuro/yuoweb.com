<?php
class BackendWebuyDealForm extends BaseWebuyDealForm
{
  public function configure()
  {
    parent::configure();
    
  	if ($this->getOption("network") instanceof Network)
	{
	    $this->network = $this->getOption("network");
	}
	
    unset(      
      $this['id'], $this['networkuser_id'],
      $this['shoutclient_id'],
      $this['updated_at'], $this['slug']
    );
    
    // Get all Embedded Webuy prodcut forms
	if(!$this->isNew()) 	
	{
		$webuyProductObjs[] = $this->getObject()->getWebuyProduct();
	}else{
		$webuyProductObjs[] = array();
	}
	
	if (count($webuyProductObjs) < 1){
	      $webuyProductObj = new WebuyProduct();   
	      $webuyProductObjs[] = $webuyProductObj;
	}
	
	$webuyProductForm = new sfForm();
	  
	$count = 0;    
	
  	if(!$this->isNew())
	{	
		foreach( $webuyProductObjs as $key => $webuyProductObj )
		{	 
			  $webuyProductForm->embedForm($key, new WebuyProductForm( $webuyProductObj ) );
	     
		}  
	}else{ 
		 $webuyProductForm->embedForm( 0, new WebuyProductForm( $webuyProductObj ) );
	}
	 
	// embed the subcategory form in the main category form
    $this->embedForm('backendwebuyproductform', $webuyProductForm);
    //$this->mergeForm(new FrontendNetworkSignupForm());
	
	// set a custom label for the embedded form
    $this->widgetSchema['backendwebuyproductform']->setLabel('Product');
  }
}