<?php

namespace ContainerN0qP4C1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_Session_MainService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.listener.session.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\SessionStrategyListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.listener.session.main'] = new \Symfony\Component\Security\Http\EventListener\SessionStrategyListener(new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate', ($container->privates['security.csrf.token_storage'] ?? $container->load('getSecurity_Csrf_TokenStorageService'))));
    }
}
