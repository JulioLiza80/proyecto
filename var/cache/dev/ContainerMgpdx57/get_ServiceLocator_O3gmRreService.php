<?php

namespace ContainerMgpdx57;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O3gmRreService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o3gmRre' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o3gmRre'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityDto' => ['privates', '.errored..service_locator.o3gmRre.EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto', NULL, 'Cannot autowire service ".service_locator.o3gmRre": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto" but no such service exists.'],
            'formOptions' => ['privates', '.errored..service_locator.o3gmRre.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore', NULL, 'Cannot autowire service ".service_locator.o3gmRre": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore" but no such service exists.'],
            'context' => ['privates', '.errored..service_locator.o3gmRre.EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext', NULL, 'Cannot autowire service ".service_locator.o3gmRre": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext" but no such service exists.'],
        ], [
            'entityDto' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto',
            'formOptions' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore',
            'context' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext',
        ]);
    }
}
