<?php

/**
 * DistrictTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DistrictTable extends PluginDistrictTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object DistrictTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('District');
    }
}