<?php

/**
 * BaseSpeakoutReply
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $body
 * @property string $htmlbody
 * @property integer $topic_id
 * @property integer $network_id
 * @property integer $user_id
 * @property SpeakoutTopic $SpeakoutTopic
 * @property Network $Network
 * @property sfGuardUser $sfGuardUser
 * 
 * @method integer       getId()            Returns the current record's "id" value
 * @method string        getBody()          Returns the current record's "body" value
 * @method string        getHtmlbody()      Returns the current record's "htmlbody" value
 * @method integer       getTopicId()       Returns the current record's "topic_id" value
 * @method integer       getNetworkId()     Returns the current record's "network_id" value
 * @method integer       getUserId()        Returns the current record's "user_id" value
 * @method SpeakoutTopic getSpeakoutTopic() Returns the current record's "SpeakoutTopic" value
 * @method Network       getNetwork()       Returns the current record's "Network" value
 * @method sfGuardUser   getSfGuardUser()   Returns the current record's "sfGuardUser" value
 * @method SpeakoutReply setId()            Sets the current record's "id" value
 * @method SpeakoutReply setBody()          Sets the current record's "body" value
 * @method SpeakoutReply setHtmlbody()      Sets the current record's "htmlbody" value
 * @method SpeakoutReply setTopicId()       Sets the current record's "topic_id" value
 * @method SpeakoutReply setNetworkId()     Sets the current record's "network_id" value
 * @method SpeakoutReply setUserId()        Sets the current record's "user_id" value
 * @method SpeakoutReply setSpeakoutTopic() Sets the current record's "SpeakoutTopic" value
 * @method SpeakoutReply setNetwork()       Sets the current record's "Network" value
 * @method SpeakoutReply setSfGuardUser()   Sets the current record's "sfGuardUser" value
 * 
 * @package    Yuoweb
 * @subpackage model
 * @author     Shadley Wentzel
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSpeakoutReply extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('speakout_reply');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('body', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('htmlbody', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('topic_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('network_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('SpeakoutTopic', array(
             'local' => 'topic_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Network', array(
             'local' => 'network_id',
             'foreign' => 'id'));

        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $softdelete0 = new Doctrine_Template_SoftDelete();
        $searchable0 = new Doctrine_Template_Searchable(array(
             'fields' => 
             array(
              0 => 'network_id',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($softdelete0);
        $this->actAs($searchable0);
    }
}