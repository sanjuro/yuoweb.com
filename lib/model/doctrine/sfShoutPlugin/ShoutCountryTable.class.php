<?php

/**
 * ShoutCountryTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ShoutCountryTable extends PluginShoutCountryTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object ShoutCountryTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ShoutCountry');
    }
}