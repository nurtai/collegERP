<?php

/**
 * Baseteacher
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $student_code
 * @property integer $user_id
 * @property string $thumb
 * @property Doctrine_Collection $teacher_fields
 * 
 * @method string              getStudentCode()    Returns the current record's "student_code" value
 * @method integer             getUserId()         Returns the current record's "user_id" value
 * @method string              getThumb()          Returns the current record's "thumb" value
 * @method Doctrine_Collection getTeacherFields()  Returns the current record's "teacher_fields" collection
 * @method teacher             setStudentCode()    Sets the current record's "student_code" value
 * @method teacher             setUserId()         Sets the current record's "user_id" value
 * @method teacher             setThumb()          Sets the current record's "thumb" value
 * @method teacher             setTeacherFields()  Sets the current record's "teacher_fields" collection
 * 
 * @package    ubeo
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseteacher extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('teacher');
        $this->hasColumn('student_code', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('thumb', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('teacher_fields', array(
             'local' => 'id',
             'foreign' => 'teacher_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}