<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addohrmadvancedreport extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('ohrm_advanced_report', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'length' => 8,
             ),
             'name' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 100,
             ),
             'definition' => 
             array(
              'type' => 'clob',
              'notnull' => true,
              'length' => NULL,
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
        $this->dropTable('ohrm_advanced_report');
    }
}