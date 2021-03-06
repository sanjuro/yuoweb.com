<?php

/**
 * BaseSpeakoutTopic
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $category_id
 * @property integer $network_id
 * @property integer $user_id
 * @property SpeakoutCategory $SpeakoutCategory
 * @property Network $Network
 * @property sfGuardUser $sfGuardUser
 * @property Doctrine_Collection $SpeakoutReply
 * 
 * @method integer             getId()               Returns the current record's "id" value
 * @method string              getTitle()            Returns the current record's "title" value
 * @method string              getDescription()      Returns the current record's "description" value
 * @method integer             getCategoryId()       Returns the current record's "category_id" value
 * @method integer             getNetworkId()        Returns the current record's "network_id" value
 * @method integer             getUserId()           Returns the current record's "user_id" value
 * @method SpeakoutCategory    getSpeakoutCategory() Returns the current record's "SpeakoutCategory" value
 * @method Network             getNetwork()          Returns the current record's "Network" value
 * @method sfGuardUser         getSfGuardUser()      Returns the current record's "sfGuardUser" value
 * @method Doctrine_Collection getSpeakoutReply()    Returns the current record's "SpeakoutReply" collection
 * @method SpeakoutTopic       setId()               Sets the current record's "id" value
 * @method SpeakoutTopic       setTitle()            Sets the current record's "title" value
 * @method SpeakoutTopic       setDescription()      Sets the current record's "description" value
 * @method SpeakoutTopic       setCategoryId()       Sets the current record's "category_id" value
 * @method SpeakoutTopic       setNetworkId()        Sets the current record's "network_id" value
 * @method SpeakoutTopic       setUserId()           Sets the current record's "user_id" value
 * @method SpeakoutTopic       setSpeakoutCategory() Sets the current record's "SpeakoutCategory" value
 * @method SpeakoutTopic       setNetwork()          Sets the current record's "Network" value
 * @method SpeakoutTopic       setSfGuardUser()      Sets the current record's "sfGuardUser" value
 * @method SpeakoutTopic       setSpeakoutReply()    Sets the current record's "SpeakoutReply" collection
 * 
 * @package    Yuoweb
 * @subpackage model
 * @author     Shadley Wentzel
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSpeakoutTopic extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('speakout_topic');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('title', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             ));
        $this->hasColumn('description', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             ));
        $this->hasColumn('category_id', 'integer', null, array(
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
        $this->hasOne('SpeakoutCategory', array(
             'local' => 'category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Network', array(
             'local' => 'network_id',
             'foreign' => 'id'));

        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $this->hasMany('SpeakoutReply', array(
             'local' => 'id',
             'foreign' => 'topic_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $searchable0 = new Doctrine_Template_Searchable(array(
             'fields' => 
             array(
              0 => 'title',
              1 => 'description',
              2 => 'network_id',
             ),
             ));
        $softdelete0 = new Doctrine_Template_SoftDelete();
        $this->actAs($timestampable0);
        $this->actAs($searchable0);
        $this->actAs($softdelete0);
    }
}