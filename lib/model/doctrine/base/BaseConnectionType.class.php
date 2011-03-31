<?php

/**
 * BaseConnectionType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property Doctrine_Collection $Connection
 * 
 * @method string              getTitle()      Returns the current record's "title" value
 * @method Doctrine_Collection getConnection() Returns the current record's "Connection" collection
 * @method ConnectionType      setTitle()      Sets the current record's "title" value
 * @method ConnectionType      setConnection() Sets the current record's "Connection" collection
 * 
 * @package    Spark
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseConnectionType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('connection_type');
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Connection', array(
             'local' => 'id',
             'foreign' => 'type_id'));
    }
}