<?php

/**
 * SubjectTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class SubjectTable extends PluginSubjectTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object SubjectTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Subject');
    }
}