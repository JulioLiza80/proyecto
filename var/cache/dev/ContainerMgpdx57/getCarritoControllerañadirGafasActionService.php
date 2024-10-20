<?php

namespace ContainerMgpdx57;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCarritoControllerañadirGafasActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SvCRvdx.App\Controller\CarritoController::añadirGafasAction()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SvCRvdx.App\\Controller\\CarritoController::añadirGafasAction()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'gafas' => ['privates', '.errored..service_locator.SvCRvdx.App\\Entity\\Gafas', NULL, 'Cannot autowire service ".service_locator.SvCRvdx": it needs an instance of "App\\Entity\\Gafas" but this type has been excluded in "config/services.yaml".'],
            'carritoManager' => ['privates', 'App\\Service\\CarritoManager', 'getCarritoManagerService', true],
        ], [
            'gafas' => 'App\\Entity\\Gafas',
            'carritoManager' => 'App\\Service\\CarritoManager',
        ]))->withContext('App\\Controller\\CarritoController::añadirGafasAction()', $container);
    }
}
