<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addohrmjobinterviewattachment extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('ohrm_job_interview_attachment', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'length' => 13,
             ),
             'interview_id' => 
             array(
              'type' => 'integer',
              'length' => 13,
              'alias' => 'interviewId',
             ),
             'file_name' => 
             array(
              'type' => 'string',
              'length' => 255,
              'alias' => 'fileName',
             ),
             'file_type' => 
             array(
              'type' => 'string',
              'length' => 255,
              'alias' => 'fileType',
             ),
             'file_size' => 
             array(
              'type' => 'integer',
              'length' => 30,
              'alias' => 'fileSize',
             ),
             'file_content' => 
             array(
              'type' => 'blob',
              'length' => 2147483647,
              'alias' => 'fileContent',
             ),
             'attachment_type' => 
             array(
              'type' => 'integer',
              'length' => 4,
              'alias' => 'attachmentType',
             ),
             'comment' => 
             array(
              'type' => '',
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
        $this->dropTable('ohrm_job_interview_attachment');
    }
}