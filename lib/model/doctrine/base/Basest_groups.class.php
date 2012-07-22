<?php

/**
 * Basest_groups
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $short_name
 * @property string $name
 * @property Doctrine_Collection $student_groups
 * 
 * @method string              getShortName()      Returns the current record's "short_name" value
 * @method string              getName()           Returns the current record's "name" value
 * @method Doctrine_Collection getStudentGroups()  Returns the current record's "student_groups" collection
 * @method st_groups           setShortName()      Sets the current record's "short_name" value
 * @method st_groups           setName()           Sets the current record's "name" value
 * @method st_groups           setStudentGroups()  Sets the current record's "student_groups" collection
 * 
 * @package    ubeo
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basest_groups extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('st_groups');
        $this->hasColumn('short_name', 'string', 10, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 10,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('student_groups', array(
             'local' => 'id',
             'foreign' => 'groups_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}