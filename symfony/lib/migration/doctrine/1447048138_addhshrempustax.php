<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addhshrempustax extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('hs_hr_emp_us_tax', array(
             'emp_number' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'length' => 4,
              'alias' => 'empNumber',
             ),
             'tax_federal_status' => 
             array(
              'type' => 'string',
              'default' => '',
              'length' => 30,
              'alias' => 'federalStatus',
             ),
             'tax_federal_exceptions' => 
             array(
              'type' => 'integer',
              'default' => '0',
              'length' => 4,
              'alias' => 'federalExemptions',
             ),
             'tax_state' => 
             array(
              'type' => 'string',
              'default' => '',
              'length' => 30,
              'alias' => 'state',
             ),
             'tax_state_status' => 
             array(
              'type' => 'string',
              'default' => '',
              'length' => 30,
              'alias' => 'stateStatus',
             ),
             'tax_state_exceptions' => 
             array(
              'type' => 'integer',
              'default' => '0',
              'length' => 4,
              'alias' => 'stateExemptions',
             ),
             'tax_unemp_state' => 
             array(
              'type' => 'string',
              'default' => '',
              'length' => 30,
              'alias' => 'unemploymentState',
             ),
             'tax_work_state' => 
             array(
              'type' => 'string',
              'default' => '',
              'length' => 30,
              'alias' => 'workState',
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'emp_number',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('hs_hr_emp_us_tax');
    }
}