<?php

namespace ContainerN0qP4C1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProduitTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ProduitType' shared autowired service.
     *
     * @return \App\Form\ProduitType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ProduitType'] = new \App\Form\ProduitType();
    }
}
