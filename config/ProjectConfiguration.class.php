<?php

require_once __DIR__.'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('sfDoctrinePlugin');
	$this->enablePlugins('sfJqueryReloadedPlugin');
	$this->enablePlugins('sfMultisiteThemePlugin');
    $this->enablePlugins('sfImageTransformPlugin');
    $this->enablePlugins('idlErrorManagementPlugin');
    
    $this->dispatcher->connect('request.filter_parameters', array($this, 'filterRequestParameters'));
    
    $this->enablePlugins('vjCommentPlugin');
  }
 
  public function filterRequestParameters(sfEvent $event, $parameters)
  {
    $request = $event->getSubject();
 
    if (preg_match('#Mobile/.+Safari#i', $request->getHttpHeader('User-Agent')))
    {
     // $request->setRequestFormat('iphone');
    }
    //$request->setRequestFormat('iphone');
    return $parameters;
  }

}