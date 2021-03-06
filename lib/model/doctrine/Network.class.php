<?php

/**
 * Network
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Spark
 * @subpackage model
 * @author     Shadley Wentzel <shad6ster@gmail.com>
 * @version    SVN: $Id: Network.class.php 1 2010-03-29 19:53:27Z Shadley Wentzel $
 */
class Network extends BaseNetwork
{
  
 private static $DefaultFeatures = array(1, 2, 3, 4);
  
/**
 * Function to extend the base Save function
 * 
 * This function extends the base save function and sets the expiry of a network.
 * This function also builds the four default feature when a new Network is created
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
      
	  if (!$this->getExpiresAt())
	  {
	    $now = $this->getCreatedAt() ? $this->getDateTimeObject('created_at')->format('U') : time();
	    $this->setExpiresAt(date('Y-m-d H:i:s', $now + 86400 * sfConfig::get('app_active_days')));
	  }	 
	  
	 $parentsave = parent::save($conn);
	
	 /**
	  if ($this->isNew() && $this->getId()){
	  	
	  	foreach (Network::getDefaultFeatures() as $feature) 
	  	{
		  	$NetworkFeature = new NetworkFeature();	 
		  	$NetworkFeature->setNetworkId($this->getId()); 		
		  	$NetworkFeature->setFeatureId($feature); 	
		  	$NetworkFeature->setActive(1); 
		  	$NetworkFeature->setPosition(10 * $feature); 
		  	$NetworkFeature->save(); 

	  	}
	  	
	  }
    **/
	return $parentsave;
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
	  return Yuoweb::slugify($this->getTitle());
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
	$serverName = preg_replace('/www./', '', $_SERVER['SERVER_NAME'] );
  
  	$q = Doctrine_Query::create()
       ->from('sfMultisiteThemeProfileHost smtph')
       ->where('smtph.host_uri = ?', $this->getSubdomain().'.'.$serverName);
    
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
		
     $features = Doctrine_Core::getTable('NetworkFeature')->getWithFeatures($q)->fetchArray();
     
     return (!empty($features)?$features:false);
  }  
  
