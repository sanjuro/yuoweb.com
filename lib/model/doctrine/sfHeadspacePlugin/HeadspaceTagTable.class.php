<?php

/**
 * HeadspaceTagTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class HeadspaceTagTable extends PluginHeadspaceTagTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object HeadspaceTagTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('HeadspaceTag');
    }
}