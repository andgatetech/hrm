<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addhshrempemergencycontacts extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('hs_hr_emp_emergency_contacts', array(
             'emp_number' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'length' => 4,
             ),
             'eec_seqno' => 
             array(
              'type' => 'decimal',
              'primary' => true,
              'length' => 2,
              'alias' => 'seqno',
             ),
             'eec_name' => 
             array(
              'type' => 'string',
              'default' => '',
              'length' => 100,
              'alias' => 'name',
             ),
             'eec_relationship' => 
             array(
              'type' => 'string',
              'default' => '',
              'length' => 100,
              'alias' => 'relationship',
             ),
             'eec_home_no' => 
             array(
              'type' => 'string',
              'default' => '',
              'length' => 100,
              'alias' => 'home_phone',
             ),
             'eec_mobile_no' => 
             array(
              'type' => 'string',
              'default' => '',
              'length' => 100,
              'alias' => 'mobile_phone',
             ),
             'eec_office_no' => 
             array(
              'type' => 'string',
              'default' => '',
              'length' => 100,
              'alias' => 'office_phone',
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'emp_number',
              1 => 'eec_seqno',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('hs_hr_emp_emergency_contacts');
    }
}