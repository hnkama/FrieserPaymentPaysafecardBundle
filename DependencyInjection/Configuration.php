<?php
// Frieser/FrieserPaymentPaysafecardBundle/DependencyInjection/Configuration.php
namespace Frieser\FrieserPaymentPaysafecardBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('frieser_paymentpay_safecard');

        $rootNode
            ->children()
                ->scalarNode('username')->isRequired()->cannotBeEmpty()->end()
                    ->scalarNode('password')->isRequired()->cannotBeEmpty()->end()
                    ->scalarNode('merchantclientid')->isRequired()->cannotBeEmpty()->end()
                    ->enumNode('language')
                        ->values(array('en', 'de'))->defaultValue('en')->end()
                    ->scalarNode('return_url')->defaultNull()->end()
                    ->scalarNode('cancel_url')->defaultNull()->end()
                    ->booleanNode('debug')->defaultValue('%kernel.debug%')->end()
                    ->booleanNode('test')->defaultValue('%kernel.debug%')->end()
                    ->booleanNode('show_debug')->defaultValue('%kernel.debug%')->end()
                    ->booleanNode('show_error')->defaultValue('%kernel.debug%')->end()
                    ->booleanNode('auto_correct')->defaultValue('%kernel.debug%')->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
