<?php

/**
 * SpeakoutReplyTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class SpeakoutReplyTable extends PluginSpeakoutReplyTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object SpeakoutReplyTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('SpeakoutReply');
    }
}