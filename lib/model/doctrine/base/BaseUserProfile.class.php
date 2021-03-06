<?php

/**
 * BaseUserProfile
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $sfuser_id
 * @property string $mobile_no
 * @property string $description
 * @property string $profile_pic
 * @property integer $gender_id
 * @property string $city
 * @property string $country
 * @property timestamp $birthday
 * @property boolean $is_private
 * @property sfGuardUser $sfGuardUser
 * @property Gender $Gender
 * 
 * @method integer     getId()          Returns the current record's "id" value
 * @method integer     getSfuserId()    Returns the current record's "sfuser_id" value
 * @method string      getMobileNo()    Returns the current record's "mobile_no" value
 * @method string      getDescription() Returns the current record's "description" value
 * @method string      getProfilePic()  Returns the current record's "profile_pic" value
 * @method integer     getGenderId()    Returns the current record's "gender_id" value
 * @method string      getCity()        Returns the current record's "city" value
 * @method string      getCountry()     Returns the current record's "country" value
 * @method timestamp   getBirthday()    Returns the current record's "birthday" value
 * @method boolean     getIsPrivate()   Returns the current record's "is_private" value
 * @method sfGuardUser getSfGuardUser() Returns the current record's "sfGuardUser" value
 * @method Gender      getGender()      Returns the current record's "Gender" value
 * @method UserProfile setId()          Sets the current record's "id" value
 * @method UserProfile setSfuserId()    Sets the current record's "sfuser_id" value
 * @method UserProfile setMobileNo()    Sets the current record's "mobile_no" value
 * @method UserProfile setDescription() Sets the current record's "description" value
 * @method UserProfile setProfilePic()  Sets the current record's "profile_pic" value
 * @method UserProfile setGenderId()    Sets the current record's "gender_id" value
 * @method UserProfile setCity()        Sets the current record's "city" value
 * @method UserProfile setCountry()     Sets the current record's "country" value
 * @method UserProfile setBirthday()    Sets the current record's "birthday" value
 * @method UserProfile setIsPrivate()   Sets the current record's "is_private" value
 * @method UserProfile setSfGuardUser() Sets the current record's "sfGuardUser" value
 * @method UserProfile setGender()      Sets the current record's "Gender" value
 * 
 * @package    Yuoweb
 * @subpackage model
 * @author     Shadley Wentzel
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUserProfile extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user_profile');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('sfuser_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('mobile_no', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('profile_pic', 'string', 255, array(
             'type' => 'string',
             'default' => 'default_profile_pic.gif',
             'length' => 255,
             ));
        $this->hasColumn('gender_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('city', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('country', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('birthday', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
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
             'local' => 'sfuser_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Gender', array(
             'local' => 'gender_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $searchable0 = new Doctrine_Template_Searchable(array(
             'fields' => 
             array(
              0 => 'sfuser_id',
              1 => 'mobile_no',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($searchable0);
    }
}