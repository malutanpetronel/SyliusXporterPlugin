<?php

declare(strict_types=1);

namespace Aquis\XporterPlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration.
 *
 * @copyright Aquis Grana impex srl (http://www.webnou.ro/)
 * @author    Petronel Malutan <malutanpetronel@gmail.com>
 */
final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('aquis_sylius_xporter_plugin');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
