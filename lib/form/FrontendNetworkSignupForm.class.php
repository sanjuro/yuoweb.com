<?php

class FrontendNetworkSignupForm extends BaseNetworkForm
{
  public function configure()
  {
    unset(
      $this['client_id'], $this['networktype_id'],
      $this['is_activated'], $this['slug'], 
      $this['expires_at'], $this['created_at'],
      $this['updated_at'], $this['logo']
    );

	$this->widgetSchema['subdomain'] = new sfWidgetFormInputText( array('label' => 'Network Name') );
	
	$this->widgetSchema['networkcategory_id'] = new sfWidgetFormDoctrineChoice(array( 'label' => 'Category', 'model' => $this->getRelatedModelName('NetworkCategory'), 'add_empty' => false));

  }
}