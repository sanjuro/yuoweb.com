<?php

/**
 * NetworkUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Spark
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
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
 
  public function getNewMessages(Doctrine_Query $q = null)
  {
	  $q = Doctrine_Query::create()
       ->from('MessageReciever mr')
       ->where('mr.networkuser_id = ?', $this->getId());
 
      return Doctrine_Core::getTable('MessageReciever')->getNewMessages($q);
  }
  
  public function getMessages(Doctrine_Query $q = null)
  {
	  $q = Doctrine_Query::create()
       ->from('MessageReciever mr')
       ->where('mr.networkuser_id = ?', $this->getId());
 
      return Doctrine_Core::getTable('MessageReciever')->getMessages($q);
  }
  
  public function getAllFriendsForNetwork(Doctrine_Query $q = null)
  {
	  $q = Doctrine_Query::create()
       ->from('Connection c')
       ->where('c.owner_id = ?', $this->getId());
 
      return Doctrine_Core::getTable('Connection')->getFriends($q);
  }  
  
  public function getFeedsForFriends()
  {
	  $q = Doctrine_Query::create()
       ->from('Connection c')
       ->where('c.owner_id = ?', $this->getId());

      return  Doctrine_Core::getTable('Connection')->getFriendsWithFeeds($q);     
  }
  
  public function getFeeds()
  {
       $q = Doctrine_Query::create()
	      ->from('Feed f')
	      ->where('f.networkuser_id = ?',  $this->getId()); 

	   return $q->fetchArray();	
  }  
    
  public function getNewFriendRequests()
  {
	  $q = Doctrine_Query::create()
       ->from('Connection c')
       ->where('reciever_id = ?', $this->getId())
       ->andWhere('state_id = ?', 2);

      return Doctrine_Core::getTable('Connection')->getOwners($q);
  }
    
  public function getPhotos()
  {
       $q = Doctrine_Query::create()
	      ->from('Photo p')
	      ->where('p.networkuser_id = ?',  $this->getId()); 

	   return $q->fetchArray();		  	     
  }
  
  public function getsfGuardUser()
  {
       $q = Doctrine_Query::create()
	      ->from('sfGuardUser sgu')
	      ->where('sgu.id = ?',  $this->getUserId()); 

	   return $q->fetchArray();		  	     
  }

}    
