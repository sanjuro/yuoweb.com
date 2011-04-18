<?php

class sfShoutPluginConfiguration extends sfPluginConfiguration
{
  public function initialize()
  {
    $this->dispatcher->connect('user.method_not_found', array('myUser', 'methodNotFound'));
  }
}