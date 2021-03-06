<?php

/**
 * MessageRecieverTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class MessageRecieverTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object MessageRecieverTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('MessageReciever');
    }
    
	public function getMessages(Doctrine_Query $q = null)
	{
	  if (is_null($q))
	  {
	    $q = Doctrine_Query::create()
	      ->from('MessageReciever mr');
	  }
	  	  
	  $q->leftJoin('mr.Message m');
	 
	  return Doctrine_Core::getTable('Message')->getMessages($q); 
	}
    
	public function getNewMessages(Doctrine_Query $q = null)
	{
	  if (is_null($q))
	  {
	    $q = Doctrine_Query::create()
	      ->from('MessageReciever mr');
	  }
	  	  
	  $q->leftJoin('mr.Message m')
	  	->andWhere('mr.messagestatus_id = ?', 1);
	 
	  return Doctrine_Core::getTable('Message')->getMessages($q); 
	}
    
	public function getWithMessages(Doctrine_Query $q = null)
	{
	  if (is_null($q))
	  {
	    $q = Doctrine_Query::create()
	      ->from('MessageReciever mr');
	  }
	  	  
	  $q->leftJoin('mr.Message m')
	  	->andWhere('mr.messagestatus_id  = ?', 1);
	 
	  return $q->execute(); 
	}
}