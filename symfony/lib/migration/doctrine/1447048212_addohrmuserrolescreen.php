<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addohrmuserrolescreen extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('ohrm_user_role_screen', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'autoincrement' => true,
              'length' => 8,
             ),
             'user_role_id' => 
             array(
              'type' => 'integer',
              'length' => 8,
             ),
             'screen_id' => 
             array(
              'type' => 'integer',
              'length' => 8,
             ),
             'can_read' => 
             array(
              'type' => 'boolean',
              'default' => 0,
              'length' => 25,
             ),
             'can_create' => 
             array(
              'type' => 'boolean',
              'default' => 0,
              'length' => 25,
             ),
             'can_update' => 
             array(
              'type' => 'boolean',
              'default' => 0,
              'length' => 25,
             ),
             'can_delete' => 
             array(
              'type' => 'boolean',
              'default' => 0,
              'length' => 25,
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
        $this->dropTable('ohrm_user_role_screen');
    }
}