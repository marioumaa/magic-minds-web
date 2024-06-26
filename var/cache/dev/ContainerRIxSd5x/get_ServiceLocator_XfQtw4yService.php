<?php

namespace ContainerRIxSd5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XfQtw4yService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xfQtw4y' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xfQtw4y'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'flashy' => ['services', 'mercuryseries_flashy.flashy_notifier', 'getMercuryseriesFlashy_FlashyNotifierService', true],
            'managerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
            'questionsRepository' => ['privates', 'App\\Repository\\EvenementRepository', 'getEvenementRepositoryService', true],
        ], [
            'flashy' => '?',
            'managerRegistry' => '?',
            'questionsRepository' => 'App\\Repository\\EvenementRepository',
        ]);
    }
}
