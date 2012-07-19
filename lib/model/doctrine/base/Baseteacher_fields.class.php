<?php

/**
 * Baseteacher_fields
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $teacher_id
 * @property integer $field_id
 * @property object $value
 * @property teacher $teacher
 * @property fields $fields
 * 
 * @method integer        getTeacherId()  Returns the current record's "teacher_id" value
 * @method integer        getFieldId()    Returns the current record's "field_id" value
 * @method object         getValue()      Returns the current record's "value" value
 * @method teacher        getTeacher()    Returns the current record's "teacher" value
 * @method fields         getFields()     Returns the current record's "fields" value
 * @method teacher_fields setTeacherId()  Sets the current record's "teacher_id" value
 * @method teacher_fields setFieldId()    Sets the current record's "field_id" value
 * @method teacher_fields setValue()      Sets the current record's "value" value
 * @method teacher_fields setTeacher()    Sets the current record's "teacher" value
 * @method teacher_fields setFields()     Sets the current record's "fields" value
 * 
 * @package    ubeo
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseteacher_fields extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('teacher_fields');
        $this->hasColumn('teacher_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('field_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('value', 'object', null, array(
             'type' => 'object',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('teacher', array(
             'local' => 'teacher_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('fields', array(
             'local' => 'field_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}