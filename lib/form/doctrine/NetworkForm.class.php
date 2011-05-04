<?php

/**
 * Network form.
 *
 * @package    Spark
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NetworkForm extends BaseNetworkForm
{
  public function configure()
  {
    unset(
      $this['client_id'], $this['networktype_id'],
      $this['slug'], $this['expires_at'],
      $this['created_at'], $this['updated_at']
    );

	$this->widgetSchema['subdomain'] = new sfWidgetFormInputText( array('label' => 'Network Name') );
	
	$this->widgetSchema['logo'] = new sfWidgetFormInputFile(array(
	  'label' => 'Logo',
	));

	$this->validatorSchema['logo'] = new sfValidatorFile(array(
	  'required'   => false,
	  'path'       => sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'logos', 
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
	
	$this->widgetSchema['networkcategory_id'] = new sfWidgetFormDoctrineChoice(array( 'label' => 'Category', 'model' => $this->getRelatedModelName('NetworkCategory'), 'add_empty' => false));

	$this->widgetSchema['accesskey'] = new sfWidgetFormInputText( array('label' => 'Access Key: use this if you only want your close friends to access your network') );

	$this->validatorSchema['accesskey'] = new sfValidatorString(array('max_length' => 8, 'required' => false));
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
		foreach (Network::getDefaultFeatures() as $feature) 
	  	{
		  	$NetworkFeature = new NetworkFeature();	 
		  	$NetworkFeature->setNetworkId($this->object->getId()); 		
		  	$NetworkFeature->setFeatureId($feature); 	
		  	$NetworkFeature->setActive(1); 
		  	$NetworkFeature->setPosition(10 * $feature); 
		  	$NetworkFeature->save(); 
	  	}
		
		$ThemeProfile = new sfMultisiteThemeProfile();
		$ThemeProfile->setSiteName($this->object->getSlug());
		$ThemeProfile->setsfMultisiteThemeThemeInfoId(1);
		$ThemeProfile->save();
	}

    // embedded forms
    parent::saveEmbeddedForms($con); 
  }
}
