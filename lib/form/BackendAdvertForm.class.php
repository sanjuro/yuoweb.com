<?php

class BackendAdvertForm extends BaseAdvertForm {

  public function configure()
  {
  	
	$this->widgetSchema['image_path'] = new sfWidgetFormInputFile(array(
	  'label' => 'Image',
	));

	$this->validatorSchema['image_path'] = new sfValidatorFile(array(
	  'required'   => false,
	  'path'       => sfConfig::get('sf_image_dir').DIRECTORY_SEPARATOR.'adverts', 
	  'max_size'   => '1024000',  
	  'mime_types' => array('image/jpeg',
	                    'image/jpg',
	                    'image/gif',
	                    'image/png')
	), array(
	    'invalid'    => 'Invalid file.',
	    'required'   => 'Select a file to upload.',
	    'max_size'   => 'File size limit is 1MB, please make your file smaller',
	    'mime_types' => 'The file must be a supported type.'
	));
	
	/////////////////////////////////////////////////////////////////////
	/// Embed all Advert Network
	/////////////////////////////////////////////////////////////////////  	 
	if(!$this->isNew()) 	
	{
		$advertNetworkObjs = $this->getObject()->getAdvertNetworks()->execute();
	}else{
		$advertNetworkObjs = array();
	}
	//echo '<pre>';print_r($advertNetworkObjs);exit;
	if (count($advertNetworkObjs) < 1){
	      $advertNetworkObj = new Advert();   
	      $advertNetworkObjs[] = $advertNetworkObj;
	}
	
	$advertNetworksForm = new sfForm();
	  
	$count = 0;    
	
  	if(!$this->isNew())
	{	
		foreach( $advertNetworkObjs as $key => $advertNetworkObj )
		{	 
			  $advertNetworksForm->embedForm($key, new AdvertNetworkForm( $advertNetworkObj ) );
	     
		}  
	}else{
		 $advertNetworksForm->embedForm( 0, new AdvertNetworkForm( $advertNetworkObj ) );
	}
	// embed the contacts forms
    $this->embedForm('advertNetworks', $advertNetworksForm);
  	
  }
}
?>