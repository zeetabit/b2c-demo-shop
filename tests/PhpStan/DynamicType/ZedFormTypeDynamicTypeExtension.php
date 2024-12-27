<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace PhpStan\DynamicType;

use PHPStan\Type\DynamicMethodReturnTypeExtension;
use Spryker\Zed\Kernel\Communication\Form\AbstractType;

class ZedFormTypeDynamicTypeExtension extends AbstractSprykerDynamicTypeExtension implements DynamicMethodReturnTypeExtension
{
    /**
     * @var array
     */
    protected $methodResolves = [
        'getFacade' => true,
        'getFactory' => true,
        'getConfig' => true,
        'getQueryContainer' => true,
    ];

    /**
     * @return string
     */
    public function getClass(): string
    {
        return AbstractType::class;
    }
}
