<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addohrmworkflowstatemachine extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('ohrm_workflow_state_machine', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'length' => 8,
             ),
             'workflow' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 255,
             ),
             'state' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 255,
             ),
             'role' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 255,
             ),
             'action' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 255,
             ),
             'resulting_state' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 255,
              'alias' => 'resultingState',
             ),
             'roles_to_notify' => 
             array(
              'type' => 'clob',
              'notnull' => false,
              'length' => NULL,
             ),
             'priority' => 
             array(
              'type' => 'int',
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
        $this->dropTable('ohrm_workflow_state_machine');
    }
}