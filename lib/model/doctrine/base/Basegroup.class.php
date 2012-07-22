<?php

/**
 * Basegroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $short_name
 * @property string $name
 * @property Doctrine_Collection $student_group
 * 
 * @method string              getShortName()     Returns the current record's "short_name" value
 * @method string              getName()          Returns the current record's "name" value
 * @method Doctrine_Collection getStudentGroup()  Returns the current record's "student_group" collection
 * @method group               setShortName()     Sets the current record's "short_name" value
 * @method group               setName()          Sets the current record's "name" value
 * @method group               setStudentGroup()  Sets the current record's "student_group" collection
 * 
 * @package    ubeo
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basegroup extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('group');
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
        $this->hasMany('student_group', array(
             'local' => 'id',
             'foreign' => 'group_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}