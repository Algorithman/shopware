<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field\ProductCategory;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\IntField;

class CategoryIdField extends IntField
{
    public function __construct(ConstraintBuilder $constraintBuilder)
    {
        parent::__construct('categoryId', 'category_id', $constraintBuilder);
    }

}