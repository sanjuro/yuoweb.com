<?php

/**
 * HeadspaceCommentTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class HeadspaceCommentTable extends PluginHeadspaceCommentTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object HeadspaceCommentTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('HeadspaceComment');
    }
}