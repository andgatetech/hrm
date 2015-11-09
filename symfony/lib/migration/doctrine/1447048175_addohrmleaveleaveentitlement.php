<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addohrmleaveleaveentitlement extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('ohrm_leave_leave_entitlement', array(
             'id' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => true,
              'length' => 4,
             ),
             'leave_id' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
              'length' => 4,
             ),
             'entitlement_id' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => true,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
              'length' => 4,
             ),
             'length_days' => 
             array(
              'type' => 'decimal',
              'fixed' => 0,
              'unsigned' => true,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
              'length' => 4,
              'scale' => '2',
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
        $this->dropTable('ohrm_leave_leave_entitlement');
    }
}