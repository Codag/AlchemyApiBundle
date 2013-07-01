<?php

/*
 * This file is part of the Codag\AlchemyApiBundle
 *
 * (c) Marc Juchli <mj@codag.ch>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Codag\AlchemyApiBundle\DependencyInjection;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     * @return treeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('codag_alchemy_api');

        $rootNode->children()
            ->scalarNode('api_key')
                ->isRequired()
                ->cannotBeEmpty()
            ->end()
        ->end();

        return $treeBuilder;
    }
}
