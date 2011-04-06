<?php

/*
 * This file is part of the symfony package.
 * (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once(dirname(__FILE__).'/../lib/BasesfGuardAuthActions.class.php');

/**
 *
 * @package    symfony
 * @subpackage plugin
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: actions.class.php 23319 2009-10-25 12:22:23Z Kris.Wallsmith $
 */
class sfGuardAuthActions extends BasesfGuardAuthActions
{
  public function preExecute()
  {
 	$this->network = Doctrine_Core::getTable('Network')
	           		->findOneById($this->request->getParameter('network_id')); 
 	
 	if($this->getUser()->isAuthenticated()){
 		$this->networkuser = $this->network->getUser($this->getUser()->getUserid()); 
 	}
  }
  
  public function executeSignin($request)
  {   		
    //$this->network = $this->getRoute()->getObject();
	/*
    $networkid = $request->getParameter('network_id');

	$this->network = Doctrine_Core::getTable('Network')
	           ->findOneById($networkid);
    */
    $user = $this->getUser();
   	 
    if (isset($user) && $user->isAuthenticated())
    {
      return $this->redirect('@network_dashboard');
    }

    //$class = sfConfig::get('app_sf_guard_plugin_signin_form', 'sfGuardFormSignin'); 
    $this->form = new FrontendSigninForm( null, array( "network" => $this->network ) );

    if ($request->isMethod('post'))
    { 
      $this->form->bind($request->getParameter('signin'));
      
      if ($this->form->isValid())
      { 
        $values = $this->form->getValues(); 
        $this->getUser()->signin($values['user'], array_key_exists('remember', $values) ? $values['remember'] : false);

        // always redirect to a URL set in app.yml
        // or to the referer
        // or to the homepage
        $signinUrl = sfConfig::get('app_sf_guard_plugin_success_signin_url', $user->getReferer($request->getReferer()));
	
        return $this->redirect('' != $signinUrl ? $signinUrl : '@network_dashboard');
      }
    }
    else
    {
      if ($request->isXmlHttpRequest())
      {
        $this->getResponse()->setHeaderOnly(true);
        $this->getResponse()->setStatusCode(401);

        return sfView::NONE;
      }

      // if we have been forwarded, then the referer is the current URL
      // if not, this is the referer of the current request
      $user->setReferer($this->getContext()->getActionStack()->getSize() > 1 ? $request->getUri() : $request->getReferer());

      $module = sfConfig::get('sf_login_module');
      
      $this->form->setDefault('accesskey', ''); 
      	
      if ($this->getModuleName() != $module)
      {
         return $this->redirect($module.'/'.sfConfig::get('sf_login_action'));
      }

      $this->getResponse()->setStatusCode(401);
    }
  }
  
  public function executeSignout($request)
  {
    $this->getUser()->signOut();

    //$signoutUrl = sfConfig::get('app_sf_guard_plugin_success_signout_url', $request->getReferer());

    $this->redirect( $this->generateUrl('homepage'));
  }
  
}

