<?php

namespace Container71ZxUur;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuteurRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\AuteurRepository' shared autowired service.
     *
     * @return \App\Repository\AuteurRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'AuteurRepository.php';

        return $container->privates['App\\Repository\\AuteurRepository'] = new \App\Repository\AuteurRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
