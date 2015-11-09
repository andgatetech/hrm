<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addohrmuserselectionrule extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('ohrm_user_selection_rule', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'autoincrement' => true,
              'length' => 4,
             ),
             'name' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 255,
             ),
             'description' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 255,
             ),
             'implementation_class' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 255,
             ),
             'rule_xml_data' => 
             array(
              'type' => 'string',
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
        $this->dropTable('ohrm_user_selection_rule');
    }
}