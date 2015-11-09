<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addohrmdatagroup extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('ohrm_data_group', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'autoincrement' => true,
              'length' => 8,
             ),
             'name' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'description' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'can_read' => 
             array(
              'type' => 'integer',
              'length' => 1,
              'alias' => 'canRead',
             ),
             'can_create' => 
             array(
              'type' => 'integer',
              'length' => 1,
              'alias' => 'canCreate',
             ),
             'can_update' => 
             array(
              'type' => 'integer',
              'length' => 1,
              'alias' => 'canUpdate',
             ),
             'can_delete' => 
             array(
              'type' => 'integer',
              'length' => 1,
              'alias' => 'canDelete',
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('ohrm_data_group');
    }
}