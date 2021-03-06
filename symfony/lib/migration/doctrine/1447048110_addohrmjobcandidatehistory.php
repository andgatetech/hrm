<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addohrmjobcandidatehistory extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('ohrm_job_candidate_history', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'length' => 13,
             ),
             'candidate_id' => 
             array(
              'type' => 'integer',
              'length' => 13,
              'alias' => 'candidateId',
             ),
             'vacancy_id' => 
             array(
              'type' => 'integer',
              'length' => 13,
              'alias' => 'vacancyId',
             ),
             'candidate_vacancy_name' => 
             array(
              'type' => 'string',
              'length' => 255,
              'alias' => 'candidateVacancyName',
             ),
             'interview_id' => 
             array(
              'type' => 'integer',
              'length' => 13,
              'alias' => 'interviewId',
             ),
             'action' => 
             array(
              'type' => 'integer',
              'length' => 4,
             ),
             'performed_by' => 
             array(
              'type' => 'integer',
              'length' => 13,
              'alias' => 'performedBy',
             ),
             'performed_date' => 
             array(
              'type' => 'datetime',
              'length' => NULL,
              'alias' => 'performedDate',
             ),
             'note' => 
             array(
              'type' => 'string',
              'length' => 2147483647,
             ),
             'interviewers' => 
             array(
              'type' => 'string',
              'length' => 255,
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
        $this->dropTable('ohrm_job_candidate_history');
    }
}