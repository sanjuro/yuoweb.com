<?php

/**
 * SpeakoutTopic
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Spark
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class SpeakoutTopic extends BaseSpeakoutTopic
{
  public function getReplys()
  {
	  $q = Doctrine_Query::create()
       ->from('SpeakoutReply sr')
       ->leftJoin('sr.NetworkUser nu')
       ->where('sr.topic_id = ?', $this->getId()); 
	
     return Doctrine_Core::getTable('NetworkUser')->getWithUsers($q);
  }
}