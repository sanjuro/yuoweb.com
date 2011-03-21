<?php

/**
 * Message form.
 *
 * @package    Spark
 * @subpackage form
 * @author     Shadley Wentzel
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BackendPhotoForm extends BasePhotoForm
{
  
  public function configure()
  {
    unset(
      $this['updated_at']
    );
    
	$this->widgetSchema['url'] = new sfWidgetFormInputFile(array(
	  'label' => 'Photo',
	));

	$this->validatorSchema['url'] = new sfValidatorFile(array(
	  'required'   => true,
	  'path'       => sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'pictures', 
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
