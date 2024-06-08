<?php

namespace Container63MOUjL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_94E0qDlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.94E0qDl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.94E0qDl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'courepo' => ['privates', 'App\\Repository\\CoursRepository', 'getCoursRepositoryService', false],
            'repo' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', false],
            'resrepo' => ['privates', 'App\\Repository\\RessourceRepository', 'getRessourceRepositoryService', true],
        ], [
            'courepo' => 'App\\Repository\\CoursRepository',
            'repo' => 'App\\Repository\\CategorieRepository',
            'resrepo' => 'App\\Repository\\RessourceRepository',
        ]);
    }
}
