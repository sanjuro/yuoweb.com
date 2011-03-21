<?php
/**
 * myUser Class to handle the Syfmony User session
 *
 * @package    Spark
 * @subpackage network
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class myUser extends sfGuardSecurityUser
{
 /**
 * This Function singsn the user in it currently extends the Symfony Guard User sessoin
 * class
 *
 * @param sfGuardUser $user The sfGuardUser id
 * @param 	 boolean $remember Flag to remember the user and set into cookie
 * @param    Doctrine Connection $con the current connection
 * @return    
 */
  public function signIn($user, $remember = false, $con = null)
  {     
    parent::signIn($user, $remember = false, $con = null);
    
    $this->setAttribute('network_slug', '', 'sfGuardSecurityUser');
    
    $this->setAttribute('network_user', '', 'sfGuardSecurityUser');         
  }
  
  public function getUserId()
  {
	  return $this->getAttribute('user_id', '', 'sfGuardSecurityUser');
  }
  
  public function getClientId()
  {
	  return $this->getAttribute('client_id', '', 'sfGuardSecurityUser');
  }
  
  public function getNetworkUserId()
  {
	  return $this->getAttribute('network_user', '', 'sfGuardSecurityUser');
  }
  
  public function getNetworkId()
  {
	  return $this->getAttribute('network_slug', '', 'sfGuardSecurityUser');
  }
  
 /**
 * This Function check the User session and retrieves the Network for the logged in user
 *
 * @param    
 * @return    netowrk $network  
 */
  public function getNetworkFromSession()
  { 
	  return $network = Doctrine_Core::getTable('Network')
	           ->findOneBySlug($this->getNetworkId());
  }

}
