<?php

/*
 * This file is part of the ApiTrackerBundle package.
 *
 * (c) Goatform
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Goatform\ApiTrackerBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

class ApiTrackerBundle extends AbstractBundle
{
    protected string $extensionAlias = 'goatform_api_tracker';

    public function configuration(DefinitionConfigurator $definition): void
    {
        $definition->import('../config/goatform_api_tracker.yaml');

        $definition->rootNode()
            ->children()
                ->scalarNode('api_url')->end()
            ->end();
    }

    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $container->import('../config/goatform_api_tracker.yaml');
    }
}