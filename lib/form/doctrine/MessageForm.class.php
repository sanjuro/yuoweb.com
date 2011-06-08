<?php

/**
 * Message form.
 *
 * @package    Spark
 * @subpackage form
 * @author     Shadley Wentzel
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MessageForm extends BaseMessageForm
{
  public $network;
  public $currentUser;
  
  public function configure()
  {
    unset(
      $this['user_id'], $this['network_id'],
      $this['messagestatus_id'], $this['created_at'],
      $this['updated_at'], $this['htmlbody']
    );
    
  	if ($this->getOption("network") instanceof Network)
	{
	    $this->network = $this->getOption("network");
	}
    
	if ($this->getOption("currentUser") instanceof sfUser)
	{
	    $this->currentUser = $this->getOption("currentUser");
	}
	    
	$this->widgetSchema['body'] = new sfWidgetFormTextarea();

	$this->widgetSchema['friend'] = new sfWidgetFormChoice (array( 'choices' => $this->getAllPublicUser($this->currentUser->getNetworkUserId()),
      													  'label' => 'Send to',
      											    ));
      											    
	$this->validatorSchema['friend'] = new sfValidatorString(array('min_length' => 1));
  }
  
  public function updateObject($values = null)
  { 
    if (is_null($values))
    {
      $values = $this->values;
    }	    
	
	$values['user_id'] = $this->currentUser->getUserId();
	
	$values['network_id'] = $this->network->getId();
	
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
		$MessageReceiver->setUserId($this->values['friend']);
		$MessageReceiver->setMessagestatusId(1);
		$MessageReceiver->save();
	}

    // embedded forms
    parent::saveEmbeddedForms($con); 
  }
    
  private function getAllPublicUser()
  {	
	  $Users = $this->network->getPublicUsers('');
	   	 
	  $FriendChoice = array();
	 
 	  foreach ( $Users as $Friend ) {
 	  	$FriendChoice[$Friend['id']] = ucwords($Friend['username']);
 	  }
 	  
      return $FriendChoice;
  }
}
