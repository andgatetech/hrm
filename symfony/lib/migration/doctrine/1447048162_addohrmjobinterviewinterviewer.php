<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addohrmjobinterviewinterviewer extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('ohrm_job_interview_interviewer', array(
             'interview_id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'length' => 13,
              'alias' => 'interviewId',
             ),
             'interviewer_id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'length' => 13,
              'alias' => 'interviewerId',
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'interview_id',
              1 => 'interviewer_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('ohrm_job_interview_interviewer');
    }
}