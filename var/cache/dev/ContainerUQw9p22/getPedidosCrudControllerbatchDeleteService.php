<?php

namespace ContainerUQw9p22;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPedidosCrudControllerbatchDeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PNgi4kB.App\Controller\Admin\PedidosCrudController::batchDelete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PNgi4kB.App\\Controller\\Admin\\PedidosCrudController::batchDelete()'] = ($container->privates['.service_locator.PNgi4kB'] ?? $container->load('get_ServiceLocator_PNgi4kBService'))->withContext('App\\Controller\\Admin\\PedidosCrudController::batchDelete()', $container);
    }
}
