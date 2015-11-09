<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addohrmleaveperiodhistory extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('ohrm_leave_period_history', array(
             'id' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => true,
              'length' => 4,
             ),
             'leave_period_start_month' => 
             array(
              'type' => 'integer',
              'length' => 7,
             ),
             'leave_period_start_day' => 
             array(
              'type' => 'integer',
              'length' => 7,
             ),
             'created_at' => 
             array(
              'type' => 'date',
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
        $this->dropTable('ohrm_leave_period_history');
    }
}