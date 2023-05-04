<?php

namespace ContainerN0qP4C1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnnotations_ReaderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $instance->addGlobalIgnoredName('required', NULL);

        return $instance;
    }
}
