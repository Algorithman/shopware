<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field\ProductDetail;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\AbstractField;

class ReferenceunitField extends AbstractField
{
    public function __construct(ConstraintBuilder $constraintBuilder)
    {
        parent::__construct('referenceunit', 'referenceunit', $constraintBuilder);
    }

}