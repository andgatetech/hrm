<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmUpgradeHistory', 'doctrine');

/**
 * BaseOhrmUpgradeHistory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $start_version
 * @property string $end_version
 * @property integer $start_increment
 * @property integer $end_increment
 * @property timestamp $upgraded_date
 * 
 * @method integer            getId()              Returns the current record's "id" value
 * @method string             getStartVersion()    Returns the current record's "start_version" value
 * @method string             getEndVersion()      Returns the current record's "end_version" value
 * @method integer            getStartIncrement()  Returns the current record's "start_increment" value
 * @method integer            getEndIncrement()    Returns the current record's "end_increment" value
 * @method timestamp          getUpgradedDate()    Returns the current record's "upgraded_date" value
 * @method OhrmUpgradeHistory setId()              Sets the current record's "id" value
 * @method OhrmUpgradeHistory setStartVersion()    Sets the current record's "start_version" value
 * @method OhrmUpgradeHistory setEndVersion()      Sets the current record's "end_version" value
 * @method OhrmUpgradeHistory setStartIncrement()  Sets the current record's "start_increment" value
 * @method OhrmUpgradeHistory setEndIncrement()    Sets the current record's "end_increment" value
 * @method OhrmUpgradeHistory setUpgradedDate()    Sets the current record's "upgraded_date" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmUpgradeHistory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_upgrade_history');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('start_version', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('end_version', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('start_increment', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('end_increment', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('upgraded_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}