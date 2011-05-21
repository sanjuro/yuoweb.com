<?php

/**
 * HeadspacePostTagForm for adding a new tag item
 *
 * @package    yUoweb
 * @subpackage form
 * @author     Shadley Wentzel <shad6ster@gmail.com>
 * @version    SVN: $Id: FrontendHeadspaceTagForm.class.php 1 2009-11-02 21:41:21Z Shadley Wentzel $
 */
class FrontendHeadspacePostTagForm extends PluginHeadspacePostTagForm
{
	
  public function configure()
  {
  	parent::configure();
  	
    unset(
      $this['post_id']
    );

  }
  
}