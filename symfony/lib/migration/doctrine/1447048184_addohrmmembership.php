<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addohrmmembership extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('ohrm_membership', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'autoincrement' => true,
              'length' => 8,
             ),
             'name' => 
             array(
              'type' => 'string',
              'length' => 100,
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
        $this->dropTable('ohrm_membership');
    }
}