<?php
/*
 * This file has been automatically generated by TDBM.
 * You can edit this file as it will not be overwritten.
 */

declare(strict_types=1);

namespace App\Domain\Dao;

use App\Domain\Dao\Generated\BaseCategoryDao;
use App\Domain\Model\Category;
use App\Domain\Throwable\InvalidModel;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use TheCodingMachine\GraphQLite\Annotations\Factory;
use TheCodingMachine\GraphQLite\Annotations\HideParameter;
use TheCodingMachine\TDBM\ResultIterator;
use TheCodingMachine\TDBM\TDBMService;

/**
 * The CategoryDao class will maintain the persistence of Category class into the categories table.
 */
class CategoryDao extends BaseCategoryDao
{
    private ValidatorInterface $validator;

    public function __construct(TDBMService $tdbmService, ValidatorInterface $validator)
    {
        $this->validator = $validator;
        parent::__construct($tdbmService);
    }

    /**
     * @Factory
     * @HideParameter(for="$lazyLoading")
     */
    public function getById(int $id, bool $lazyLoading = false): Category
    {
        return parent::getById($id, $lazyLoading);
    }

    /**
     * @throws InvalidModel
     */
    public function validate(Category $category): void
    {
        $violations = $this->validator->validate($category);
        InvalidModel::throwException($violations);
    }

    /**
     * @return Category[]|ResultIterator
     */
    public function search(
        ?string $search = null
    ): ResultIterator {
        return $this->find(
            ['label LIKE :search'],
            [
                'search' => '%' . $search . '%',
            ]
        );
    }
}
