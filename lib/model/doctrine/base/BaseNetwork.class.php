<?php

/**
 * BaseNetwork
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $client_id
 * @property integer $networktype_id
 * @property integer $networkcategory_id
 * @property string $subdomain
 * @property string $title
 * @property string $description
 * @property integer $feature_count
 * @property integer $user_count
 * @property string $logo
 * @property string $accesskey
 * @property boolean $is_public
 * @property boolean $is_activated
 * @property timestamp $expires_at
 * @property Client $Client
 * @property NetworkType $NetworkType
 * @property NetworkCategory $NetworkCategory
 * @property Doctrine_Collection $SpeakoutCategory
 * @property Doctrine_Collection $WebuyDeal
 * @property Doctrine_Collection $AdvertNetwork
 * @property Doctrine_Collection $NetworkFeature
 * @property Doctrine_Collection $NetworkUser
 * @property Doctrine_Collection $Message
 * @property Doctrine_Collection $PhotoView
 * @property Doctrine_Collection $Event
 * 
 * @method integer             getClientId()           Returns the current record's "client_id" value
 * @method integer             getNetworktypeId()      Returns the current record's "networktype_id" value
 * @method integer             getNetworkcategoryId()  Returns the current record's "networkcategory_id" value
 * @method string              getSubdomain()          Returns the current record's "subdomain" value
 * @method string              getTitle()              Returns the current record's "title" value
 * @method string              getDescription()        Returns the current record's "description" value
 * @method integer             getFeatureCount()       Returns the current record's "feature_count" value
 * @method integer             getUserCount()          Returns the current record's "user_count" value
 * @method string              getLogo()               Returns the current record's "logo" value
 * @method string              getAccesskey()          Returns the current record's "accesskey" value
 * @method boolean             getIsPublic()           Returns the current record's "is_public" value
 * @method boolean             getIsActivated()        Returns the current record's "is_activated" value
 * @method timestamp           getExpiresAt()          Returns the current record's "expires_at" value
 * @method Client              getClient()             Returns the current record's "Client" value
 * @method NetworkType         getNetworkType()        Returns the current record's "NetworkType" value
 * @method NetworkCategory     getNetworkCategory()    Returns the current record's "NetworkCategory" value
 * @method Doctrine_Collection getSpeakoutCategory()   Returns the current record's "SpeakoutCategory" collection
 * @method Doctrine_Collection getWebuyDeal()          Returns the current record's "WebuyDeal" collection
 * @method Doctrine_Collection getAdvertNetwork()      Returns the current record's "AdvertNetwork" collection
 * @method Doctrine_Collection getNetworkFeature()     Returns the current record's "NetworkFeature" collection
 * @method Doctrine_Collection getNetworkUser()        Returns the current record's "NetworkUser" collection
 * @method Doctrine_Collection getMessage()            Returns the current record's "Message" collection
 * @method Doctrine_Collection getPhotoView()          Returns the current record's "PhotoView" collection
 * @method Doctrine_Collection getEvent()              Returns the current record's "Event" collection
 * @method Network             setClientId()           Sets the current record's "client_id" value
 * @method Network             setNetworktypeId()      Sets the current record's "networktype_id" value
 * @method Network             setNetworkcategoryId()  Sets the current record's "networkcategory_id" value
 * @method Network             setSubdomain()          Sets the current record's "subdomain" value
 * @method Network             setTitle()              Sets the current record's "title" value
 * @method Network             setDescription()        Sets the current record's "description" value
 * @method Network             setFeatureCount()       Sets the current record's "feature_count" value
 * @method Network             setUserCount()          Sets the current record's "user_count" value
 * @method Network             setLogo()               Sets the current record's "logo" value
 * @method Network             setAccesskey()          Sets the current record's "accesskey" value
 * @method Network             setIsPublic()           Sets the current record's "is_public" value
 * @method Network             setIsActivated()        Sets the current record's "is_activated" value
 * @method Network             setExpiresAt()          Sets the current record's "expires_at" value
 * @method Network             setClient()             Sets the current record's "Client" value
 * @method Network             setNetworkType()        Sets the current record's "NetworkType" value
 * @method Network             setNetworkCategory()    Sets the current record's "NetworkCategory" value
 * @method Network             setSpeakoutCategory()   Sets the current record's "SpeakoutCategory" collection
 * @method Network             setWebuyDeal()          Sets the current record's "WebuyDeal" collection
 * @method Network             setAdvertNetwork()      Sets the current record's "AdvertNetwork" collection
 * @method Network             setNetworkFeature()     Sets the current record's "NetworkFeature" collection
 * @method Network             setNetworkUser()        Sets the current record's "NetworkUser" collection
 * @method Network             setMessage()            Sets the current record's "Message" collection
 * @method Network             setPhotoView()          Sets the current record's "PhotoView" collection
 * @method Network             setEvent()              Sets the current record's "Event" collection
 * 
 * @package    Spark
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNetwork extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('network');
        $this->hasColumn('client_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('networktype_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('networkcategory_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('subdomain', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 4000, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 4000,
             ));
        $this->hasColumn('feature_count', 'integer', null, array(
             'type' => 'integer',
             'default' => 3,
             ));
        $this->hasColumn('user_count', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('logo', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('accesskey', 'string', 255, array(
             'type' => 'string',
             'default' => 0,
             'length' => 255,
             ));
        $this->hasColumn('is_public', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 1,
             ));
        $this->hasColumn('is_activated', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('expires_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));


        $this->index('subdomain_index', array(
             'fields' => 
             array(
              0 => 'subdomain',
             ),
             'type' => 'unique',
             ));
        $this->index('slug_index', array(
             'fields' => 
             array(
              0 => 'slug',
              1 => 'id',
             ),
             'type' => 'unique',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Client', array(
             'local' => 'client_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('NetworkType', array(
             'local' => 'networktype_id',
             'foreign' => 'id'));

        $this->hasOne('NetworkCategory', array(
             'local' => 'networkcategory_id',
             'foreign' => 'id'));

        $this->hasMany('SpeakoutCategory', array(
             'local' => 'id',
             'foreign' => 'network_id'));

        $this->hasMany('WebuyDeal', array(
             'local' => 'id',
             'foreign' => 'network_id'));

        $this->hasMany('AdvertNetwork', array(
             'local' => 'id',
             'foreign' => 'network_id'));

        $this->hasMany('NetworkFeature', array(
             'local' => 'id',
             'foreign' => 'network_id'));

        $this->hasMany('NetworkUser', array(
             'local' => 'id',
             'foreign' => 'network_id'));

        $this->hasMany('Message', array(
             'local' => 'id',
             'foreign' => 'network_id'));

        $this->hasMany('PhotoView', array(
             'local' => 'id',
             'foreign' => 'network_id'));

        $this->hasMany('Event', array(
             'local' => 'id',
             'foreign' => 'network_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'unique' => true,
             'fields' => 
             array(
              0 => 'title',
             ),
             'canUpdate' => true,
             ));
        $countcache0 = new CountCache(array(
             'relations' => 
             array(
              'Client' => 
              array(
              'columnName' => 'network_count',
              'foreignAlias' => 'Networks',
              ),
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($sluggable0);
        $this->actAs($countcache0);
    }
}