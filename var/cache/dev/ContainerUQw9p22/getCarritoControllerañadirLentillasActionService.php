<?php

namespace ContainerUQw9p22;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCarritoControllerañadirLentillasActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.C_8m20m.App\Controller\CarritoController::añadirLentillasAction()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.C_8m20m.App\\Controller\\CarritoController::añadirLentillasAction()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'lentillas' => ['privates', '.errored..service_locator.C_8m20m.App\\Entity\\Lentillas', NULL, 'Cannot autowire service ".service_locator.C_8m20m": it needs an instance of "App\\Entity\\Lentillas" but this type has been excluded in "config/services.yaml".'],
            'carritoManager' => ['privates', 'App\\Service\\CarritoManager', 'getCarritoManagerService', true],
        ], [
            'lentillas' => 'App\\Entity\\Lentillas',
            'carritoManager' => 'App\\Service\\CarritoManager',
        ]))->withContext('App\\Controller\\CarritoController::añadirLentillasAction()', $container);
    }
}
