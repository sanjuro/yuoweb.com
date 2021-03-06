<?php

/**
 * BaseWebuyProduct
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $category_id
 * @property integer $supplier_id
 * @property string $title
 * @property string $description
 * @property WebuyCategory $WebuyCategory
 * @property WebuySupplier $WebuySupplier
 * @property Doctrine_Collection $WebuyDeal
 * 
 * @method integer             getId()            Returns the current record's "id" value
 * @method integer             getCategoryId()    Returns the current record's "category_id" value
 * @method integer             getSupplierId()    Returns the current record's "supplier_id" value
 * @method string              getTitle()         Returns the current record's "title" value
 * @method string              getDescription()   Returns the current record's "description" value
 * @method WebuyCategory       getWebuyCategory() Returns the current record's "WebuyCategory" value
 * @method WebuySupplier       getWebuySupplier() Returns the current record's "WebuySupplier" value
 * @method Doctrine_Collection getWebuyDeal()     Returns the current record's "WebuyDeal" collection
 * @method WebuyProduct        setId()            Sets the current record's "id" value
 * @method WebuyProduct        setCategoryId()    Sets the current record's "category_id" value
 * @method WebuyProduct        setSupplierId()    Sets the current record's "supplier_id" value
 * @method WebuyProduct        setTitle()         Sets the current record's "title" value
 * @method WebuyProduct        setDescription()   Sets the current record's "description" value
 * @method WebuyProduct        setWebuyCategory() Sets the current record's "WebuyCategory" value
 * @method WebuyProduct        setWebuySupplier() Sets the current record's "WebuySupplier" value
 * @method WebuyProduct        setWebuyDeal()     Sets the current record's "WebuyDeal" collection
 * 
 * @package    Yuoweb
 * @subpackage model
 * @author     Shadley Wentzel
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseWebuyProduct extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('webuy_product');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('category_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('supplier_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('title', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('WebuyCategory', array(
             'local' => 'category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('WebuySupplier', array(
             'local' => 'supplier_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('WebuyDeal', array(
             'local' => 'id',
             'foreign' => 'product_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $searchable0 = new Doctrine_Template_Searchable(array(
             'fields' => 
             array(
              0 => 'title',
              1 => 'description',
             ),
             ));
        $countcache0 = new CountCache(array(
             'relations' => 
             array(
              'WebuySupplier' => 
              array(
              'columnName' => 'product_count',
              'foreignAlias' => 'WebuyProduct',
              ),
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($searchable0);
        $this->actAs($countcache0);
    }
}