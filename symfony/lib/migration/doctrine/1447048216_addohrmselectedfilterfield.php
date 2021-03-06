<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addohrmselectedfilterfield extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('ohrm_selected_filter_field', array(
             'report_id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'length' => 8,
              'alias' => 'reportId',
             ),
             'filter_field_id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'length' => 8,
              'alias' => 'filterFieldId',
             ),
             'filter_field_order' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 8,
              'alias' => 'filterFieldOrder',
             ),
             'value1' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'value2' => 
             array(
              'type' => 'string',
              'length' => 255,
             ),
             'where_condition' => 
             array(
              'type' => 'string',
              'length' => 255,
              'alias' => 'whereCondition',
             ),
             'type' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 255,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'report_id',
              1 => 'filter_field_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('ohrm_selected_filter_field');
    }
}