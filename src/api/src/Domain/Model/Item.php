<?php
/*
 * This file has been automatically generated by TDBM.
 * You can edit this file as it will not be overwritten.
 */

declare(strict_types=1);

namespace App\Domain\Model;

use App\Domain\Model\Generated\BaseItem;
use TheCodingMachine\GraphQLite\Annotations\SourceField;
use TheCodingMachine\GraphQLite\Annotations\Type;

/**
 * The Item class maps the 'items' table in database.
 *
 * @Type
 * @SourceField(name="id", outputType="ID")
 * @SourceField(name="label")
 * @SourceField(name="categories")
 */
class Item extends BaseItem
{
}
