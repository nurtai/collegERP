<?php

/**
 * Baselesson_form_fields
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $field_id
 * @property fields $fields
 * 
 * @method integer            getFieldId()  Returns the current record's "field_id" value
 * @method fields             getFields()   Returns the current record's "fields" value
 * @method lesson_form_fields setFieldId()  Sets the current record's "field_id" value
 * @method lesson_form_fields setFields()   Sets the current record's "fields" value
 * 
 * @package    ubeo
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baselesson_form_fields extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('lesson_form_fields');
        $this->hasColumn('field_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('fields', array(
             'local' => 'field_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}