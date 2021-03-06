<?php

/**
 * NetworkTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class NetworkTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object NetworkTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Network');
    }
    
    public function retrieveByPk($PrimaryKey)
    {
	  $q = Doctrine_Query::create()
	    ->from('Network n')
	    ->where('n.id = ?', $PrimaryKey);
	 
	   return $q->execute();
    }
    
	public function getActiveNetworks(Doctrine_Query $q = null)
	{
	  if (is_null($q))
	  {
	    $q = Doctrine_Query::create()
	      ->from('Network n');
	  }
	  	  
	  $q->andWhere('n.is_activated = 1')
    	->addOrderBy('n.expires_at DESC');
	 
	  return $q;
	}

}