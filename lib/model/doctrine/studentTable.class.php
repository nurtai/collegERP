<?php

/**
 * studentTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class studentTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object studentTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('student');
    }
}