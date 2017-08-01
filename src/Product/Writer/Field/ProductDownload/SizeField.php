<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field\ProductDownload;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\AbstractField;

class SizeField extends AbstractField
{
    public function __construct(ConstraintBuilder $constraintBuilder)
    {
        parent::__construct('size', 'size', $constraintBuilder);
    }

}