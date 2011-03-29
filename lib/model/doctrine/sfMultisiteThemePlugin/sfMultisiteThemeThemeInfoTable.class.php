<?php

/**
 * sfMultisiteThemeThemeInfoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class sfMultisiteThemeThemeInfoTable extends PluginsfMultisiteThemeThemeInfoTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object sfMultisiteThemeThemeInfoTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('sfMultisiteThemeThemeInfo');
    }
    
    /**
     * Returns all active themes on the system
     *
     * @return Doctrine Query Object that fetches all the active themes on the system
     */
    public function getActiveThemes()
    {
	   $q = Doctrine_Query::create()
      	    ->from('sfMultisiteThemeThemeInfo smtti') 	  
	        ->where('smtti.theme_enabled = ?', 1); 
	 
	  return $q;
    }
    
    /**
     * Returns all active public themes on the system
     *
     * @return Doctrine Query Object that fetches all the active themes on the system
     */
    public function getActivePublicThemes()
    {
	   $q = Doctrine_Query::create()
      	    ->from('sfMultisiteThemeThemeInfo smtti') 	  
	        ->where('smtti.theme_enabled = ?', 1)
	        ->andWhere('smtti.is_private = ?', 0); 
	 
	  return $q;
    }

}