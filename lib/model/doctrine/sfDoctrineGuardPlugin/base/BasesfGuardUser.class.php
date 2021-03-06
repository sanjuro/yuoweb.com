<?php

/**
 * BasesfGuardUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $first_name
 * @property string $last_name
 * @property string $email_address
 * @property string $username
 * @property string $algorithm
 * @property string $salt
 * @property string $password
 * @property boolean $is_active
 * @property boolean $is_super_admin
 * @property timestamp $last_login
 * @property Doctrine_Collection $Groups
 * @property Doctrine_Collection $Permissions
 * @property Doctrine_Collection $sfGuardUserPermission
 * @property Doctrine_Collection $sfGuardUserGroup
 * @property sfGuardRememberKey $RememberKeys
 * @property sfGuardForgotPassword $ForgotPassword
 * @property Doctrine_Collection $SpeakoutReply
 * @property Doctrine_Collection $SpeakoutTopic
 * @property Doctrine_Collection $Client
 * @property Doctrine_Collection $Connection
 * @property Doctrine_Collection $Follow
 * @property Doctrine_Collection $NetworkUser
 * @property Doctrine_Collection $Notification
 * @property Doctrine_Collection $UserProfile
 * @property Doctrine_Collection $Feed
 * @property Doctrine_Collection $Message
 * @property Doctrine_Collection $MessageReciever
 * @property Doctrine_Collection $Photo
 * @property Doctrine_Collection $PhotoGallery
 * 
 * @method string                getFirstName()             Returns the current record's "first_name" value
 * @method string                getLastName()              Returns the current record's "last_name" value
 * @method string                getEmailAddress()          Returns the current record's "email_address" value
 * @method string                getUsername()              Returns the current record's "username" value
 * @method string                getAlgorithm()             Returns the current record's "algorithm" value
 * @method string                getSalt()                  Returns the current record's "salt" value
 * @method string                getPassword()              Returns the current record's "password" value
 * @method boolean               getIsActive()              Returns the current record's "is_active" value
 * @method boolean               getIsSuperAdmin()          Returns the current record's "is_super_admin" value
 * @method timestamp             getLastLogin()             Returns the current record's "last_login" value
 * @method Doctrine_Collection   getGroups()                Returns the current record's "Groups" collection
 * @method Doctrine_Collection   getPermissions()           Returns the current record's "Permissions" collection
 * @method Doctrine_Collection   getSfGuardUserPermission() Returns the current record's "sfGuardUserPermission" collection
 * @method Doctrine_Collection   getSfGuardUserGroup()      Returns the current record's "sfGuardUserGroup" collection
 * @method sfGuardRememberKey    getRememberKeys()          Returns the current record's "RememberKeys" value
 * @method sfGuardForgotPassword getForgotPassword()        Returns the current record's "ForgotPassword" value
 * @method Doctrine_Collection   getSpeakoutReply()         Returns the current record's "SpeakoutReply" collection
 * @method Doctrine_Collection   getSpeakoutTopic()         Returns the current record's "SpeakoutTopic" collection
 * @method Doctrine_Collection   getClient()                Returns the current record's "Client" collection
 * @method Doctrine_Collection   getConnection()            Returns the current record's "Connection" collection
 * @method Doctrine_Collection   getFollow()                Returns the current record's "Follow" collection
 * @method Doctrine_Collection   getNetworkUser()           Returns the current record's "NetworkUser" collection
 * @method Doctrine_Collection   getNotification()          Returns the current record's "Notification" collection
 * @method Doctrine_Collection   getUserProfile()           Returns the current record's "UserProfile" collection
 * @method Doctrine_Collection   getFeed()                  Returns the current record's "Feed" collection
 * @method Doctrine_Collection   getMessage()               Returns the current record's "Message" collection
 * @method Doctrine_Collection   getMessageReciever()       Returns the current record's "MessageReciever" collection
 * @method Doctrine_Collection   getPhoto()                 Returns the current record's "Photo" collection
 * @method Doctrine_Collection   getPhotoGallery()          Returns the current record's "PhotoGallery" collection
 * @method sfGuardUser           setFirstName()             Sets the current record's "first_name" value
 * @method sfGuardUser           setLastName()              Sets the current record's "last_name" value
 * @method sfGuardUser           setEmailAddress()          Sets the current record's "email_address" value
 * @method sfGuardUser           setUsername()              Sets the current record's "username" value
 * @method sfGuardUser           setAlgorithm()             Sets the current record's "algorithm" value
 * @method sfGuardUser           setSalt()                  Sets the current record's "salt" value
 * @method sfGuardUser           setPassword()              Sets the current record's "password" value
 * @method sfGuardUser           setIsActive()              Sets the current record's "is_active" value
 * @method sfGuardUser           setIsSuperAdmin()          Sets the current record's "is_super_admin" value
 * @method sfGuardUser           setLastLogin()             Sets the current record's "last_login" value
 * @method sfGuardUser           setGroups()                Sets the current record's "Groups" collection
 * @method sfGuardUser           setPermissions()           Sets the current record's "Permissions" collection
 * @method sfGuardUser           setSfGuardUserPermission() Sets the current record's "sfGuardUserPermission" collection
 * @method sfGuardUser           setSfGuardUserGroup()      Sets the current record's "sfGuardUserGroup" collection
 * @method sfGuardUser           setRememberKeys()          Sets the current record's "RememberKeys" value
 * @method sfGuardUser           setForgotPassword()        Sets the current record's "ForgotPassword" value
 * @method sfGuardUser           setSpeakoutReply()         Sets the current record's "SpeakoutReply" collection
 * @method sfGuardUser           setSpeakoutTopic()         Sets the current record's "SpeakoutTopic" collection
 * @method sfGuardUser           setClient()                Sets the current record's "Client" collection
 * @method sfGuardUser           setConnection()            Sets the current record's "Connection" collection
 * @method sfGuardUser           setFollow()                Sets the current record's "Follow" collection
 * @method sfGuardUser           setNetworkUser()           Sets the current record's "NetworkUser" collection
 * @method sfGuardUser           setNotification()          Sets the current record's "Notification" collection
 * @method sfGuardUser           setUserProfile()           Sets the current record's "UserProfile" collection
 * @method sfGuardUser           setFeed()                  Sets the current record's "Feed" collection
 * @method sfGuardUser           setMessage()               Sets the current record's "Message" collection
 * @method sfGuardUser           setMessageReciever()       Sets the current record's "MessageReciever" collection
 * @method sfGuardUser           setPhoto()                 Sets the current record's "Photo" collection
 * @method sfGuardUser           setPhotoGallery()          Sets the current record's "PhotoGallery" collection
 * 
 * @package    Yuoweb
 * @subpackage model
 * @author     Shadley Wentzel
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasesfGuardUser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_guard_user');
        $this->hasColumn('first_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('last_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('email_address', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('username', 'string', 128, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 128,
             ));
        $this->hasColumn('algorithm', 'string', 128, array(
             'type' => 'string',
             'default' => 'sha1',
             'notnull' => true,
             'length' => 128,
             ));
        $this->hasColumn('salt', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             ));
        $this->hasColumn('password', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('is_super_admin', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('last_login', 'timestamp', null, array(
             'type' => 'timestamp',
             ));


        $this->index('is_active_idx', array(
             'fields' => 
             array(
              0 => 'is_active',
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('sfGuardGroup as Groups', array(
             'refClass' => 'sfGuardUserGroup',
             'local' => 'user_id',
             'foreign' => 'group_id'));

        $this->hasMany('sfGuardPermission as Permissions', array(
             'refClass' => 'sfGuardUserPermission',
             'local' => 'user_id',
             'foreign' => 'permission_id'));

        $this->hasMany('sfGuardUserPermission', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('sfGuardUserGroup', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasOne('sfGuardRememberKey as RememberKeys', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasOne('sfGuardForgotPassword as ForgotPassword', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('SpeakoutReply', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('SpeakoutTopic', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('Client', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('Connection', array(
             'local' => 'id',
             'foreign' => 'owner_id'));

        $this->hasMany('Follow', array(
             'local' => 'id',
             'foreign' => 'follower_id'));

        $this->hasMany('NetworkUser', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('Notification', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('UserProfile', array(
             'local' => 'id',
             'foreign' => 'sfuser_id'));

        $this->hasMany('Feed', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('Message', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('MessageReciever', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('Photo', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('PhotoGallery', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}