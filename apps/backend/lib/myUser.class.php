<?php

class myUser extends sfGuardSecurityUser
{
  public function signIn($user, $remember = false, $con = null)
  {
    parent::signIn($user, $remember = false, $con = null);
    // signin
	
	if($this->hasGroup('admin')){
		
		$this->setAttribute('client_id', 2, 'sfGuardSecurityUser');
		
		$networks = Doctrine_Core::getTable('Network')->getActiveNetworks()->execute(); 
		
	}else{
    	
		$client = Doctrine_Core::getTable('Client')->findOneByUserId($user->getId());
   
		$this->setAttribute('client_id', $client->getId(), 'sfGuardSecurityUser');
		
		$networks = $client->getActiveNetworks()->execute(); 
	}
	
	$this->setAttribute('network_id', $networks[0]->getId(), 'sfGuardSecurityUser');	
	
	$this->setAttribute('network_slug', $networks[0]->getSlug(), 'sfGuardSecurityUser');
  }
  
  public function getClientId()
  {
	return $this->getAttribute('client_id', '', 'sfGuardSecurityUser');
  }
	
	
  public function getNetworkId()
  {
    return $this->getAttribute('network_id', '', 'sfGuardSecurityUser');
  }
	
  public function setNetworkId($NetworkId)
  {
	return $this->setAttribute('network_id', $NetworkId, 'sfGuardSecurityUser');
  }
  
  public function getNetworkSlug()
  {
    return $this->getAttribute('network_slug', '', 'sfGuardSecurityUser');
  }
	
  public function setNetworkSlug($NetworkSlug)
  {
	return $this->setAttribute('network_slug', $NetworkSlug, 'sfGuardSecurityUser');
  }
}
