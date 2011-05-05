<?php

/**
 * BasesfMultisiteThemeProfileHost
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $sf_multisite_theme_profile_id
 * @property string $host_uri
 * @property sfMultisiteThemeProfile $sfMultisiteThemeProfile
 * 
 * @method integer                     getSfMultisiteThemeProfileId()     Returns the current record's "sf_multisite_theme_profile_id" value
 * @method string                      getHostUri()                       Returns the current record's "host_uri" value
 * @method sfMultisiteThemeProfile     getSfMultisiteThemeProfile()       Returns the current record's "sfMultisiteThemeProfile" value
 * @method sfMultisiteThemeProfileHost setSfMultisiteThemeProfileId()     Sets the current record's "sf_multisite_theme_profile_id" value
 * @method sfMultisiteThemeProfileHost setHostUri()                       Sets the current record's "host_uri" value
 * @method sfMultisiteThemeProfileHost setSfMultisiteThemeProfile()       Sets the current record's "sfMultisiteThemeProfile" value
 * 
 * @package    Yuoweb
 * @subpackage model
 * @author     Shadley Wentzel
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasesfMultisiteThemeProfileHost extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_multisite_theme_profile_host');
        $this->hasColumn('sf_multisite_theme_profile_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('host_uri', 'string', 255, array(
             'type' => 'string',
             'notnull' => 'true: unique: true',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfMultisiteThemeProfile', array(
             'local' => 'sf_multisite_theme_profile_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}