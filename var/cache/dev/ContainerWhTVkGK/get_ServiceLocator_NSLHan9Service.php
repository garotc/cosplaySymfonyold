<?php

namespace ContainerWhTVkGK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NSLHan9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nSLHan9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nSLHan9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\CategorieRepository',
        ]);
    }
}