/**
 * Function to find all availible features for a network
 * 
 * This function return all features availible to a network,
 * these are features that are not already on the network
 * 
 * @param Doctrine_Query $q Parent query 
 * 
 * @return array All features availible will be an array others will be 0
 */   
  public function getAvailibleFeatures(Doctrine_Query $q = null)
  {  
     $features = array(); 
  	
  	 $q = Doctrine_Query::create()
       ->from('Feature f');
       
     $featuresAvaible = $q->fetchArray();
     
      
     foreach ($featuresAvaible as $value) {
     	$features[$value['id']] = $value;
     }
     
  	  $q = Doctrine_Query::create()
       ->from('NetworkFeature nf')
       ->where('nf.network_id = ?', $this->getId())
       ->orderBy('nf.position');
		
     $featuresOnNetwork = $q->fetchArray();
    
     foreach ($featuresOnNetwork as $value) {
     	$features[$value['feature_id']] = 0;
     }
     //echo '<pre>';print_r($features);exit;
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
 * Function to find 5 recent network sign ups that have public profiles
 *  
 * @param Doctrine_Query $q 
 *  
 * @return array All users on a network
 */ 
  public function getRecentPublicUsers(Doctrine_Query $q = null)
  {
	 $users = $this->fetchUsersQuery()
	 			    ->andWhere('is_private = ?', 0)
	 			    ->orderBy('created_at')
	 			    ->limit(5)
	 			    ->fetchArray();
	
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
       ->from('sfGuardUser sgu')
       ->where('up.is_private = ?', 0)
       ->leftJoin('sgu.UserProfile up')
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
	  $user = Doctrine_Core::getTable('NetworkUser')->fetchNetworkUserWithUser(null, $this->getId(), $Userid);
	
	  return (!empty($user)?$user:false);
  }
  
/**
 * Function to find a all photos on a network
 * 
 * This function find all photos on an network by getting all photos
 * for each user on the network
 * 
 * @param void
 * 
 * @return query Base Query to find photos on a network
 */
  public function getPhotos()
  {
       $q = Doctrine_Query::create()
	      ->from('Photo p')
	      ->where('p.network_id = ?',  $this->getId())
	      ->andWhere('p.is_private != ?', 1); 

	   return $q->fetchArray();		  	     
  }
  
/**
 * Function to find a all photos on a network
 * 
 * This function find all photos on an network by getting all photos
 * for each user on the network
 * 
 * @param void
 * 
 * @return query Base Query to find photos on a network
 */
  public function getRecentPhotos()
  {
	  $q = Doctrine_Query::create()
       ->from('Photo p')
       ->where('p.network_id = ?', $this->getId())
	   ->andWhere('p.is_private != 1')
       ->orderBy('p.created_at DESC')
       ->limit(4);

	  $photos = $q->fetchArray();
	   
	  return (!empty($photos)?$photos:false);
  }
  
/**
 * Function to find all User Feeds on the network
 * 
 * This function retrieves all the feeds for each user for a Network object
 * 
 * @param  void
 * 
 * @return query Base Query to find feeds on a network
 */
  public function getFeeds()
  {
	  $q = Doctrine_Query::create()
       ->from('NetworkUser nu')
       ->where('nu.network_id = ?', $this->getId());
	
     return Doctrine_Core::getTable('NetworkUser')->getFeedsForUser($q)->execute();
  }
  
/**
 * Function to find all Categories for the Speakout feature on a network
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
 * Function to count all new replies since last login of user
 * 
 * This function find new replies  associated for the Speakout Feature on a network
 * since the last login
 * 
 * @param  datetime $checkTime Last Login time of user to find new replies
 * 
 * @return integer New reply count
 */
  public function getSpeakoutNewReplys($checkTime)
  {     
     $q = Doctrine_Core::getTable('SpeakoutReply')->fetchReplys()
       ->where('nu.network_id = ?', $this->getId())
       ->andWhere('sr.created_at > ?', $checkTime);
	
     return $q->execute();
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
 * Function to find all active deals associated to a network
 * 
 * This function return all active deals associated to a network
 * 
 * @param Doctrine_Connection $conn 
 * 
 * @return Doctrine_Collection All active deals found
 */   
  public function getActiveDeals(Doctrine_Query $q = null)
  {
	return $this->fetchActiveDeals($q)->fetchArray();
  } 
  
/**
 * Function to count all active deals associated to a network
 * 
 * This function to count all active deals associated to a network
 * 
 * @param Doctrine_Connection $conn 
 * 
 * @return Doctrine_Collection All active deals found
 */   
  public function getCountActiveDeals(Doctrine_Query $q = null)
  {
	return $this->fetchActiveDeals($q)->count();
  } 
  
/**
 * Function to retrieve all newest HeadSpace posts
 *  
 * @param  datetime $checkTime Last Login time of user to find new replies
 * 
 * @return Doctrine_Collection All active deals found
 */ 
  public function getNewestHeadspacePosts($checkTime)
  {
	 $q = Doctrine_Query::create()
	   ->from('HeadspacePost hp')
	   ->where('hp.created_at >= ?', $checkTime);
	      
	return $q->execute();  
  }
  
/**
 * Function to retrieve all HeadSpace posts for a given month
 *  
 * @param  datetime $checkTime Last Login time of user to find new replies
 * 
 * @return Doctrine_Collection All active deals found
 */ 
  public function getHeadspacePostsByMonth($checkTime)
  {
	$time =  mktime( 0, 0, 0,  $checkTime[0], 1, $checkTime[1] );

  	$q = Doctrine_Query::create()
	   ->from('HeadspacePost hp')
	   ->where('hp.created_at > ?',  date('Y-m-d', $time))
	   ->andWhere('hp.created_at < LAST_DAY(?)', date('Y-m-d', $time));
	       	
	return $q->execute();  
  }
  
/**
 * Function to retrieve all notifications since last login 
 * for a network.
 *  
 * @param  datetime $checkTime Last Login time of user to find new replies
 * 
 * @return Doctrine_Collection All active deals found
 */   
  public function getNewNotifications($checkTime)
  {
	$notifications = array();
	$notifications['1'] = array();
	$notifications['2'] = array();
	$notifications['3'] = array();
	$notifications['4'] = array();
	$notifications['5'] = array();
	$notifications['6'] = array();
	$notifications['7'] = array();
	$notifications['8'] = array();
	$notifications['9'] = array();
	$notifications['10'] = array();
  	
  	$q = Doctrine_Query::create()
       ->from('Notification n')
       ->where('n.network_id = ?', $this->getId())
       ->andWhere('n.created_at > ?', $checkTime);
       
   $results = $q->fetchArray();
       
   foreach ($results as $value){
   	
    if($value['notificationtype_id'] == 1){
   		$notifications['1'][] = $value;
   	}
   	
    if($value['notificationtype_id'] == 2){
   		$notifications['2'][] = $value;
   	}
   	
    if($value['notificationtype_id'] == 3){
   		$notifications['3'][] = $value;
   	}
   	
   	if($value['notificationtype_id'] == 4){
   		$notifications['4'][] = $value;
   	}

    if($value['notificationtype_id'] == 5){
   		$notifications['5'][] = $value;
   	}
   	
    if($value['notificationtype_id'] == 6){
   		$notifications['6'][] = $value;
   	}
   	
    if($value['notificationtype_id'] == 7){
   		$notifications['7'][] = $value;
   	}
   	
    if($value['notificationtype_id'] == 8){
   		$notifications['8'][] = $value;
   	}
   	
    if($value['notificationtype_id'] == 9){
   		$notifications['9'][] = $value;
   	}
   	
       if($value['notificationtype_id'] == 10){
   		$notifications['10'][] = $value;
   	}
   	
   }
       
   return $notifications;
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
  
/**
 * Function to generate the initial fetch deals query for a network
 * 
 * This function is the refactored query that gets all deals on a network
 * joined with their associated Product
 * 
 * @param Doctrine_Query $q
 * 
 * @return query Base Query to find users on a network
 */ 
  public function fetchActiveDeals(Doctrine_Query $q = null)
  {       
	$q = Doctrine_Query::create()
       ->from('WebuyDeal wd')
       ->where('wd.network_id = ?', $this->getId())
       ->andWhere('wd.status = ?', 1)
       ->orderBy('wd.created_at');
		
     return Doctrine_Core::getTable('WebuyDeal')->getWithProducts($q);
  } 
  
/**
 * Static Function to return the default features set for the Network Class
 * 
 * @param void
 * 
 * @return array All default features a network shoult have
 */
  public static function getDefaultFeatures() 
  {
  	 return self::$DefaultFeatures;
  } 
  
}