<?php

namespace ContainerMgpdx57;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Runtime_ImportmapService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig.runtime.importmap' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\ImportMapRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'ImportMapRuntime.php';

        return $container->privates['twig.runtime.importmap'] = new \Symfony\Bridge\Twig\Extension\ImportMapRuntime(($container->privates['asset_mapper.importmap.renderer'] ?? self::getAssetMapper_Importmap_RendererService($container)));
    }
}
