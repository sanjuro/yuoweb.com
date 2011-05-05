<?php

/**
 * BaseHeadspaceTag
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $post_id
 * @property integer $network_id
 * @property integer $networkuser_id
 * @property string $tag
 * @property HeadspacePost $HeadspacePost
 * @property Network $Network
 * @property NetworkUser $NetworkUser
 * 
 * @method integer       getId()             Returns the current record's "id" value
 * @method integer       getPostId()         Returns the current record's "post_id" value
 * @method integer       getNetworkId()      Returns the current record's "network_id" value
 * @method integer       getNetworkuserId()  Returns the current record's "networkuser_id" value
 * @method string        getTag()            Returns the current record's "tag" value
 * @method HeadspacePost getHeadspacePost()  Returns the current record's "HeadspacePost" value
 * @method Network       getNetwork()        Returns the current record's "Network" value
 * @method NetworkUser   getNetworkUser()    Returns the current record's "NetworkUser" value
 * @method HeadspaceTag  setId()             Sets the current record's "id" value
 * @method HeadspaceTag  setPostId()         Sets the current record's "post_id" value
 * @method HeadspaceTag  setNetworkId()      Sets the current record's "network_id" value
 * @method HeadspaceTag  setNetworkuserId()  Sets the current record's "networkuser_id" value
 * @method HeadspaceTag  setTag()            Sets the current record's "tag" value
 * @method HeadspaceTag  setHeadspacePost()  Sets the current record's "HeadspacePost" value
 * @method HeadspaceTag  setNetwork()        Sets the current record's "Network" value
 * @method HeadspaceTag  setNetworkUser()    Sets the current record's "NetworkUser" value
 * 
 * @package    Yuoweb
 * @subpackage model
 * @author     Shadley Wentzel
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHeadspaceTag extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('headspace_tag');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('post_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('network_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('networkuser_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('tag', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('HeadspacePost', array(
             'local' => 'post_id',
             'foreign' => 'id'));

        $this->hasOne('Network', array(
             'local' => 'network_id',
             'foreign' => 'id'));

        $this->hasOne('NetworkUser', array(
             'local' => 'networkuser_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $searchable0 = new Doctrine_Template_Searchable(array(
             'fields' => 
             array(
              0 => 'id',
              1 => 'tag',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($searchable0);
    }
}