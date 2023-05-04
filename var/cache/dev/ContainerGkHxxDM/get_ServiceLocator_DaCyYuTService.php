<?php

namespace ContainerGkHxxDM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DaCyYuTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.daCyYuT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.daCyYuT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', false],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'repo' => 'App\\Repository\\CategorieRepository',
            'slugger' => '?',
        ]);
    }
}
