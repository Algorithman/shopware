<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field\ProductInformation;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\StringField;

class TargetField extends StringField
{
    public function __construct(ConstraintBuilder $constraintBuilder)
    {
        parent::__construct('target', 'target', $constraintBuilder);
    }

}