<?php

/**
 * BasesfMultisiteThemeThemeInfo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $theme_name
 * @property boolean $theme_enabled
 * @property boolean $is_private
 * @property Doctrine_Collection $sfMultisiteThemeThemeInfos
 * 
 * @method string                    getThemeName()                  Returns the current record's "theme_name" value
 * @method boolean                   getThemeEnabled()               Returns the current record's "theme_enabled" value
 * @method boolean                   getIsPrivate()                  Returns the current record's "is_private" value
 * @method Doctrine_Collection       getSfMultisiteThemeThemeInfos() Returns the current record's "sfMultisiteThemeThemeInfos" collection
 * @method sfMultisiteThemeThemeInfo setThemeName()                  Sets the current record's "theme_name" value
 * @method sfMultisiteThemeThemeInfo setThemeEnabled()               Sets the current record's "theme_enabled" value
 * @method sfMultisiteThemeThemeInfo setIsPrivate()                  Sets the current record's "is_private" value
 * @method sfMultisiteThemeThemeInfo setSfMultisiteThemeThemeInfos() Sets the current record's "sfMultisiteThemeThemeInfos" collection
 * 
 * @package    Yuoweb
 * @subpackage model
 * @author     Shadley Wentzel
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasesfMultisiteThemeThemeInfo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_multisite_theme_theme_info');
        $this->hasColumn('theme_name', 'string', 255, array(
             'type' => 'string',
             'notnull' => 'true: unique: true',
             'length' => 255,
             ));
        $this->hasColumn('theme_enabled', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('is_private', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('sfMultisiteThemeProfile as sfMultisiteThemeThemeInfos', array(
             'local' => 'id',
             'foreign' => 'sf_multisite_theme_theme_info_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}