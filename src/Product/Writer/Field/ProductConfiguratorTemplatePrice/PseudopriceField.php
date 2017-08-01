<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field\ProductConfiguratorTemplatePrice;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\AbstractField;

class PseudopriceField extends AbstractField
{
    public function __construct(ConstraintBuilder $constraintBuilder)
    {
        parent::__construct('pseudoprice', 'pseudoprice', $constraintBuilder);
    }

}