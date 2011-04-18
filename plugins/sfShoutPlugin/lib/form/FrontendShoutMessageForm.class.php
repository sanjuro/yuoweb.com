<?php
public class FrontendShoutMessageForm extends BaseShoutMessageForm
{
  public function configure()
  {
    parent::configure();
	
    unset(      
      $this['id'], $this['product_id'],
      $this['created_at'], $this['updated_at']
    );
    
	$this->widgetSchema['mobile_number'] = new sfWidgetFormTextarea();

	$this->widgetSchema['message'] = new sfWidgetFormTextarea();
	
	
    $this->validatorSchema['mobile_number'] = new sfValidatorString(array('max_length' => 30), array(
     'required'   => 'Please enter a valid mobile number',
    ));
	
	$this->validatorSchema['message'] = new sfValidatorString(array('max_length' => 150, 'required' => false));
    
  }
}