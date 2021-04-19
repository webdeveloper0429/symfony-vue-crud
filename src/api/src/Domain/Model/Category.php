<?php
/*
 * This file has been automatically generated by TDBM.
 * You can edit this file as it will not be overwritten.
 */

declare(strict_types=1);

namespace App\Domain\Model;

use App\Domain\Model\Generated\BaseCategory;
use TheCodingMachine\GraphQLite\Annotations\SourceField;
use TheCodingMachine\GraphQLite\Annotations\Type;

/**
 * The Category class maps the 'categories' table in database.
 * 
 * @Type
 * @SourceField(name="id", outputType="ID")
 * @SourceField(name="label")
 */
class Category extends BaseCategory
{
}