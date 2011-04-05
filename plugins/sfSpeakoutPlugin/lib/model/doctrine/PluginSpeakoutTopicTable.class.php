<?php

/**
 * PluginSpeakoutTopicTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PluginSpeakoutTopicTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object PluginSpeakoutTopicTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('PluginSpeakoutTopic');
    }
    
	/**
	 * Function to find a all Categories for the Speakout feature on a network with topics
	 * 
	 * This function find categories associated for the Speakout Feature on a network
	 * with their related topics.
	 * 
	 * @param Doctrine_Query $q 
	 * 
	 * @return query Base Query to find topics for a query
	 */
	public function getTopics(Doctrine_Query $q = null)
	{
	  if (is_null($q))
	  {
	    $q = Doctrine_Query::create()
	      ->from('SpeakoutTopic st');
	  }
	
	  return $q;
	}
}