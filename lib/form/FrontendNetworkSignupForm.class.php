<?php

class FrontendNetworkSignupForm extends BaseNetworkForm
{
  public function configure()
  {
    unset(
      $this['id'], $this['feature_count'],
      $this['user_count'], $this['accesskey'],
      $this['client_id'], $this['networktype_id'],
      $this['title'], $this['description'],
      $this['is_activated'], $this['slug'], 
      $this['expires_at'], $this['created_at'],
      $this['updated_at'], $this['logo'],
      $this['is_public']
    );

	$this->widgetSchema['subdomain'] = new sfWidgetFormInputText( array('label' => 'Network Name') );
	
	$this->widgetSchema['networkcategory_id'] = new sfWidgetFormDoctrineChoice(array( 'label' => 'Category', 'model' => $this->getRelatedModelName('NetworkCategory'), 'add_empty' => false));
	
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
		$ThemeProfile = new sfMultisiteThemeProfile();
		$ThemeProfile->setSiteName($this->object->getSlug());
		$ThemeProfile->setsfMultisiteThemeThemeInfoId(1);
		$ThemeProfile->save();
	}

    // embedded forms
    parent::saveEmbeddedForms($con); 
  }
}