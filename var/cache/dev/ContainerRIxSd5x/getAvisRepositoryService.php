<?php

namespace ContainerRIxSd5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAvisRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\AvisRepository' shared autowired service.
     *
     * @return \App\Repository\AvisRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'AvisRepository.php';

        return $container->privates['App\\Repository\\AvisRepository'] = new \App\Repository\AvisRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
