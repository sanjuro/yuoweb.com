<?php
class sfValidatorNetworkAccessKey  extends sfValidatorBase
{
  protected function configure($options = array(), $messages = array())
  {
    $this->addMessage('accesskey1', 'The accesskey you have entered is incorrect');
  }

  protected function doClean($values)
  {
    $errorSchema = new sfValidatorErrorSchema($this);

	foreach($values as $key => $value)
    { 	
	 	$errorSchemaLocal = new sfValidatorErrorSchema($this);
	 
	 	if ( $key == 'accesskey' && isset($values['accesskey']) ) {
	 		
	 	echo '<pre>';print_r($currentNetwork);exit;
			
			if ($network->getAccesskey() != $values['accesskey'] ){
				$errorSchemaLocal->addError(new sfValidatorError($this, 'accesskey1'));	 
			}
						
		}
		
		 if (count($errorSchemaLocal))
		{
			$errorSchema->addError($errorSchemaLocal, (string) $key);
		}
	} 	
   
    // throws the error for the main form
    if (count($errorSchema))
    {
       throw new sfValidatorErrorSchema($this, $errorSchema);
    }
 
    return $values;
  }

}
