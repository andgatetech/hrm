<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addhshrthana extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('hs_hr_thana', array(
             'thana_code' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 13,
             ),
             'thana_name' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
              'length' => 50,
             ),
             'district_code' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
              'length' => 13,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'thana_code',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('hs_hr_thana');
    }
}