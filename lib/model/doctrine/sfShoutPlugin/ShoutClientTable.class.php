<?php

/**
 * ShoutClientTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ShoutClientTable extends PluginShoutClientTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object ShoutClientTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ShoutClient');
    }
}