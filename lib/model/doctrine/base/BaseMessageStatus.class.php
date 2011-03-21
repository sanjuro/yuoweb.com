<?php

/**
 * BaseMessageStatus
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property Doctrine_Collection $MessageReciever
 * 
 * @method string              getTitle()           Returns the current record's "title" value
 * @method Doctrine_Collection getMessageReciever() Returns the current record's "MessageReciever" collection
 * @method MessageStatus       setTitle()           Sets the current record's "title" value
 * @method MessageStatus       setMessageReciever() Sets the current record's "MessageReciever" collection
 * 
 * @package    Spark
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMessageStatus extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('message_status');
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('MessageReciever', array(
             'local' => 'id',
             'foreign' => 'messagestatus_id'));
    }
}