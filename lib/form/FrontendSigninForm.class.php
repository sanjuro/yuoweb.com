<?php

/**
 * FrontendSigninForm for sfGuardAuth signin action
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfGuardFormSignin.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class FrontendSigninForm extends sfGuardFormSignin
{
  public function configure()
  {
  	parent::configure();
  	
  	if ($this->getOption("network") instanceof Network && ($this->getOption("network")))
	{
	    $currentNetwork = $this->getOption("network");
	}else{
		throw new InvalidArgumentException("You must pass a network object as an option to this form!");	
	}
  	
    $this->setWidgets(array(
      'username' => new sfWidgetFormInputText( array(),array( 'size' => '25')),
      'password' => new sfWidgetFormInputPassword(array('type' => 'password'),array( 'size' => '25')),
      'remember' => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'username' => new sfValidatorString(),
      'password' => new sfValidatorString(),
      'remember' => new sfValidatorBoolean( array( 'required' => false ) ),
    ));	
    
    if (sfConfig::get('app_sf_guard_plugin_allow_login_with_email', true))
    {
      $this->widgetSchema['username']->setLabel('Username or E-Mail');
    }
  	
  	//echo '<pre>';print_r($currentNetwork->getTitle());exit;	
  	if ( $currentNetwork->getIsPublic() != 1 ){

  		$this->widgetSchema['accesskey'] = new sfWidgetFormInputText( array('label' => 'Access Key') );
  		
  		$this->validatorSchema['accesskey'] = new sfValidatorRegex( array( 'pattern' => '/'.$currentNetwork->getAccesskey().'/' ),array(
				'required'   => 'Please enter the secret network access key',
  				'invalid'    => 'You have entered the wrong key, please check your input'
				 ) );
  	}else {
  		
  		$this->widgetSchema['accesskey'] = new sfWidgetFormInputHidden( array('label' => '') );
  		
  		$this->validatorSchema['accesskey'] = new sfValidatorString(array('max_length' => 8, 'required' => false));

  	}	
  	
    $this->validatorSchema->setPostValidator(new sfGuardValidatorUser());

    $this->widgetSchema->setNameFormat('signin[%s]');

  	
  }
}