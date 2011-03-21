<?php

/**
 * sfGuardUserTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class sfGuardUserTable extends PluginsfGuardUserTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object sfGuardUserTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('sfGuardUser');
    }
    
	public function getWithUserProfile(Doctrine_Query $q = null)
	{
	  if (is_null($q))
	  {
	    $q = Doctrine_Query::create()
	      ->from('sfGuardUser sgu');   	  
	  }
	  
	  $q->leftJoin('sgu.UserProfile up');	  
	
	  return $q;  	  	     
	}
    
	public function getUser($UserID)
	{
	    $q = Doctrine_Query::create()
	      ->from('sfGuardUser sgu')
	      ->where('sgu.id = ?', $UserID); 
	  
	   
	   foreach ($q->fetchArray() as $value) {
	   	$User = $value;
	   }

	   return $User;	 	  	     
	}
	
	public function getUserWithProfile($UserID)
	{
	    $q = Doctrine_Query::create()
	      ->from('UserProfile up')
	      ->where('sfuser_id = ?', $UserID); 
	  
	   
	   foreach ($q->execute() as $value) {
	   	$UserProfile = $value;
	   }

	   return $UserProfile;	 	  	     
	}
	
	public function getBackendUsersForClient(Doctrine_Query $q = null)
	{
	    $rootAlias = $q->getRootAlias();
	 
	    $q->leftJoin($rootAlias . '.NetworkUser nu');
	 
	    return $q;

	}

}