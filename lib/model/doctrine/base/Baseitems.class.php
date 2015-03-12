<?php

/**
 * Baseitems
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $uuid
 * @property string $name
 * @property string $description
 * @property string $shopable
 * @property integer $price
 * @property boolean $unique_item
 * @property string $party_id
 * @property timestamp $creation
 * 
 * @method integer   getId()          Returns the current record's "id" value
 * @method string    getUuid()        Returns the current record's "uuid" value
 * @method string    getName()        Returns the current record's "name" value
 * @method string    getDescription() Returns the current record's "description" value
 * @method string    getShopable()    Returns the current record's "shopable" value
 * @method integer   getPrice()       Returns the current record's "price" value
 * @method boolean   getUniqueItem()  Returns the current record's "unique_item" value
 * @method string    getPartyId()     Returns the current record's "party_id" value
 * @method timestamp getCreation()    Returns the current record's "creation" value
 * @method items     setId()          Sets the current record's "id" value
 * @method items     setUuid()        Sets the current record's "uuid" value
 * @method items     setName()        Sets the current record's "name" value
 * @method items     setDescription() Sets the current record's "description" value
 * @method items     setShopable()    Sets the current record's "shopable" value
 * @method items     setPrice()       Sets the current record's "price" value
 * @method items     setUniqueItem()  Sets the current record's "unique_item" value
 * @method items     setPartyId()     Sets the current record's "party_id" value
 * @method items     setCreation()    Sets the current record's "creation" value
 * 
 * @package    Family-Quest
 * @subpackage model
 * @author     Ralph Dittrich kizetsu.rd@googlemail.com
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseitems extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('items');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'unique' => true,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('uuid', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => false,
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'unique' => false,
             'length' => 255,
             ));
        $this->hasColumn('shopable', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'unique' => false,
             'length' => 255,
             ));
        $this->hasColumn('price', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             'unique' => false,
             ));
        $this->hasColumn('unique_item', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('party_id', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'unique' => false,
             'length' => 255,
             ));
        $this->hasColumn('creation', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}