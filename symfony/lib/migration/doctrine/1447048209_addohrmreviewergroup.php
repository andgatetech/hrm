<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addohrmreviewergroup extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('ohrm_reviewer_group', array(
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
              'length' => 20,
             ),
             'piority' => 
             array(
              'type' => 'integer',
              'length' => 6,
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
        $this->dropTable('ohrm_reviewer_group');
    }
}