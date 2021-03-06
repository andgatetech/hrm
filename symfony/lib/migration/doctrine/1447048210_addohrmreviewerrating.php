<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addohrmreviewerrating extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('ohrm_reviewer_rating', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => true,
              'autoincrement' => true,
              'length' => 6,
             ),
             'rating' => 
             array(
              'type' => 'decimal',
              'notnull' => false,
              'length' => 18,
             ),
             'kpi_id' => 
             array(
              'type' => 'integer',
              'length' => 11,
              'alias' => 'kpiId',
             ),
             'review_id' => 
             array(
              'type' => 'integer',
              'length' => 11,
              'alias' => 'reviewId',
             ),
             'reviewer_id' => 
             array(
              'type' => 'integer',
              'length' => 11,
              'alias' => 'reviewerId',
             ),
             'comment' => 
             array(
              'type' => 'clob',
              'length' => 65532,
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
        $this->dropTable('ohrm_reviewer_rating');
    }
}