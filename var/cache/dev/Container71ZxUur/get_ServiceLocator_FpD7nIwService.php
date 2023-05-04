<?php

namespace Container71ZxUur;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FpD7nIwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fpD7nIw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fpD7nIw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\ArticleRepository',
        ]);
    }
}
