<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field\ProductConfiguratorOptionRelation;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\IntField;

class OptionIdField extends IntField
{
    public function __construct(ConstraintBuilder $constraintBuilder)
    {
        parent::__construct('optionId', 'option_id', $constraintBuilder);
    }

}