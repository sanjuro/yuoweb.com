<?php

/**
 * sfOrmBreadcrumbsDoctrine
 * 
 * @package    sfOrmBreadcrumbsPlugin
 * @subpackage lib
 * @author     Nicolò Pignatelli <info@nicolopignatelli.com>
 */
class sfOrmBreadcrumbsDoctrine extends sfOrmBreadcrumbs
{   
  protected function buildBreadcrumb($item)
  {
    $request = sfContext::getInstance()->getRequest();
    $routing = sfContext::getInstance()->getRouting();
    
    if(isset($item['model']) && $item['model'] == true)
    {
      $object = $request->getAttribute('sf_route')->getObject(); 
      if(isset($item['subobject']))
      {
        $subobject = $object->get($item['subobject']);
        $route_object = $subobject;
      }
      else 
      {
        $route_object = $object;
      }
      
      $name = preg_replace('/%(\w+)%/e', '$object->get("$1")', $item['name']);
      $breadcrumb = array('name' => $name, 'url' => $routing->generate($item['route'], $route_object));
    }
    else 
    {
      $url = isset($item['route']) ? $routing->generate($item['route']) : null;
      $breadcrumb = array('name' => $item['name'], 'url' => $url);
    }
	
	$case = $this->getCaseForItem($item);
	$breadcrumb['name'] = $this->switchCase($breadcrumb['name'], $case);
    
    return $breadcrumb;
  }
}
?>