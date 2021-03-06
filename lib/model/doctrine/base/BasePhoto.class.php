<?php

/**
 * BasePhoto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $url
 * @property integer $network_id
 * @property integer $user_id
 * @property integer $view_count
 * @property boolean $is_private
 * @property sfGuardUser $sfGuardUser
 * @property Network $Network
 * @property Doctrine_Collection $PhotoLink
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method string              getUrl()         Returns the current record's "url" value
 * @method integer             getNetworkId()   Returns the current record's "network_id" value
 * @method integer             getUserId()      Returns the current record's "user_id" value
 * @method integer             getViewCount()   Returns the current record's "view_count" value
 * @method boolean             getIsPrivate()   Returns the current record's "is_private" value
 * @method sfGuardUser         getSfGuardUser() Returns the current record's "sfGuardUser" value
 * @method Network             getNetwork()     Returns the current record's "Network" value
 * @method Doctrine_Collection getPhotoLink()   Returns the current record's "PhotoLink" collection
 * @method Photo               setId()          Sets the current record's "id" value
 * @method Photo               setUrl()         Sets the current record's "url" value
 * @method Photo               setNetworkId()   Sets the current record's "network_id" value
 * @method Photo               setUserId()      Sets the current record's "user_id" value
 * @method Photo               setViewCount()   Sets the current record's "view_count" value
 * @method Photo               setIsPrivate()   Sets the current record's "is_private" value
 * @method Photo               setSfGuardUser() Sets the current record's "sfGuardUser" value
 * @method Photo               setNetwork()     Sets the current record's "Network" value
 * @method Photo               setPhotoLink()   Sets the current record's "PhotoLink" collection
 * 
 * @package    Yuoweb
 * @subpackage model
 * @author     Shadley Wentzel
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePhoto extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('photo');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('url', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('network_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('view_count', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
        $this->hasColumn('is_private', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 0,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $this->hasOne('Network', array(
             'local' => 'network_id',
             'foreign' => 'id'));

        $this->hasMany('PhotoLink', array(
             'local' => 'id',
             'foreign' => 'photo_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $commentable0 = new Doctrine_Template_Commentable();
        $this->actAs($timestampable0);
        $this->actAs($commentable0);
    }
}