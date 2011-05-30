<?php

/**
 * Photo form.
 *
 * @package    Spark
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PhotoForm extends BasePhotoForm
{
  public $currentUser;
  
  public function configure()
  {
    unset(
        $this['user_id'], $this['network_id'],
    	$this['created_at'], $this['updated_at']
    );
    
	if ($this->getOption("currentUser") instanceof sfUser)
	{
	    $this->currentUser = $this->getOption("currentUser");
	}
	
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
  
  public function updateObject($values = null)
  { 
    if (is_null($values))
    {
      $values = $this->values;
    }	    
    
    $network = Doctrine_Core::getTable('Network')
	           ->findOneBySlug($this->currentUser->getNetworkId());
	
	$values['user_id'] = $this->currentUser->getGuardUser()->getId();
	
	$values['network_id'] = $network->getId();
	  	 
	$values = $this->processValues($values);
		 
	$this->object->fromArray($values);
	     
	parent::updateObjectEmbeddedForms($values);
			 
	return $this->object;	
  }
}
