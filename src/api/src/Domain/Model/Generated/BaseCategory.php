<?php
/**
 * This file has been automatically generated by TDBM.
 *
 * DO NOT edit this file, as it might be overwritten.
 * If you need to perform changes, edit the Category class instead!
 */

declare(strict_types=1);

namespace App\Domain\Model\Generated;

use App\Domain\Model\Item;
use TheCodingMachine\TDBM\AbstractTDBMObject;
use TheCodingMachine\TDBM\ResultIterator;
use TheCodingMachine\TDBM\AlterableResultIterator;
use Ramsey\Uuid\Uuid;
use JsonSerializable;
use TheCodingMachine\TDBM\Schema\ForeignKeys;
use TheCodingMachine\GraphQLite\Annotations\Field as GraphqlField;

/**
 * The BaseCategory class maps the 'categories' table in database.
 */
abstract class BaseCategory extends \TheCodingMachine\TDBM\AbstractTDBMObject implements JsonSerializable
{

    /**
     * @var \TheCodingMachine\TDBM\Schema\ForeignKeys
     */
    private static $foreignKeys = null;

    /**
     * The constructor takes all compulsory arguments.
     *
     * @param string $label
     */
    public function __construct(string $label)
    {
        parent::__construct();
        $this->setLabel($label);
    }

    /**
     * The getter for the "id" column.
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->get('id', 'categories');
    }

    /**
     * The setter for the "id" column.
     *
     * @param int|null $id
     */
    public function setId(?int $id) : void
    {
        $this->set('id', $id, 'categories');
    }

    /**
     * The getter for the "label" column.
     *
     * @return string
     */
    public function getLabel() : string
    {
        return $this->get('label', 'categories');
    }

    /**
     * The setter for the "label" column.
     *
     * @param string $label
     */
    public function setLabel(string $label) : void
    {
        $this->set('label', $label, 'categories');
    }

    /**
     * Returns the list of Item pointing to this bean via the category_id column.
     *
     * @return Item[]|\TheCodingMachine\TDBM\AlterableResultIterator
     */
    public function getItems() : \TheCodingMachine\TDBM\AlterableResultIterator
    {
        return $this->retrieveManyToOneRelationshipsStorage('items', 'from__category_id__to__table__categories__columns__id', ['items.category_id' => $this->get('id', 'categories')]);
    }

    /**
     * Internal method used to retrieve the list of foreign keys attached to this bean.
     */
    protected static function getForeignKeys(string $tableName) : \TheCodingMachine\TDBM\Schema\ForeignKeys
    {
        if ($tableName === 'categories') {
            if (self::$foreignKeys === null) {
                self::$foreignKeys = new ForeignKeys([

                ]);
            }
            return self::$foreignKeys;
        }
        return parent::getForeignKeys($tableName);
    }

    /**
     * Serializes the object for JSON encoding.
     *
     * @param bool $stopRecursion Parameter used internally by TDBM to stop embedded
     * objects from embedding other objects.
     * @return array
     */
    public function jsonSerialize(bool $stopRecursion = false)
    {
        $array = [];
        $array['id'] = $this->getId();
        $array['label'] = $this->getLabel();
        return $array;
    }

    /**
     * Returns an array of used tables by this bean (from parent to child
     * relationship).
     *
     * @return string[]
     */
    public function getUsedTables() : array
    {
        return [ 'categories' ];
    }

    public function __clone()
    {
        parent::__clone();
    }
}