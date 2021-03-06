<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addhshremppicture extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('hs_hr_emp_picture', array(
             'emp_number' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'length' => 4,
             ),
             'epic_picture' => 
             array(
              'type' => 'blob',
              'length' => 2147483647,
              'alias' => 'picture',
             ),
             'epic_filename' => 
             array(
              'type' => 'string',
              'length' => 100,
              'alias' => 'filename',
             ),
             'epic_type' => 
             array(
              'type' => 'string',
              'length' => 50,
              'alias' => 'file_type',
             ),
             'epic_file_size' => 
             array(
              'type' => 'string',
              'length' => 20,
              'alias' => 'size',
             ),
             'epic_file_width' => 
             array(
              'type' => 'string',
              'length' => 20,
              'alias' => 'width',
             ),
             'epic_file_height' => 
             array(
              'type' => 'string',
              'length' => 20,
              'alias' => 'height',
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
        $this->dropTable('hs_hr_emp_picture');
    }
}