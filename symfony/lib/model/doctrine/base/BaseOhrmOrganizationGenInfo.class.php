<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('OhrmOrganizationGenInfo', 'doctrine');

/**
 * BaseOhrmOrganizationGenInfo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $tax_id
 * @property string $registration_number
 * @property string $phone
 * @property string $fax
 * @property string $email
 * @property string $country
 * @property string $province
 * @property string $city
 * @property string $zip_code
 * @property string $street1
 * @property string $street2
 * @property string $note
 * 
 * @method integer                 getId()                  Returns the current record's "id" value
 * @method string                  getName()                Returns the current record's "name" value
 * @method string                  getTaxId()               Returns the current record's "tax_id" value
 * @method string                  getRegistrationNumber()  Returns the current record's "registration_number" value
 * @method string                  getPhone()               Returns the current record's "phone" value
 * @method string                  getFax()                 Returns the current record's "fax" value
 * @method string                  getEmail()               Returns the current record's "email" value
 * @method string                  getCountry()             Returns the current record's "country" value
 * @method string                  getProvince()            Returns the current record's "province" value
 * @method string                  getCity()                Returns the current record's "city" value
 * @method string                  getZipCode()             Returns the current record's "zip_code" value
 * @method string                  getStreet1()             Returns the current record's "street1" value
 * @method string                  getStreet2()             Returns the current record's "street2" value
 * @method string                  getNote()                Returns the current record's "note" value
 * @method OhrmOrganizationGenInfo setId()                  Sets the current record's "id" value
 * @method OhrmOrganizationGenInfo setName()                Sets the current record's "name" value
 * @method OhrmOrganizationGenInfo setTaxId()               Sets the current record's "tax_id" value
 * @method OhrmOrganizationGenInfo setRegistrationNumber()  Sets the current record's "registration_number" value
 * @method OhrmOrganizationGenInfo setPhone()               Sets the current record's "phone" value
 * @method OhrmOrganizationGenInfo setFax()                 Sets the current record's "fax" value
 * @method OhrmOrganizationGenInfo setEmail()               Sets the current record's "email" value
 * @method OhrmOrganizationGenInfo setCountry()             Sets the current record's "country" value
 * @method OhrmOrganizationGenInfo setProvince()            Sets the current record's "province" value
 * @method OhrmOrganizationGenInfo setCity()                Sets the current record's "city" value
 * @method OhrmOrganizationGenInfo setZipCode()             Sets the current record's "zip_code" value
 * @method OhrmOrganizationGenInfo setStreet1()             Sets the current record's "street1" value
 * @method OhrmOrganizationGenInfo setStreet2()             Sets the current record's "street2" value
 * @method OhrmOrganizationGenInfo setNote()                Sets the current record's "note" value
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOhrmOrganizationGenInfo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_organization_gen_info');
        $this->hasColumn('id', 'integer', 4, array(
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
        $this->hasColumn('tax_id', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('registration_number', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('phone', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('fax', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('email', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('country', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('province', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('city', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('zip_code', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('street1', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('street2', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('note', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}