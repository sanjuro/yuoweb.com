<?php

/**
 * BaseNetworkFeature
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $network_id
 * @property integer $feature_id
 * @property integer $active
 * @property integer $position
 * @property Network $Network
 * @property Feature $Feature
 * 
 * @method integer        getId()         Returns the current record's "id" value
 * @method integer        getNetworkId()  Returns the current record's "network_id" value
 * @method integer        getFeatureId()  Returns the current record's "feature_id" value
 * @method integer        getActive()     Returns the current record's "active" value
 * @method integer        getPosition()   Returns the current record's "position" value
 * @method Network        getNetwork()    Returns the current record's "Network" value
 * @method Feature        getFeature()    Returns the current record's "Feature" value
 * @method NetworkFeature setId()         Sets the current record's "id" value
 * @method NetworkFeature setNetworkId()  Sets the current record's "network_id" value
 * @method NetworkFeature setFeatureId()  Sets the current record's "feature_id" value
 * @method NetworkFeature setActive()     Sets the current record's "active" value
 * @method NetworkFeature setPosition()   Sets the current record's "position" value
 * @method NetworkFeature setNetwork()    Sets the current record's "Network" value
 * @method NetworkFeature setFeature()    Sets the current record's "Feature" value
 * 
 * @package    Spark
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNetworkFeature extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('network_feature');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('network_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('feature_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('active', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 2,
             ));
        $this->hasColumn('position', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Network', array(
             'local' => 'network_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Feature', array(
             'local' => 'feature_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}