<?php

/**
 * PluginComment form.
 *
 * @package    vjCommentPlugin
 * @subpackage form
 * @author     Jean-Philippe MORVAN <jp.morvan@ville-villejuif.fr>
 * @version    SVN: $Id$
 */

class FrontendCommentForm extends PluginCommentCommonForm
{
  public $currentUser;
	
  public function setup()
  {
    parent::setup();
    
    $user = $this->getOption('user');
    
    $this->currentUser = $user;
    
    $fields = array(
      'body'
    );
    if(vjComment::isGuardBindEnabled())
    {
      $fields[] = 'user_id';
    }
    $this->useFields($fields);
    
    $this->widgetSchema['reply_author'] = new sfWidgetFormInputText(array(), array('readonly' => "readonly"));
    $this->widgetSchema->setLabel('reply_author', __('Reply to', array(), 'vjComment'));
    $this->widgetSchema->setHelp('author_email', __('Your email will never be published', array(), 'vjComment'));
    $this->widgetSchema['user_id'] = new sfWidgetFormInputHidden();

    /**
    if( vjComment::isUserBoundAndAuthenticated($user) )
    {
        unset( $this['author_email'], $this['author_website'], $this['author_name'] );
    }
    else
    {
        unset( $this['user_id'] );
    }
    if (vjComment::isCaptchaEnabled() && !vjComment::isUserBoundAndAuthenticated($user) )
    {
      $this->addCaptcha();
    }
    **/
    $this->widgetSchema->setNameFormat($this->getOption('name').'[%s]');
  }
  
  public function updateObject($values = null)
  { 
    if (is_null($values))
    {
      $values = $this->values;
    }
    
    $values['username'] = $values['email_address'];
	
	$values = $this->processValues($values);
		 
	$this->object->fromArray($values);
	   	 
	$this->updateObjectEmbeddedForms($values);
	   	 
	parent::updateObject($values);	
  }
  
  protected function addCaptcha()
  {
    $this->widgetSchema['captcha'] = new sfWidgetFormReCaptcha(array(
      'public_key' => sfConfig::get('app_recaptcha_public_key')
    ));

    $this->validatorSchema['captcha'] = new sfValidatorReCaptcha(array(
      'private_key' => sfConfig::get('app_recaptcha_private_key')
    ));
    $this->validatorSchema['captcha']
        ->setMessage('captcha', __('The captcha is not valid (%error%).', array(), 'vjComment'))
        ->setMessage('server_problem', __('Unable to check the captcha from the server (%error%).', array(), 'vjComment'));
  }
}
