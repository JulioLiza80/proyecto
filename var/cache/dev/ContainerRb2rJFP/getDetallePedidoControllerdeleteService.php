<?php

namespace ContainerRb2rJFP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDetallePedidoControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SD.nhdn.App\Controller\DetallePedidoController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SD.nhdn.App\\Controller\\DetallePedidoController::delete()'] = ($container->privates['.service_locator.SD.nhdn'] ?? $container->load('get_ServiceLocator_SD_NhdnService'))->withContext('App\\Controller\\DetallePedidoController::delete()', $container);
    }
}
