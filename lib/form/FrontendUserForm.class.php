<?php
class FrontendUserForm extends BaseUserProfileForm
 {
  public function configure()
  {
    parent::configure();
    
    $this->embedRelation('sfGuardUser');
   
    unset(
      $this['birthday']
    );
    
    $this->widgetSchema['description'] = new sfWidgetFormTextarea();
    
	$this->widgetSchema['profile_pic'] = new sfWidgetFormInputFile(array(
	  'label' => 'Profile Pic',
	));
	
	$this->widgetSchema['sfGuardUser']['username'] = new sfWidgetFormInputHidden();
	
	$this->widgetSchema['sfGuardUser']['created_at'] = new sfWidgetFormInputHidden();
	
	$this->widgetSchema['sfGuardUser']['updated_at'] = new sfWidgetFormInputHidden();

	$this->validatorSchema['profile_pic'] = new sfValidatorFile(array(
	  'required'   => false,
	  'path'       => sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'profilepics', 
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

  }

}
?>