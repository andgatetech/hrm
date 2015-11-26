<?php

/**
 * BaseDivision
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $division_name
 * @property string $division_code
 * @property string $cou_code
 * @property Country $country
 * @property Doctrine_Collection $District
 * 
 * @method string              getDivisionName()  Returns the current record's "division_name" value
 * @method string              getDivisionCode()  Returns the current record's "division_code" value
 * @method string              getCouCode()       Returns the current record's "cou_code" value
 * @method Country             getCountry()       Returns the current record's "country" value
 * @method Doctrine_Collection getDistrict()      Returns the current record's "District" collection
 * @method Division            setDivisionName()  Sets the current record's "division_name" value
 * @method Division            setDivisionCode()  Sets the current record's "division_code" value
 * @method Division            setCouCode()       Sets the current record's "cou_code" value
 * @method Division            setCountry()       Sets the current record's "country" value
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
        $this->hasColumn('division_code', 'string', 2, array(
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
        $this->hasOne('Country as country', array(
             'local' => 'country_code',
             'foreign' => 'cou_code'));

        $this->hasMany('District', array(
             'local' => 'division_code',
             'foreign' => 'division_code'));
    }
}