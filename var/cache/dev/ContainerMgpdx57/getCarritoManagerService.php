<?php

namespace ContainerMgpdx57;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCarritoManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\CarritoManager' shared autowired service.
     *
     * @return \App\Service\CarritoManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'CarritoManager.php';

        return $container->privates['App\\Service\\CarritoManager'] = new \App\Service\CarritoManager(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}
