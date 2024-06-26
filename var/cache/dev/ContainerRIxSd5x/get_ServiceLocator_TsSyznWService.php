<?php

namespace ContainerRIxSd5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TsSyznWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TsSyznW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TsSyznW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'managerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
            'questionsRepository' => ['privates', 'App\\Repository\\QuestionRepository', 'getQuestionRepositoryService', true],
        ], [
            'managerRegistry' => '?',
            'questionsRepository' => 'App\\Repository\\QuestionRepository',
        ]);
    }
}
