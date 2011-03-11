<?php

/**
 * BaseGender
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property Doctrine_Collection $UserProfile
 * 
 * @method string              getTitle()       Returns the current record's "title" value
 * @method Doctrine_Collection getUserProfile() Returns the current record's "UserProfile" collection
 * @method Gender              setTitle()       Sets the current record's "title" value
 * @method Gender              setUserProfile() Sets the current record's "UserProfile" collection
 * 
 * @package    Spark
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGender extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('gender');
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('UserProfile', array(
             'local' => 'id',
             'foreign' => 'gender_id'));
    }
}