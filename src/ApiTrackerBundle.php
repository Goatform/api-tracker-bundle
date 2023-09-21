<?php

/*
 * This file is part of the ApiTrackerBundle package.
 *
 * (c) Goatform
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Goatform\ApiTracker\Bundle;

use Goatform\ApiTracker\Bundle\DependencyInjection\ApiTrackerBundleExtension;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApiTrackerBundle extends Bundle
{
    public function getContainerExtension(): ExtensionInterface
    {
        return new ApiTrackerBundleExtension();
    }
}