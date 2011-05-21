<?php

/**
 * sfGuardUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Spark
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class sfGuardUser extends PluginsfGuardUser
{ 
/**
 * Function to return the full name of a user object
 * 
 * This function combines the firt_name and last_name of an user object
 * and uses them to return the full name
 * 
 * @param 
 * @return string Full Name of User
 */	
 public function getFullname(){
		return ucwords( $this->getFirstName().' '.$this->getLastName());
	}
	
/**
 * Function to return the UserProfile Object associated to a sfGuardUser Object
 * 
 * This function return the associated UserProfile Object using the user_id attribute
 * of a sfGuardUser Object
 * 
 * @param 
 * @return UserProfile UserProfile Object
 */	
 public function getSfGuardUserWithUserProfile()
 {
	 $q = Doctrine_Query::create()
	   ->from('UserProfile up')
	   ->where('up.sfuser_id = ?', $this->getId());
	  
	return $q->fetchOne(); 	
 }
   
/**
 * Function to return all the new messages for a user
 *  
 * @param q Doctrine_Query
 * 
 * @return array All new Messages
 */ 
  public function getNewMessages(Doctrine_Query $q = null)
  {
	  $q = Doctrine_Query::create()
       ->from('MessageReciever mr')
       ->where('mr.user_id = ?', $this->getId());
 
      return Doctrine_Core::getTable('MessageReciever')->getNewMessages($q);
  }
  
/**
 * Function to return all the messages for a network user
 *  
 * @param q Doctrine_Query
 * 
 * @return array All Messages
 */ 
  public function getMessages(Doctrine_Query $q = null)
  {
	  $q = Doctrine_Query::create()
       ->from('MessageReciever mr')
       ->where('mr.user_id = ?', $this->getId());
 
      return Doctrine_Core::getTable('MessageReciever')->getMessages($q);
  }
 
/**
 * Function to return all the Friends for a network user
 *  
 * @param Doctrine_Query $q Doctrine_Query
 * 
 * @return array All Friends
 */ 
  public function getAllFriendsForNetwork(Doctrine_Query $q = null)
  {
	  $q = $this->fetchAllFriendsForNetwork();
 	  
      $friends = Doctrine_Core::getTable('Connection')->getFriends($q);
     
      $result = array();
     
      if(!empty($friends))
      {
      foreach ($friends['Owners'] as $key => $value ) {  
	      if($key != $this->getId()){
	      	$result[$key] = $value;
	      }
      }  
      
      foreach ($friends['Recievers'] as $key => $value ) {  
	      if($key != $this->getId()){
	      	$result[$key] = $value;
	      }
      } 
      }
    
      return $result;
    
  }  
  
/**
 * Function to return all new friend requests
 *  
 * @param Doctrine_Query $q Doctrine_Query
 * 
 * @return array All new friend requests
 */ 
  public function getNewFriendRequests()
  {
	  $q = Doctrine_Query::create()
         ->from('Connection c')
         ->where('reciever_id = ?', $this->getId())
         ->andWhere('type_id = ?', 1)
         ->andWhere('reciever_response = ?', 2)
         ->andWhere('state_id = ?', 2);
		
      return Doctrine_Core::getTable('Connection')->getOwners($q);
  }
  
/**
 * Function to return a count of all the Friends for a network user
 *  
 * @param Doctrine_Query $q Doctrine_Query
 * 
 * @return array All Friends
 */ 
  public function getAllFriendsForNetworkCount(Doctrine_Query $q = null)
  {
	  $q = $this->fetchAllFriendsForNetwork();

      return $q->count();
  } 

/**
 * Function to return all the feeds for a user order by 
 * created_at DESC - most recent first
 *  
 * @param Doctrine_Query $q Doctrine_Query
 * 
 * @return array All feeds for network user
 */ 
  public function getFeeds()
  {
       $q = Doctrine_Query::create()
	      ->from('Feed f')
	      ->where('f.user_id = ?',  $this->getId())
	      ->orderBy('f.created_at DESC');

	   return $q->fetchArray();	
  }  
  
 
/**
 * Function to return all the feeds for all friends of a user
 *  
 * @param Doctrine_Query $q Doctrine_Query
 * 
 * @return array All feeds
 */ 
  public function getFeedsForFriends()
  {
	  $q = Doctrine_Query::create()
         ->from('Connection c')
         ->orWhere('c.owner_id = ?', $this->getId())
         ->orWhere('c.reciever_id = ?', $this->getId());
		
      return Doctrine_Core::getTable('Connection')->getFriendsWithFeeds($q);     
  }
  
/**
 * Function to return the base query for fetching all friends for a network user on
 * a given network
 *  
 * @param Doctrine_Query $q Doctrine_Query
 * 
 * @return Doctrine_Query
 */ 
  public function fetchAllFriendsForNetwork(Doctrine_Query $q = null)
  {
	  $q = Doctrine_Query::create()
         ->from('Connection c')
         ->where('c.owner_id = ?', $this->getId())
         ->orWhere('c.reciever_id = ?', $this->getId())
         ->andWhere('c.owner_response = ?', 1)
         ->andWhere('c.reciever_response = ?', 1)
         ->andWhere('c.state_id = ?', 1);

      return $q;
  } 
}