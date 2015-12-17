<?php

/**
 * BaseDivision
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $division_name
 * @property string $division_code
 * @property string $cou_code
 * @property Doctrine_Collection $country
 * @property Doctrine_Collection $District
 * 
 * @method integer             getId()            Returns the current record's "id" value
 * @method string              getDivisionName()  Returns the current record's "division_name" value
 * @method string              getDivisionCode()  Returns the current record's "division_code" value
 * @method string              getCouCode()       Returns the current record's "cou_code" value
 * @method Doctrine_Collection getCountry()       Returns the current record's "country" collection
 * @method Doctrine_Collection getDistrict()      Returns the current record's "District" collection
 * @method Division            setId()            Sets the current record's "id" value
 * @method Division            setDivisionName()  Sets the current record's "division_name" value
 * @method Division            setDivisionCode()  Sets the current record's "division_code" value
 * @method Division            setCouCode()       Sets the current record's "cou_code" value
 * @method Division            setCountry()       Sets the current record's "country" collection
 * @method Division            setDistrict()      Sets the current record's "District" collection
 * 
 * @package    orangehrm
 * @subpackage model\admin\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDivision extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_division');
        $this->hasColumn('id', 'integer', 11, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 11,
             ));
        $this->hasColumn('division_name', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 40,
             ));
        $this->hasColumn('division_code', 'string', 3, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('cou_code', 'string', 2, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'default' => 'BD',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 2,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Country as country', array(
             'local' => 'country_code',
             'foreign' => 'cou_code'));

        $this->hasMany('District', array(
             'local' => 'division_code',
             'foreign' => 'division_code'));
    }
}