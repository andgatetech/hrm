<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmLeaveType', 'doctrine');

/**
 * BaseOhrmLeaveType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property integer $deleted
 * @property integer $exclude_in_reports_if_no_entitlement
 * @property integer $operational_country_id
 * @property OhrmOperationalCountry $OhrmOperationalCountry
 * @property Doctrine_Collection $OhrmLeave
 * @property Doctrine_Collection $OhrmLeaveAdjustment
 * @property Doctrine_Collection $OhrmLeaveEntitlement
 * @property Doctrine_Collection $OhrmLeaveRequest
 * 
 * @method integer                getId()                                   Returns the current record's "id" value
 * @method string                 getName()                                 Returns the current record's "name" value
 * @method integer                getDeleted()                              Returns the current record's "deleted" value
 * @method integer                getExcludeInReportsIfNoEntitlement()      Returns the current record's "exclude_in_reports_if_no_entitlement" value
 * @method integer                getOperationalCountryId()                 Returns the current record's "operational_country_id" value
 * @method OhrmOperationalCountry getOhrmOperationalCountry()               Returns the current record's "OhrmOperationalCountry" value
 * @method Doctrine_Collection    getOhrmLeave()                            Returns the current record's "OhrmLeave" collection
 * @method Doctrine_Collection    getOhrmLeaveAdjustment()                  Returns the current record's "OhrmLeaveAdjustment" collection
 * @method Doctrine_Collection    getOhrmLeaveEntitlement()                 Returns the current record's "OhrmLeaveEntitlement" collection
 * @method Doctrine_Collection    getOhrmLeaveRequest()                     Returns the current record's "OhrmLeaveRequest" collection
 * @method OhrmLeaveType          setId()                                   Sets the current record's "id" value
 * @method OhrmLeaveType          setName()                                 Sets the current record's "name" value
 * @method OhrmLeaveType          setDeleted()                              Sets the current record's "deleted" value
 * @method OhrmLeaveType          setExcludeInReportsIfNoEntitlement()      Sets the current record's "exclude_in_reports_if_no_entitlement" value
 * @method OhrmLeaveType          setOperationalCountryId()                 Sets the current record's "operational_country_id" value
 * @method OhrmLeaveType          setOhrmOperationalCountry()               Sets the current record's "OhrmOperationalCountry" value
 * @method OhrmLeaveType          setOhrmLeave()                            Sets the current record's "OhrmLeave" collection
 * @method OhrmLeaveType          setOhrmLeaveAdjustment()                  Sets the current record's "OhrmLeaveAdjustment" collection
 * @method OhrmLeaveType          setOhrmLeaveEntitlement()                 Sets the current record's "OhrmLeaveEntitlement" collection
 * @method OhrmLeaveType          setOhrmLeaveRequest()                     Sets the current record's "OhrmLeaveRequest" collection
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmLeaveType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_leave_type');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('deleted', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('exclude_in_reports_if_no_entitlement', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('operational_country_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('OhrmOperationalCountry', array(
             'local' => 'operational_country_id',
             'foreign' => 'id'));

        $this->hasMany('OhrmLeave', array(
             'local' => 'id',
             'foreign' => 'leave_type_id'));

        $this->hasMany('OhrmLeaveAdjustment', array(
             'local' => 'id',
             'foreign' => 'leave_type_id'));

        $this->hasMany('OhrmLeaveEntitlement', array(
             'local' => 'id',
             'foreign' => 'leave_type_id'));

        $this->hasMany('OhrmLeaveRequest', array(
             'local' => 'id',
             'foreign' => 'leave_type_id'));
    }
}