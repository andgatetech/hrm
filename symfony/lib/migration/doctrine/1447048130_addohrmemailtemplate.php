<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addohrmemailtemplate extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('ohrm_email_template', array(
             'id' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => true,
              'length' => 4,
             ),
             'email_id' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'notnull' => true,
              'autoincrement' => false,
              'length' => 4,
             ),
             'locale' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
              'length' => 20,
             ),
             'performer_role' => 
             array(
              'type' => 'string',
              'notnull' => false,
              'length' => 50,
             ),
             'recipient_role' => 
             array(
              'type' => 'string',
              'notnull' => false,
              'length' => 50,
             ),
             'subject' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
              'length' => 255,
             ),
             'body' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
              'length' => NULL,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('ohrm_email_template');
    }
}