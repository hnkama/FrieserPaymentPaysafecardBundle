<?php
// Frieser/FrieserPaymentPaysafecardBundle/DependencyInjection/FrieserPaymentPaysafecardBundleExtension.php
namespace Frieser\FrieserPaymentPaysafecardBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\Definition\Processor;

class FrieserPaymentPaysafecardBundleExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $processor = new Processor();
        $config = $processor->process($configuration->getConfigTree(), $configs);


        //TODO pass confirutation to the paremeters
    }
}
