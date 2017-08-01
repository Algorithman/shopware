<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field\ProductConfiguratorOptionAttribute;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\IntField;

class OptionIDField extends IntField
{
    public function __construct(ConstraintBuilder $constraintBuilder)
    {
        parent::__construct('optionID', 'optionID', $constraintBuilder);
    }

}