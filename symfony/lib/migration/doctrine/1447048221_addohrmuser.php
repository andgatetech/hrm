<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addohrmuser extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('ohrm_user', array(
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
             'emp_number' => 
             array(
              'type' => 'integer',
              'length' => 8,
             ),
             'user_name' => 
             array(
              'type' => 'string',
              'length' => 40,
             ),
             'user_password' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'deleted' => 
             array(
              'type' => 'integer',
              'default' => '0',
              'length' => 1,
             ),
             'status' => 
             array(
              'type' => 'integer',
              'default' => '1',
              'length' => 1,
             ),
             'date_entered' => 
             array(
              'type' => 'timestamp',
              'length' => 25,
             ),
             'date_modified' => 
             array(
              'type' => 'timestamp',
              'length' => 25,
             ),
             'modified_user_id' => 
             array(
              'type' => 'integer',
              'length' => 8,
             ),
             'created_by' => 
             array(
              'type' => 'integer',
              'length' => 8,
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
        $this->dropTable('ohrm_user');
    }
}