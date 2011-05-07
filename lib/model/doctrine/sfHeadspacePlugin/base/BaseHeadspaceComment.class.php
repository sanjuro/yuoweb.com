<?php

/**
 * BaseHeadspaceComment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $post_id
 * @property integer $network_id
 * @property integer $networkuser_id
 * @property string $body
 * @property string $html_body
 * @property integer $status
 * @property HeadspacePost $HeadspacePost
 * @property Network $Network
 * @property NetworkUser $NetworkUser
 * 
 * @method integer          getId()             Returns the current record's "id" value
 * @method integer          getPostId()         Returns the current record's "post_id" value
 * @method integer          getNetworkId()      Returns the current record's "network_id" value
 * @method integer          getNetworkuserId()  Returns the current record's "networkuser_id" value
 * @method string           getBody()           Returns the current record's "body" value
 * @method string           getHtmlBody()       Returns the current record's "html_body" value
 * @method integer          getStatus()         Returns the current record's "status" value
 * @method HeadspacePost    getHeadspacePost()  Returns the current record's "HeadspacePost" value
 * @method Network          getNetwork()        Returns the current record's "Network" value
 * @method NetworkUser      getNetworkUser()    Returns the current record's "NetworkUser" value
 * @method HeadspaceComment setId()             Sets the current record's "id" value
 * @method HeadspaceComment setPostId()         Sets the current record's "post_id" value
 * @method HeadspaceComment setNetworkId()      Sets the current record's "network_id" value
 * @method HeadspaceComment setNetworkuserId()  Sets the current record's "networkuser_id" value
 * @method HeadspaceComment setBody()           Sets the current record's "body" value
 * @method HeadspaceComment setHtmlBody()       Sets the current record's "html_body" value
 * @method HeadspaceComment setStatus()         Sets the current record's "status" value
 * @method HeadspaceComment setHeadspacePost()  Sets the current record's "HeadspacePost" value
 * @method HeadspaceComment setNetwork()        Sets the current record's "Network" value
 * @method HeadspaceComment setNetworkUser()    Sets the current record's "NetworkUser" value
 * 
 * @package    Yuoweb
 * @subpackage model
 * @author     Shadley Wentzel
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHeadspaceComment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('headspace_comment');
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
        $this->hasColumn('body', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('html_body', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('status', 'integer', null, array(
             'type' => 'integer',
             'default' => 1,
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
              0 => 'post_id',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($searchable0);
    }
}