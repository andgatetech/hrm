<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addhshrcurrencytype extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('hs_hr_currency_type', array(
             'code' => 
             array(
              'type' => 'integer',
              'default' => '0',
              'notnull' => true,
              'length' => 4,
             ),
             'currency_id' => 
             array(
              'type' => 'string',
              'fixed' => 1,
              'primary' => true,
              'length' => 3,
             ),
             'currency_name' => 
             array(
              'type' => 'string',
              'default' => '',
              'notnull' => true,
              'length' => 70,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'currency_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('hs_hr_currency_type');
    }
}