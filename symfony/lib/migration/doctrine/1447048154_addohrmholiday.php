<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addohrmholiday extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('ohrm_holiday', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'autoincrement' => true,
              'length' => 4,
             ),
             'recurring' => 
             array(
              'type' => 'integer',
              'default' => '0',
              'length' => 1,
             ),
             'description' => 
             array(
              'type' => 'string',
              'length' => 2147483647,
             ),
             'date' => 
             array(
              'type' => 'date',
              'length' => 25,
             ),
             'length' => 
             array(
              'type' => 'integer',
              'length' => 4,
             ),
             'operational_country_id' => 
             array(
              'type' => 'integer',
              'length' => 4,
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
        $this->dropTable('ohrm_holiday');
    }
}