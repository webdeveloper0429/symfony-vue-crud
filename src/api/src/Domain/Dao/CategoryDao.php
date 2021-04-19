<?php
/*
 * This file has been automatically generated by TDBM.
 * You can edit this file as it will not be overwritten.
 */

declare(strict_types=1);

namespace App\Domain\Dao;

use App\Domain\Dao\Generated\BaseCategoryDao;
use TheCodingMachine\TDBM\ResultIterator;

/**
 * The CategoryDao class will maintain the persistence of Category class into the categories table.
 */
class CategoryDao extends BaseCategoryDao
{

    /**
     * @return User[]|ResultIterator
     */
    public function search(
        ?string $search = null
    ): ResultIterator {

        return $this->find(
            [
                'label LIKE :search',
            ],
            [
                'search' => '%' . $search . '%'
            ]
        );
    }
}