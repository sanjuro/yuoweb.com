<?php

/**
 * NetworkUserTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class NetworkUserTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object NetworkUserTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('NetworkUser');
    }
    
	public function getWithUsers(Doctrine_Query $q = null)
	{      	
	  if (is_null($q))
	  {
	    $q = Doctrine_Query::create()
	      ->from('NetworkUser nu');      	  
	  }

	  $q->leftJoin('nu.sfGuardUser sgu');
      	
	  return Doctrine_Core::getTable('sfGuardUser')->getWithUserProfile($q); 	     
	}
	
	public function getNetworkUser($NetworkID, $UserID)
	{ 
	    return $this->fetchNetworkUserWithUser(null, $NetworkID, $UserID);     
	}
	
	public function getNetworkUserWithUser($NetworkID, $UserID)
	{ 
	  $q = Doctrine_Query::create()
		  ->leftJoin('nu.sfGuardUser su')
	      ->from('NetworkUser nu');	  
	  
	  return $this->fetchNetworkUserWithUser($q, $NetworkID, $UserID);     
	}
	
/**
 * Function to retrieve all feed items for a NetworkUser
 * 
 * This function will retrieve all the feed items for a networkuser
 * orderd by the created_at attribute. 
 * 
 * @param  void
 * 
 * @return query Base Query to find feeds on a networkuser
 */
	public function getFeedsForUser(Doctrine_Query $q = null)
	{
	  if (is_null($q))
	  {
	    $q = Doctrine_Query::create()
	      ->from('NetworkUser nu');
      	  
	  } 
	  
	  $q->leftJoin('nu.Feed f')
      	->addOrderBy('f.created_at DESC');
	
	  return Doctrine_Core::getTable('Feed')->getFeedsForUser($q); 	
	}
	
/**
 * Function to find a single networkuser on the network
 * 
 * This function will find a single network user object on
 * a given network for a given user id
 * 
 * @param Doctrine_Query $q
 * @param integer $NetworkID Id of network
 * @param integer $UserID Id of user
 * 
 * @return NetworkUser The network user object found
 */
	public function fetchNetworkUserWithUser(Doctrine_Query $q = null, $NetworkID, $UserID)
	{
	  if (is_null($q))
	  {
	    $q = Doctrine_Query::create()
	      ->from('NetworkUser nu');    	  
	  }
	  
	  $q->where('nu.network_id = ?', $NetworkID)
        ->andWhere('nu.user_id = ?', $UserID); 
	  
	  //$NetworkUser = $q->fetchOne() ;
	  
	   //foreach ($q->fetchOne() as $value) {
	   ///$NetworkUser = $value;
	   //}

	   return $q->fetchOne();	 
	}
	
	public function getBackendNetworkUsersForClient(Doctrine_Query $q = null)
	{
	    $rootAlias = $q->getRootAlias();
	 
	    $q->leftJoin($rootAlias . '.NetworkUser nu');
	 
	    return $q;
		 
	  //echo '<pre>';print_r($q->fetchArray());exit;
	}

}