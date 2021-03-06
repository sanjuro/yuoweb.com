<?php

/**
 * PhotoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PhotoTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object PhotoTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Photo');
    }
    

/**
 * Function to find photos on a network with a limit
 * 
 * This function will find photos from a given netowrk to the 
 * limit specified by the user
 * 
 * @param Doctrine_Query $q 
 * @param integer $limit Number of photos wanted
 * 
 * @return query Base Query to find photos on a network
 */
	public function getPhotosForNetworkWithLimit(Doctrine_Query $q)
	{
	  if (is_null($q))
	  {
	    $q = Doctrine_Query::create()
	      ->from('Photo p');
	  } 
	  
	    $q->where('p.is_private != 1')
          ->orderBy('p.created_at DESC')
          ->limit(4);
		
	  return $q;	
	}
}