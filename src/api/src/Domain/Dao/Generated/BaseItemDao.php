<?php
/**
 * This file has been automatically generated by TDBM.
 * DO NOT edit this file, as it might be overwritten.
 * If you need to perform changes, edit the ItemDao class instead!
 */

declare(strict_types=1);

namespace App\Domain\Dao\Generated;

use App\Domain\Model\Item;
use TheCodingMachine\TDBM\TDBMService;
use TheCodingMachine\TDBM\ResultIterator;
use TheCodingMachine\TDBM\TDBMException;

/**
 * The BaseItemDao class will maintain the persistence of Item class into the items
 * table.
 */
abstract class BaseItemDao
{

    /**
     * @var \TheCodingMachine\TDBM\TDBMService
     */
    public $tdbmService = null;

    /**
     * The default sort column.
     *
     * @var string|null
     */
    public $defaultSort = null;

    /**
     * The default sort direction.
     *
     * @var string
     */
    public $defaultDirection = 'asc';

    /**
     * Sets the TDBM service used by this DAO.
     */
    public function __construct(\TheCodingMachine\TDBM\TDBMService $tdbmService)
    {
        $this->tdbmService = $tdbmService;
    }

    /**
     * Persist the Item instance.
     *
     * @param Item $obj The bean to save.
     */
    public function save(\App\Domain\Model\Item $obj) : void
    {
        $this->tdbmService->save($obj);
    }

    /**
     * Get all Item records.
     */
    public function findAll() : \App\Domain\ResultIterator\ItemResultIterator
    {
        if ($this->defaultSort) {
            $orderBy = 'items.'.$this->defaultSort.' '.$this->defaultDirection;
        } else {
            $orderBy = null;
        }
        return $this->tdbmService->findObjects('items', null, [], $orderBy, [], null, null, \App\Domain\ResultIterator\ItemResultIterator::class);
    }

    /**
     * Get Item specified by its ID (its primary key).
     *
     * If the primary key does not exist, an exception is thrown.
     *
     * @param int $id
     * @param bool $lazyLoading If set to true, the object will not be loaded right away. Instead, it will be loaded when you first try to access a method of the object.
     * @return \App\Domain\Model\Item
     * @throws \TheCodingMachine\TDBM\TDBMException
     */
    public function getById(int $id, bool $lazyLoading = false) : \App\Domain\Model\Item
    {
        return $this->tdbmService->findObjectByPk('items', ['id' => $id], [], $lazyLoading);
    }

    /**
     * Get all Item records.
     *
     * @param \App\Domain\Model\Item $obj The object to delete
     * @param bool $cascade If true, it will delete all objects linked to $obj
     */
    public function delete(\App\Domain\Model\Item $obj, bool $cascade = false) : void
    {
        if ($cascade === true) {
            $this->tdbmService->deleteCascade($obj);
        } else {
            $this->tdbmService->delete($obj);
        }
    }

    /**
     * Get all Item records.
     *
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param mixed[] $parameters The parameters associated with the filter
     * @param mixed $orderBy The order string
     * @param string[] $additionalTablesFetch A list of additional tables to fetch (for performance improvement)
     * @param int|null $mode Either TDBMService::MODE_ARRAY or TDBMService::MODE_CURSOR (for large datasets). Defaults to TDBMService::MODE_ARRAY.
     */
    protected function find($filter = null, array $parameters = [], $orderBy = null, array $additionalTablesFetch = [], ?int $mode = null) : \App\Domain\ResultIterator\ItemResultIterator
    {
        if ($this->defaultSort && $orderBy == null) {
            $orderBy = 'items.'.$this->defaultSort.' '.$this->defaultDirection;
        }
        return $this->tdbmService->findObjects('items', $filter, $parameters, $orderBy, $additionalTablesFetch, $mode, null, \App\Domain\ResultIterator\ItemResultIterator::class);
    }

    /**
     * Get a list of Item specified by its filters.
     *
     * Unlike the `find` method that guesses the FROM part of the statement, here you can pass the $from part.
     *
     * You should not put an alias on the main table name. So your $from variable should look like:
     *
     *    "items JOIN ... ON ..."
     *
     * @param string $from The sql from statement
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param mixed[] $parameters The parameters associated with the filter
     * @param mixed $orderBy The order string
     * @param string[] $additionalTablesFetch A list of additional tables to fetch (for performance improvement)
     * @param int|null $mode Either TDBMService::MODE_ARRAY or TDBMService::MODE_CURSOR (for large datasets). Defaults to TDBMService::MODE_ARRAY.
     */
    protected function findFromSql(string $from, $filter = null, array $parameters = [], $orderBy = null, array $additionalTablesFetch = [], ?int $mode = null) : \App\Domain\ResultIterator\ItemResultIterator
    {
        if ($this->defaultSort && $orderBy == null) {
            $orderBy = 'items.'.$this->defaultSort.' '.$this->defaultDirection;
        }
        return $this->tdbmService->findObjectsFromSql('items', $from, $filter, $parameters, $orderBy, $mode, null, \App\Domain\ResultIterator\ItemResultIterator::class);
    }

    /**
     * Get a list of Item from a SQL query.
     *
     * Unlike the `find` and `findFromSql` methods, here you can pass the whole $sql query.
     *
     * You should not put an alias on the main table name, and select its columns using `*`. So the SELECT part of you $sql should look like:
     *
     *    "SELECT items .* FROM ..."
     *
     * @param string $sql The sql query
     * @param mixed[] $parameters The parameters associated with the query
     * @param string|null $countSql The sql query that provides total count of rows (automatically computed if not provided)
     * @param int|null $mode Either TDBMService::MODE_ARRAY or TDBMService::MODE_CURSOR (for large datasets). Defaults to TDBMService::MODE_ARRAY.
     */
    protected function findFromRawSql(string $sql, array $parameters = [], ?string $countSql = null, ?int $mode = null) : \App\Domain\ResultIterator\ItemResultIterator
    {
        return $this->tdbmService->findObjectsFromRawSql('items', $sql, $parameters, $mode, null, $countSql, \App\Domain\ResultIterator\ItemResultIterator::class);
    }

    /**
     * Get a single Item specified by its filters.
     *
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param mixed[] $parameters The parameters associated with the filter
     * @param string[] $additionalTablesFetch A list of additional tables to fetch (for performance improvement)
     * @return \App\Domain\Model\Item|null
     */
    protected function findOne($filter = null, array $parameters = [], array $additionalTablesFetch = []) : ?\App\Domain\Model\Item
    {
        return $this->tdbmService->findObject('items', $filter, $parameters, $additionalTablesFetch);
    }

    /**
     * Get a single Item specified by its filters.
     *
     * Unlike the `findOne` method that guesses the FROM part of the statement, here you can pass the $from part.
     *
     * You should not put an alias on the main table name. So your $from variable should look like:
     *
     *     "items JOIN ... ON ..."
     *
     * @param string $from The sql from statement
     * @param mixed $filter The filter bag (see TDBMService::findObjects for complete description)
     * @param mixed[] $parameters The parameters associated with the filter
     * @return \App\Domain\Model\Item|null
     */
    protected function findOneFromSql(string $from, $filter = null, array $parameters = []) : ?\App\Domain\Model\Item
    {
        return $this->tdbmService->findObjectFromSql('items', $from, $filter, $parameters);
    }

    /**
     * Sets the default column for default sorting.
     *
     * @param string $defaultSort
     */
    public function setDefaultSort(string $defaultSort) : void
    {
        $this->defaultSort = $defaultSort;
    }
}