<?php

/**
 * BasePhotoView
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $network_id
 * @property integer $photo_id
 * @property integer $has_viewed
 * @property Network $Network
 * @property Feature $Photo
 * 
 * @method integer   getId()         Returns the current record's "id" value
 * @method integer   getNetworkId()  Returns the current record's "network_id" value
 * @method integer   getPhotoId()    Returns the current record's "photo_id" value
 * @method integer   getHasViewed()  Returns the current record's "has_viewed" value
 * @method Network   getNetwork()    Returns the current record's "Network" value
 * @method Feature   getPhoto()      Returns the current record's "Photo" value
 * @method PhotoView setId()         Sets the current record's "id" value
 * @method PhotoView setNetworkId()  Sets the current record's "network_id" value
 * @method PhotoView setPhotoId()    Sets the current record's "photo_id" value
 * @method PhotoView setHasViewed()  Sets the current record's "has_viewed" value
 * @method PhotoView setNetwork()    Sets the current record's "Network" value
 * @method PhotoView setPhoto()      Sets the current record's "Photo" value
 * 
 * @package    Yuoweb
 * @subpackage model
 * @author     Shadley Wentzel
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePhotoView extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('photo_view');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('network_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('photo_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('has_viewed', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 2,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Network', array(
             'local' => 'network_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Feature as Photo', array(
             'local' => 'photo_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}