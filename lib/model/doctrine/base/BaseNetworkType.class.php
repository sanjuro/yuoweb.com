<?php

/**
 * BaseNetworkType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property Doctrine_Collection $Network
 * 
 * @method string              getTitle()   Returns the current record's "title" value
 * @method Doctrine_Collection getNetwork() Returns the current record's "Network" collection
 * @method NetworkType         setTitle()   Sets the current record's "title" value
 * @method NetworkType         setNetwork() Sets the current record's "Network" collection
 * 
 * @package    Yuoweb
 * @subpackage model
 * @author     Shadley Wentzel
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNetworkType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('network_type');
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Network', array(
             'local' => 'id',
             'foreign' => 'networktype_id'));
    }
}