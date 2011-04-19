<?php

/**
 * WebuyProduct form.
 *
 * @package    Spark
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class WebuyProductForm extends PluginWebuyProductForm
{
  public function configure()
  {
     unset(      
      $this['created_at'], $this['updated_at']
    );
  }
}
