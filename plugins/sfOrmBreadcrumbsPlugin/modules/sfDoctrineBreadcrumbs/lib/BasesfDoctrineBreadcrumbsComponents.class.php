<?php

/**
 * @package    sfOrmBreadcrumbsPlugin
 * @subpackage modules
 * @author     Nicolò Pignatelli <info@nicolopignatelli.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BasesfDoctrineBreadcrumbsComponents extends sfComponents
{
  public function executeBreadcrumbs(sfWebRequest $request)
  {
    $module = $this->getContext()->getModuleName();
    $action = $this->getContext()->getActionName();
    
    $sf_orm_bc = new sfOrmBreadcrumbsDoctrine($module, $action);    
    $this->breadcrumbs = $sf_orm_bc->getBreadcrumbs();
    $this->separator = $sf_orm_bc->getSeparator();
  }
}
