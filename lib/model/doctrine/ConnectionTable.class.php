<?php

/**
 * ConnectionTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ConnectionTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object ConnectionTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Connection');
    }
    
	/**
	 * Function to return all connection revievers of friend conenctions
	 * 
	 * This function uses the connection to find all 
	 * receivesr, if the connection is of type 1 then it
	 * is a friend connection.
	 *  
	 * @param Doctrine_Query $q Doctrine_Query
	 * 
	 * @return array All Friends
	 */ 
   public function getFriends(Doctrine_Query $q = null)
   {
	  if (is_null($q))
	  {
	    $q = Doctrine_Query::create()
         ->from('Connection c');
	  }	   

       $q->leftJoin('c.Reciever r')
	  	->andWhere('c.type_id = ?', 1);
	   
	   $Recievers = '';
	   
	   foreach ($q->fetchArray() as $value) { 
	   	$Recievers[$value['Reciever']['user_id']] = Doctrine_Core::getTable('sfGuardUser')->getUser($value['Reciever']['user_id']);
	   	$Recievers[$value['Reciever']['user_id']]['networkuser_id'] = $value['reciever_id'];
	   }
		echo '<pre>';print_r($Recievers);exit;
	   return $Recievers;
    }
    
	/**
	 * Function to return all the connections with their activity feed
	 * 
	 * This function uses the connection to find all 
	 * receivers, it then uses this to find all the feeds per reciever
	 * if they are a friend
	 *  
	 * @param Doctrine_Query $q Doctrine_Query
	 * 
	 * @return array All Friends
	 */ 
   public function getFriendsWithFeeds (Doctrine_Query $q = null)
   {
	  if (is_null($q))
	  {
	    $q = Doctrine_Query::create()
         ->from('Connection c');
	  }	   
	  
	  return $this->fetchFriendsWithFeeds($q);  
   }    
   
	/**
	 * Function to return all the connections with their activity feed
	 * 
	 * This function uses the connection to find all 
	 * receivers, it then uses this to find all the feeds per reciever
	 * if they are a friend
	 *  
	 * @param Doctrine_Query $q Doctrine_Query
	 * @param integer $feed_limit Amount feed items to show.
	 * 
	 * @return array All Friends
	 */ 
   public function getFriendsWithFeedsWithLimit(Doctrine_Query $q = null, $feed_limit = 5)
   { 
	  if (is_null($q))
	  {
	    $q = Doctrine_Query::create()
         ->from('Connection c');
	  }	  

     return $this->fetchFriendsWithFeeds($q)->limit($feed_limit); 
   }  
   
	/**
	 * Function to render the base query for fetching feeds with their user details
	 *  
	 * @param Doctrine_Query $q Doctrine_Query
	 * 
	 * @return Doctrine_Query base query for fetching feeds with users
	 */ 
	public function fetchFriendsWithFeeds(Doctrine_Query $q = null)
	{
	  if (is_null($q))
	  {
	    $q = Doctrine_Query::create()
         ->from('Connection c');
	  }	   
	  
	  $q->leftJoin('c.Reciever r')
	    ->leftJoin('r.Feed f')
	    ->leftJoin('r.sfGuardUser sgu')
	  	->andWhere('c.type_id = ?', 1)  	
	    ->orderBy('f.created_at DESC');
 	    //echo '<pre>';print_r($q->fetchArray());exit;
 	   // echo '<pre>';print_r($q->getSqlQuery());exit;
     return $q; 
	}

	/**
	 * Function to return all the owners of a connection
	 * 
	 * This function uses the connection to find all the 
	 * owners. An owner is the user who initiated the connectin
	 *  
	 * @param Doctrine_Query $q Doctrine_Query
	 * 
	 * @return array All Friends
	 */ 
   public function getOwners(Doctrine_Query $q = null)
   {
	  if (is_null($q))
	  {
	    $q = Doctrine_Query::create()
         ->from('Connection c');
	  }	   

      $q->leftJoin('c.Owner o')
	  	->andWhere('c.type_id = ?', 1);

	   $Owners = '';
	 
	   foreach ($q->fetchArray() as $value) { 
	   	$Owners[$value['Owner']['user_id']] = Doctrine_Core::getTable('sfGuardUser')->getUser($value['Owner']['user_id']);
	   	$Owners[$value['Owner']['user_id']]['networkuser_id'] = $value['reciever_id'];
	   	$Owners[$value['Owner']['user_id']]['connection_id'] = $value['id'];
	   }
		
	   return $Owners;
    }
}