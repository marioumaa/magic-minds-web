<?php

namespace Container63MOUjL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TPc6nGTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TPc6nGT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TPc6nGT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'rep' => ['privates', 'App\\Repository\\CommandeRepository', 'getCommandeRepositoryService', true],
        ], [
            'doctrine' => '?',
            'rep' => 'App\\Repository\\CommandeRepository',
        ]);
    }
}
