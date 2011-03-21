<?php

/**
 * SpeakoutCategoryTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class SpeakoutCategoryTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object SpeakoutCategoryTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('SpeakoutCategory');
    }
    
/**
 * Function to find a all Categories for the Speakout feature on a network with topics
 * 
 * This function find categories associated for the Speakout Feature on a network
 * with their related topics.
 * 
 * @param  void
 * 
 * @return array All categories with related topics
 */
	public function getCategorysWithTopics(Doctrine_Query $q = null)
	{
	  if (is_null($q))
	  {
	    $q = Doctrine_Query::create()
	      ->from('SpeakoutCategory sc');
	  }
	  
	  $rootAlias = $q->getRootAlias();
	  
	  $q->leftJoin($rootAlias . '.SpeakoutTopic st');
	  
	  return Doctrine_Core::getTable('SpeakoutTopic')->getTopics($q);
	}
}