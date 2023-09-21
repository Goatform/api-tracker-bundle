<?php

namespace Goatform\ApiTrackerBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder($this->name);

        $builder->getRootNode()
            ->children()
                ->scalarNode('api_url')
                    ->defaultValue('')
                ->end()
            ->end();

        return $builder;
    }
}