<?php

/**
 * MessageTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
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
        
	public function getMessages(Doctrine_Query $q = null)
	{
	  if (is_null($q))
	  {
	    $q = Doctrine_Query::create()
	      ->from('Message m');
	  }
	  //echo '<pre>';print_r($q->fetchArray());exit;
	  return $q->execute(); 
	}
	
	public function getNetworkUsers(Doctrine_Query $q = null)
	{
	    $rootAlias = $q->getRootAlias();
	 
	    $q->leftJoin($rootAlias . '.NetworkUser nu')
	    ->leftJoin('nu.sfGuardUser sgu');
	 
	    return $q;
		 
	  //echo '<pre>';print_r($q->fetchArray());exit;
	}
	
	public function getBackendMessagesWithNetworkUser(Doctrine_Query $q = null)
	{
	    $rootAlias = $q->getRootAlias();
	 
	    $q->leftJoin($rootAlias . '.NetworkUser nu')
	    ->leftJoin('nu.sfGuardUser sgu');
	 
	    return $q;
		 
	  //echo '<pre>';print_r($q->fetchArray());exit;
	}

}