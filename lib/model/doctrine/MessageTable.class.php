<?php

/**
 * MessageTable
 * 
 * This is the extended Message Table Class
 * 
 * @package    yUoweb
 * @subpackage model
 * @author     Shadley Wentzel <shad6ster@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z Shadley Wentzel $
 */
class MessageTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object MessageTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Message');
    }    

   /**
	 * Function to find all messages
	 *  
	 * @param  void
	 * 
	 * @return query Base Query to find all messages
	*/
	public function getMessages(Doctrine_Query $q = null)
	{
	  if (is_null($q))
	  {
	    $q = Doctrine_Query::create()
	      ->from('Message m');
	  }

	  return $q->execute(); 
	}
	
   /**
	 * Function to find all networkusers
	 * 
	 * @param  void
	 * 
	 * @return query Base Query to find all network users with sfguard user profiles
	*/
	public function getNetworkUsers(Doctrine_Query $q = null)
	{
	    $rootAlias = $q->getRootAlias();
	 
	    $q->leftJoin($rootAlias . '.NetworkUser nu')
	    ->leftJoin('nu.sfGuardUser sgu');
	 
	    return $q;
	}
	
   /**
	 * Function to find all networkusers for backend application
	 * 
	 * @param  void
	 * 
	 * @return query Base Query to find all network users with sfguard user profiles
	*/
	public function getBackendMessagesWithNetworkUser(Doctrine_Query $q = null)
	{
	    $rootAlias = $q->getRootAlias();
	 
	    $q->leftJoin($rootAlias . '.NetworkUser nu')
	    ->leftJoin('nu.sfGuardUser sgu');
	 
	    return $q;
	}

}