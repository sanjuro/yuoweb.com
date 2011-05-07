<?php

/**
 * BaseShoutCountry
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property string $dailing_code
 * @property Doctrine_Collection $ShoutClient
 * 
 * @method integer             getId()           Returns the current record's "id" value
 * @method string              getTitle()        Returns the current record's "title" value
 * @method string              getDailingCode()  Returns the current record's "dailing_code" value
 * @method Doctrine_Collection getShoutClient()  Returns the current record's "ShoutClient" collection
 * @method ShoutCountry        setId()           Sets the current record's "id" value
 * @method ShoutCountry        setTitle()        Sets the current record's "title" value
 * @method ShoutCountry        setDailingCode()  Sets the current record's "dailing_code" value
 * @method ShoutCountry        setShoutClient()  Sets the current record's "ShoutClient" collection
 * 
 * @package    Spark
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseShoutCountry extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('shout_country');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('title', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('dailing_code', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('ShoutClient', array(
             'local' => 'id',
             'foreign' => 'country_id'));
    }
}