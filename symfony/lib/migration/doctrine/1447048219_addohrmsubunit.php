<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addohrmsubunit extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('ohrm_subunit', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'autoincrement' => true,
              'length' => 6,
             ),
             'name' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 100,
             ),
             'unit_id' => 
             array(
              'type' => 'string',
              'length' => 100,
              'alias' => 'unitId',
             ),
             'description' => 
             array(
              'type' => 'string',
              'length' => 400,
             ),
             'lft' => 
             array(
              'type' => 'integer',
              'length' => 4,
             ),
             'rgt' => 
             array(
              'type' => 'integer',
              'length' => 4,
             ),
             'level' => 
             array(
              'type' => 'integer',
              'length' => 2,
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
        $this->dropTable('ohrm_subunit');
    }
}