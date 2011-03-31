<?php

/**
 * BaseFeedType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property Doctrine_Collection $Feed
 * 
 * @method integer             getId()    Returns the current record's "id" value
 * @method string              getTitle() Returns the current record's "title" value
 * @method Doctrine_Collection getFeed()  Returns the current record's "Feed" collection
 * @method FeedType            setId()    Sets the current record's "id" value
 * @method FeedType            setTitle() Sets the current record's "title" value
 * @method FeedType            setFeed()  Sets the current record's "Feed" collection
 * 
 * @package    Spark
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFeedType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('feed_type');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('title', 'string', 160, array(
             'type' => 'string',
             'length' => 160,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Feed', array(
             'local' => 'id',
             'foreign' => 'feedtype_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}