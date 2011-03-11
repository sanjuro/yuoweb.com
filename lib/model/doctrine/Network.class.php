<?php

/**
 * Network
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Spark
 * @subpackage model
 * @author     Shadley Wentzel
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Network extends BaseNetwork
{
  
/**
 * Function to extend the base Save function
 * 
 * This function extends the base save function and sets the expiry of a network
 * 
 * @param $Doctrine_Connection $conn
 * 
 * @return void
 */
  public function save(Doctrine_Connection $conn = null)
  {
	  $Client = $this->getClient();
       
      if ($Client->getAllNetworks()->count() >= sfConfig::get('app_client_networkcount_max') ){
       	return false;
      }
	  
	  if ($this->isNew() && !$this->getExpiresAt())
	  {
	    $now = $this->getCreatedAt() ? $this->getDateTimeObject('created_at')->format('U') : time();
	    $this->setExpiresAt(date('Y-m-d H:i:s', $now + 86400 * sfConfig::get('app_active_days')));
	  }	 
	  
	  return parent::save($conn);
  }
    
/**
 * Function to return the Title of a network in its sliug form
 * 
 * This function return the slugged title of a network
 * 
 * @param void
 * 
 * @return string Slugified title
 */ 
  public function getTitleSlug()
  {
	  return Spark::slugify($this->getTitle());
  }
  
/**
 * Function to return the current theme of a netwprl
 * 
 * This function return the current theme of a network
 * 
 * @param void
 * 
 * @return string Slugified title
 */ 
  public function getCurrentTheme()
  {
	  $q = Doctrine_Query::create()
       ->from('sfMultisiteThemeProfileHost smtph')
       ->where('smtph.host_uri = ?', $this->getSubdomain().'.spark1.localhost');
     
      return Doctrine_Core::getTable('sfMultisiteThemeProfileHost')->getThemeProfileWithTheme($q);
  }
  
/**
 * Function to find all features associated to a network
 * 
 * This function return all features associated to a network
 * 
 * @param Doctrine_Connection $conn 
 * 
 * @return Doctrine_Collection All features found
 */   
  public function getFeatures(Doctrine_Query $q = null)
  {
	  $q = Doctrine_Query::create()
       ->from('NetworkFeature nf')
       ->where('nf.network_id = ?', $this->getId())
       ->orderBy('nf.position');

     $features = Doctrine_Core::getTable('NetworkFeature')->getWithFeatures($q);
     
     return (!empty($features)?$features:false);
  }  
  
/**
 * Function to find all users associated to a network
 * 
 * This function return all users associated to a network
 * using the Network User table
 * 
 * @param Doctrine_Query $q 
 *  
 * @return array All users on a network
 */ 
  public function getUsers(Doctrine_Query $q = null)
  {
	 $users = $this->fetchUsersQuery()->fetchArray();
	 
	 return (!empty($users)?$users:false);
  }
     
/**
 * Function to find all publicuusers signed up to a network
 * 
 * This function return all publicuusers associated to a network
 * 
 * @param Doctrine_Query $q 
 * 
 * @return array All public users on a network
 */  
  public function getPublicUsers($SearchTerm)
  {
	 $q = Doctrine_Query::create()
       ->from('NetworkUser nu')
       ->where('is_private = ?', 0)
       ->leftJoin('nu.sfGuardUser sgu')
       ->andWhere('sgu.username LIKE ?', '%'.$SearchTerm.'%');
 
     $users = $q->fetchArray();
     
     return (!empty($users)?$users:false);
  }
  
  
/**
 * Function to find a single user on the network
 * 
 * This function will retrieve a single network user object on a network
 * 
 * @param integer $Userid Id of user
 * 
 * @return NetworkUser The network user found
 */
   public function getUser($Userid)
  {
	  $user = Doctrine_Core::getTable('NetworkUser')->getNetworkUser($this->getId(), $Userid);
	  
	  return (!empty($user)?$user:false);
  }
  
/**
 * Function to find a all photos on a network
 * 
 * This function find all photos on an network by getting all photos
 * for each user on the network
 * 
 * @param Doctrine_Query $q 
 * 
 * @return query Base Query to find photos on a network
 */
  public function getPhotos(Doctrine_Query $q = null)
  {
	  return Doctrine_Core::getTable('Photo')->getPhotosForNetworkUsers($this->getId());
  }
  
