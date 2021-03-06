<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addohrmselectedcompositedisplayfield extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('ohrm_selected_composite_display_field', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'length' => 8,
             ),
             'composite_display_field_id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'length' => 8,
              'alias' => 'compositeDisplayFieldId',
             ),
             'report_id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'length' => 8,
              'alias' => 'reportId',
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
              1 => 'composite_display_field_id',
              2 => 'report_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('ohrm_selected_composite_display_field');
    }
}