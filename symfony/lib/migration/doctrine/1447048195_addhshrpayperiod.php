<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addhshrpayperiod extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('hs_hr_payperiod', array(
             'payperiod_code' => 
             array(
              'type' => 'string',
              'primary' => true,
              'length' => 13,
              'alias' => 'code',
             ),
             'payperiod_name' => 
             array(
              'type' => 'string',
              'length' => 100,
              'alias' => 'name',
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'payperiod_code',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('hs_hr_payperiod');
    }
}