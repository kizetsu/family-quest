<?php

/**
 * characterTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class characterTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object characterTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('character');
    }
}