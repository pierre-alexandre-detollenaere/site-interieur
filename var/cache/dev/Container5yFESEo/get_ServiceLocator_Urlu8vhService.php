<?php

namespace Container5yFESEo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Urlu8vhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Urlu8vh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Urlu8vh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', false],
            'repoProduit' => ['privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\CategorieRepository',
            'repoProduit' => 'App\\Repository\\ProduitRepository',
        ]);
    }
}
