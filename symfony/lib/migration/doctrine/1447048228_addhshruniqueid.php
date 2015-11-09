<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addhshruniqueid extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('hs_hr_unique_id', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'autoincrement' => true,
              'length' => 4,
             ),
             'last_id' => 
             array(
              'type' => 'integer',
              'unsigned' => 1,
              'notnull' => true,
              'length' => 4,
             ),
             'table_name' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 50,
              'alias' => 'dbTable',
             ),
             'field_name' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 50,
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
        $this->dropTable('hs_hr_unique_id');
    }
}