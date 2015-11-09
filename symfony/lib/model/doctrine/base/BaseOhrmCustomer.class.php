<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmCustomer', 'doctrine');

/**
 * BaseOhrmCustomer
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $customer_id
 * @property string $name
 * @property string $description
 * @property integer $is_deleted
 * 
 * @method integer      getCustomerId()  Returns the current record's "customer_id" value
 * @method string       getName()        Returns the current record's "name" value
 * @method string       getDescription() Returns the current record's "description" value
 * @method integer      getIsDeleted()   Returns the current record's "is_deleted" value
 * @method OhrmCustomer setCustomerId()  Sets the current record's "customer_id" value
 * @method OhrmCustomer setName()        Sets the current record's "name" value
 * @method OhrmCustomer setDescription() Sets the current record's "description" value
 * @method OhrmCustomer setIsDeleted()   Sets the current record's "is_deleted" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmCustomer extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_customer');
        $this->hasColumn('customer_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('is_deleted', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}