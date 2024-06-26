<?php

namespace ContainerRIxSd5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OVZtb5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oVZtb_5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oVZtb_5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'repository' => ['privates', 'App\\Repository\\QuestionFirasRepository', 'getQuestionFirasRepositoryService', true],
        ], [
            'doctrine' => '?',
            'repository' => 'App\\Repository\\QuestionFirasRepository',
        ]);
    }
}
