<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Thana', 'doctrine');

/**
 * BaseThana
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $thana_code
 * @property string $thana_name
 * @property string $district_code
 * 
 * @method string getThanaCode()     Returns the current record's "thana_code" value
 * @method string getThanaName()     Returns the current record's "thana_name" value
 * @method string getDistrictCode()  Returns the current record's "district_code" value
 * @method Thana  setThanaCode()     Sets the current record's "thana_code" value
 * @method Thana  setThanaName()     Sets the current record's "thana_name" value
 * @method Thana  setDistrictCode()  Sets the current record's "district_code" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseThana extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_thana');
        $this->hasColumn('thana_code', 'string', 13, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 13,
             ));
        $this->hasColumn('thana_name', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('district_code', 'string', 13, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 13,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}