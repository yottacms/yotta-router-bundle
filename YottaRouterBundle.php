<?php

namespace YottaCms\Bundle\YottaRouterBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader;


class YottaRouterBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $loader = new Loader\YamlFileLoader($container, new FileLocator($this->getPath().'/Resources/config/'));
        $loader->load('config.yml');

    }
    
    public function registerBundles() {
        return [
            \Symfony\Cmf\Bundle\RoutingBundle\CmfRoutingBundle::class
        ];
    }
}
