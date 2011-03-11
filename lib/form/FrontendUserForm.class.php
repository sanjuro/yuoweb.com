<?php
class FrontendUserForm extends BaseUserProfileForm
 {
  public function configure()
  {
    parent::configure();
    
    $this->embedRelation('sfGuardUser');
    
    $this->widgetSchema['description'] = new sfWidgetFormTextarea();
    
	$this->widgetSchema['profile_pic'] = new sfWidgetFormInputFile(array(
	  'label' => 'Profile Pic',
	));

	$this->validatorSchema['profile_pic'] = new sfValidatorFile(array(
	  'required'   => true,
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