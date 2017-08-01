<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field\ProductImg;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\IntField;

class HeightField extends IntField
{
    public function __construct(ConstraintBuilder $constraintBuilder)
    {
        parent::__construct('height', 'height', $constraintBuilder);
    }

}