<?php

/**
 * BaseSpeakoutCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $network_id
 * @property integer $topic_count
 * @property Network $Network
 * @property Doctrine_Collection $SpeakoutTopic
 * 
 * @method integer             getId()            Returns the current record's "id" value
 * @method string              getTitle()         Returns the current record's "title" value
 * @method string              getDescription()   Returns the current record's "description" value
 * @method integer             getNetworkId()     Returns the current record's "network_id" value
 * @method integer             getTopicCount()    Returns the current record's "topic_count" value
 * @method Network             getNetwork()       Returns the current record's "Network" value
 * @method Doctrine_Collection getSpeakoutTopic() Returns the current record's "SpeakoutTopic" collection
 * @method SpeakoutCategory    setId()            Sets the current record's "id" value
 * @method SpeakoutCategory    setTitle()         Sets the current record's "title" value
 * @method SpeakoutCategory    setDescription()   Sets the current record's "description" value
 * @method SpeakoutCategory    setNetworkId()     Sets the current record's "network_id" value
 * @method SpeakoutCategory    setTopicCount()    Sets the current record's "topic_count" value
 * @method SpeakoutCategory    setNetwork()       Sets the current record's "Network" value
 * @method SpeakoutCategory    setSpeakoutTopic() Sets the current record's "SpeakoutTopic" collection
 * 
 * @package    Spark
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSpeakoutCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('speakout_category');
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
        $this->hasColumn('network_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('topic_count', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Network', array(
             'local' => 'network_id',
             'foreign' => 'id'));

        $this->hasMany('SpeakoutTopic', array(
             'local' => 'id',
             'foreign' => 'category_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $searchable0 = new Doctrine_Template_Searchable(array(
             'fields' => 
             array(
              0 => 'title',
              1 => 'description',
             ),
             ));
        $softdelete0 = new Doctrine_Template_SoftDelete();
        $this->actAs($timestampable0);
        $this->actAs($searchable0);
        $this->actAs($softdelete0);
    }
}