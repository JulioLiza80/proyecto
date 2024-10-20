<?php

namespace ContainerUQw9p22;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompraControllercrearCompraService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uudeA3u.App\Controller\CompraController::crearCompra()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uudeA3u.App\\Controller\\CompraController::crearCompra()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'request' => ['services', 'request_stack', 'getRequestStackService', false],
            'comprasManager' => ['privates', 'App\\Service\\ComprasManager', 'getComprasManagerService', true],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
        ], [
            'request' => '?',
            'comprasManager' => 'App\\Service\\ComprasManager',
            'mailer' => '?',
        ]))->withContext('App\\Controller\\CompraController::crearCompra()', $container);
    }
}
