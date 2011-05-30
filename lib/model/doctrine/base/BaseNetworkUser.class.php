<?php

/**
 * BaseNetworkUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $network_id
 * @property integer $user_id
 * @property boolean $is_private
 * @property Network $Network
 * @property sfGuardUser $sfGuardUser
 * @property Doctrine_Collection $SpeakoutReply
 * @property Doctrine_Collection $SpeakoutTopic
 * @property Doctrine_Collection $HeadspacePost
 * @property Doctrine_Collection $HeadspaceTag
 * @property Doctrine_Collection $WebuyNetworkUser
 * @property Doctrine_Collection $ShoutMessage
 * @property Doctrine_Collection $Event
 * @property Doctrine_Collection $EventInvite
 * 
 * @method integer             getId()               Returns the current record's "id" value
 * @method integer             getNetworkId()        Returns the current record's "network_id" value
 * @method integer             getUserId()           Returns the current record's "user_id" value
 * @method boolean             getIsPrivate()        Returns the current record's "is_private" value
 * @method Network             getNetwork()          Returns the current record's "Network" value
 * @method sfGuardUser         getSfGuardUser()      Returns the current record's "sfGuardUser" value
 * @method Doctrine_Collection getSpeakoutReply()    Returns the current record's "SpeakoutReply" collection
 * @method Doctrine_Collection getSpeakoutTopic()    Returns the current record's "SpeakoutTopic" collection
 * @method Doctrine_Collection getHeadspacePost()    Returns the current record's "HeadspacePost" collection
 * @method Doctrine_Collection getHeadspaceTag()     Returns the current record's "HeadspaceTag" collection
 * @method Doctrine_Collection getWebuyNetworkUser() Returns the current record's "WebuyNetworkUser" collection
 * @method Doctrine_Collection getShoutMessage()     Returns the current record's "ShoutMessage" collection
 * @method Doctrine_Collection getEvent()            Returns the current record's "Event" collection
 * @method Doctrine_Collection getEventInvite()      Returns the current record's "EventInvite" collection
 * @method NetworkUser         setId()               Sets the current record's "id" value
 * @method NetworkUser         setNetworkId()        Sets the current record's "network_id" value
 * @method NetworkUser         setUserId()           Sets the current record's "user_id" value
 * @method NetworkUser         setIsPrivate()        Sets the current record's "is_private" value
 * @method NetworkUser         setNetwork()          Sets the current record's "Network" value
 * @method NetworkUser         setSfGuardUser()      Sets the current record's "sfGuardUser" value
 * @method NetworkUser         setSpeakoutReply()    Sets the current record's "SpeakoutReply" collection
 * @method NetworkUser         setSpeakoutTopic()    Sets the current record's "SpeakoutTopic" collection
 * @method NetworkUser         setHeadspacePost()    Sets the current record's "HeadspacePost" collection
 * @method NetworkUser         setHeadspaceTag()     Sets the current record's "HeadspaceTag" collection
 * @method NetworkUser         setWebuyNetworkUser() Sets the current record's "WebuyNetworkUser" collection
 * @method NetworkUser         setShoutMessage()     Sets the current record's "ShoutMessage" collection
 * @method NetworkUser         setEvent()            Sets the current record's "Event" collection
 * @method NetworkUser         setEventInvite()      Sets the current record's "EventInvite" collection
 * 
 * @package    Yuoweb
 * @subpackage model
 * @author     Shadley Wentzel
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNetworkUser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('network_user');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('network_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('is_private', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 0,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Network', array(
             'local' => 'network_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('SpeakoutReply', array(
             'local' => 'id',
             'foreign' => 'networkuser_id'));

        $this->hasMany('SpeakoutTopic', array(
             'local' => 'id',
             'foreign' => 'networkuser_id'));

        $this->hasMany('HeadspacePost', array(
             'local' => 'id',
             'foreign' => 'networkuser_id'));

        $this->hasMany('HeadspaceTag', array(
             'local' => 'id',
             'foreign' => 'networkuser_id'));

        $this->hasMany('WebuyNetworkUser', array(
             'local' => 'id',
             'foreign' => 'networkuser_id'));

        $this->hasMany('ShoutMessage', array(
             'local' => 'id',
             'foreign' => 'networkuser_id'));

        $this->hasMany('Event', array(
             'local' => 'id',
             'foreign' => 'networkuser_id'));

        $this->hasMany('EventInvite', array(
             'local' => 'id',
             'foreign' => 'networkuser_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $countcache0 = new CountCache(array(
             'relations' => 
             array(
              'Network' => 
              array(
              'columnName' => 'user_count',
              'foreignAlias' => 'NetworkUser',
              ),
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($countcache0);
    }
}