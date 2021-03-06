<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addohrmworkweek extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('ohrm_work_week', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'length' => 4,
             ),
             'operational_country_id' => 
             array(
              'type' => 'integer',
              'notnull' => false,
              'length' => 4,
             ),
             'mon' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 4,
             ),
             'tue' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 4,
             ),
             'wed' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 4,
             ),
             'thu' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 4,
             ),
             'fri' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 4,
             ),
             'sat' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 4,
             ),
             'sun' => 
             array(
              'type' => 'integer',
              'notnull' => true,
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
        $this->dropTable('ohrm_work_week');
    }
}