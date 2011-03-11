<?php

/**
 * sfMultisiteThemeProfileTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class sfMultisiteThemeProfileTable extends PluginsfMultisiteThemeProfileTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object sfMultisiteThemeProfileTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('sfMultisiteThemeProfile');
    }
    
	public function getWithTheme(Doctrine_Query $q = null)
	{
	  if (is_null($q))
	  {
	   $q = Doctrine_Query::create()
      	    ->from('sfMultisiteThemeProfile smtp');      	  
	  }
	  
	  $q->leftJoin('smtp.sfMultisiteThemeThemeInfo smti'); 
	  
	  return $q;	
	}
}