/**
 * Function to find a all Categories for the Speakout feature on a network
 * 
 * This function find categories associated for the Speakout Feature on a network
 * with their related topics.
 * 
 * @param  void
 * 
 * @return query Base Query to find categorys on a network
 */
  public function getSpeakoutCategorys()
  {
	  $q = Doctrine_Query::create()
       ->from('SpeakoutCategory sc')
       ->where('sc.network_id = ?', $this->getId());
	
     return Doctrine_Core::getTable('SpeakoutCategory')->getCategorysWithTopics($q)->execute();
  }
  
/**
 * Function to find all the user over stats
 * 
 * This function will get all the active users on a network,
 * it will then do some analysis on the data fetched
 * 
 * @param  * 
 * @return array All analysis results
 */
  public function getNetworkUserAnalysis()
  {
	 $Analysis = array();
	 
	 $Analysis['TotalActiveUsers'] = 0;
	 $Analysis['ActiveUsers30d'] = 0;
	 $Analysis['ActiveUsers7d'] = 0;
	 $Analysis['ActiveUsers48h'] = 0;
	 $Analysis['ActiveUsers24h'] = 0;
	 
	 $users =  $this->fetchUsersQuery()->fetchArray();
	 
	 $Analysis['TotalActiveUsers'] = count($users);
	 	 
	 foreach ($users as $user) {
	 	
	 	$end = date( 'Y-d-m H::m::s', time() - 30 * 86400 );
	 	if ($user['sfGuardUser']['last_login'] >=  $end) {
	 		$Analysis['ActiveUsers30d']+=1;
	 	}
	 }
	 
	 foreach ($users as $user) {
	 	
	 	$end = date( 'Y-d-m H::m::s', time() - 7 * 86400 );
	 	if ($user['sfGuardUser']['last_login'] >=  $end) {
	 		$Analysis['ActiveUsers7d']+=1;
	 	}
	 }
	 
	 foreach ($users as $user) {
	 	
	 	$end = date( 'Y-d-m H::m::s', time() - 2 * 86400 );
	 	if ($user['sfGuardUser']['last_login'] >=  $end) {
	 		$Analysis['ActiveUsers48h']+=1;
	 	}
	 }
	 
	 foreach ($users as $user) {
	 	
	 	$end = date( 'Y-d-m H::m::s', time() - 1 * 86400 );
	 	if ($user['sfGuardUser']['last_login'] >=  $end) {
	 		$Analysis['ActiveUsers24h']+=1;
	 	}
	 }
	
     return $Analysis;
  }
  
/**
 * Function to get all the active Adverts for a network object
 * 
 * This function returns all the active adverts for a network
 * 
 * @param Doctrine_Query $q
 * 
 * @return query Base Query to find users on a network
 */ 
  public function getActiveAdverts()
  {  	  	 
	 $q = Doctrine_Query::create()
	   ->from('AdvertNetwork an')
	   ->where('an.is_active = ?', 1);
	      
	return $this->fetchAdvertsQuery($q);   
  }
  
/**
 * Function to generate the initial fetch users query for a network
 * 
 * This function is the refactored query that gets all users on a network
 * joined with their associated User using the NetworkUser table
 * 
 * @param Doctrine_Query $q
 * 
 * @return query Base Query to find users on a network
 */ 
  public function fetchUsersQuery(Doctrine_Query $q = null)
  {       
  	  if (is_null($q))
	  {
	  $q = Doctrine_Query::create()
       ->from('NetworkUser nu')
       ->where('nu.network_id = ?', $this->getId());
	  }
 
     return Doctrine_Core::getTable('NetworkUser')->getWithUsers($q);
  } 
  
/**
 * Function to generate the initial fetch adverts query for a network
 * 
 * This function is the refactored query that gets all adverts on a networkadvets
 * joined with their associated Advert object
 * 
 * @param Doctrine_Query $q
 * 
 * @return query Base Query to find users on a network
 */ 
  public function fetchAdvertsQuery(Doctrine_Query $q = null)
  {
  	  if (is_null($q))
	  {
	    $q = Doctrine_Query::create()
	      ->from('AdvertNetwork an');
	  }
	  
     $q->where('an.network_id = ?', $this->getId());

     return Doctrine_Core::getTable('AdvertNetwork')->getWithAdverts($q);
  } 
  
}