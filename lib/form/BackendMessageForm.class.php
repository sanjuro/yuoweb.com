<?php

/**
 * Message form.
 *
 * @package    Spark
 * @subpackage form
 * @author     Shadley Wentzel
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BackendMessageForm extends BaseMessageForm
{
  public $currentUser;
  
  public function configure()
  {
    unset(
      $this['created_at'], $this['updated_at'], $this['htmlbody']
    );
    
	if ($this->getOption("currentUser") instanceof sfUser)
	{
	    $this->currentUser = $this->getOption("currentUser");
	}
	    
	$this->widgetSchema['body'] = new sfWidgetFormTextarea();
	
	$this->widgetSchema['networkuser_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NetworkUser'), 'add_empty' => true, "label" => "Created By"));
	
	$this->widgetSchema['network_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Network'), 'add_empty' => true, "label" => "On Network"));

  }
  
  public function updateObject($values = null)
  { 
    if (is_null($values))
    {
      $values = $this->values;
    }	    
	
	$NetworkUser = Doctrine_Core::getTable('NetworkUser')->findOneById($this->currentUser->getNetworkUserId());
	
	$values['networkuser_id'] = $NetworkUser->getId();
	
	$values['network_id'] = $NetworkUser->getNetworkId();
	
	$values['htmlbody'] = $values['body'];
	
  	if($this->isNew())
	{ 
		$values['messagestatus_id'] = 1;
	}
	  	 
	$values = $this->processValues($values);
		 
	$this->object->fromArray($values);
	     
	parent::updateObjectEmbeddedForms($values);
		 
	return $this->object;	
  }
  
  protected function doSave($con = null)
  { 
    if (is_null($con))
    {
      $con = $this->getConnection();
    }
      
    $this->updateObject();
	
    $this->object->save($con);    
    
  	if($this->isNew())
	{ 
		$MessageReceiver = new MessageReciever();
		$MessageReceiver->setMessageId($this->object->getId());
		$MessageReceiver->setNetworkuserId($this->values['friend']);
		$MessageReceiver->setMessagestatusId(1);
		$MessageReceiver->save();
	}

    // embedded forms
    parent::saveEmbeddedForms($con); 
  }
  
  
  private function getAllFriendsForNetworkUser($NetworkUserID)
  {
	  $NetworkUser = Doctrine_Core::getTable('NetworkUser')->findOneById($NetworkUserID);
	  
	  $Friends = $NetworkUser->getAllFriendsForNetwork();
 	 
	  $FriendChoice = array();
 	  foreach ( $Friends as $Friend ) {
 	  	$FriendChoice[$Friend['networkuser_id']] = ucwords($Friend['first_name'].' '.$Friend['last_name']);
 	  }
 	  
      return $FriendChoice;
  }
}
