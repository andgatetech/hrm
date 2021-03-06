<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addohrmdatagroupscreen extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('ohrm_data_group_screen', array(
             'id' => 
             array(
              'type' => 'integer',
              'autoincrement' => true,
              'primary' => true,
              'length' => 8,
             ),
             'data_group_id' => 
             array(
              'type' => 'integer',
              'length' => 8,
             ),
             'screen_id' => 
             array(
              'type' => 'integer',
              'length' => 8,
             ),
             'permission' => 
             array(
              'type' => 'integer',
              'length' => 8,
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
        $this->dropTable('ohrm_data_group_screen');
    }
}