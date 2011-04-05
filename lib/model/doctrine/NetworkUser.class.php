<?php

/**
 * NetworkUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    yUoweb
 * @subpackage model
 * @author     Shadley Wentzel <shad6ster@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z Shadley Wentzel $
 */
class NetworkUser extends BaseNetworkUser
{
  /**
   * Returns the string representation of the object: "Full Name (username)"
   *
   * @return string
   */
  public function __toString()
  {
    $sfGuardUser  = $this->getsfGuardUser();

    return (string) $sfGuardUser[0]['username'];
  }	
 
/**
 * Function to return all the new messages for a network user
 *  
 * @param q Doctrine_Query
 * 
 * @return array All new Messages
 */ 
  public function getNewMessages(Doctrine_Query $q = null)
  {
	  $q = Doctrine_Query::create()
       ->from('MessageReciever mr')
       ->where('mr.networkuser_id = ?', $this->getId());
 
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
       ->where('mr.networkuser_id = ?', $this->getId());
 
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
	  $q = Doctrine_Query::create()
         ->from('Connection c')
         ->where('c.owner_id = ?', $this->getId())
         ->andWhere('c.state_id = ?', 1);
 
      return Doctrine_Core::getTable('Connection')->getFriends($q);
  }  
  
/**
 * Function to return all the feeds for all friends of a network user
 *  
 * @param Doctrine_Query $q Doctrine_Query
 * 
 * @return array All feeds
 */ 
  public function getFeedsForFriends()
  {
	  $q = Doctrine_Query::create()
         ->from('Connection c')
         ->where('c.owner_id = ?', $this->getId());
		
      return Doctrine_Core::getTable('Connection')->getFriendsWithFeeds($q);     
  }
  
/**
 * Function to return all the feeds for a network user order by 
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
	      ->where('f.networkuser_id = ?',  $this->getId())
	      ->orderBy('f.created_at DESC');

	   return $q->fetchArray();	
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
         ->andWhere('state_id = ?', 2);

      return Doctrine_Core::getTable('Connection')->getOwners($q);
  }

/**
 * Function to return all photos for a network user
 *  
 * @param Doctrine_Query $q Doctrine_Query
 * 
 * @return array All photos
 */ 
  public function getPhotos()
  {
       $q = Doctrine_Query::create()
	      ->from('Photo p')
	      ->where('p.networkuser_id = ?',  $this->getId()); 

	   return $q->fetchArray();		  	     
  }
  
/**
 * Function to return the associated sfGuardUser array for network user
 *  
 * @param q Doctrine_Query
 * 
 * @return array  sfGuardUser in array form 
 */
  public function getsfGuardUser()
  {
       $q = Doctrine_Query::create()
	      ->from('sfGuardUser sgu')
	      ->where('sgu.id = ?',  $this->getUserId()); 

	   return $q->fetchArray();		  	     
  }
  
/**
 * Function to return the associated sfGuardUser Object for network user
 *  
 * @param q Doctrine_Query
 * 
 * @return array  sfGuardUser Object
 */
  public function getsfGuardUserObject()
  {
       $q = Doctrine_Query::create()
	      ->from('sfGuardUser sgu')
	      ->where('sgu.id = ?',  $this->getUserId()); 

	   return $q->fetchOne();		  	     
  }

}    
