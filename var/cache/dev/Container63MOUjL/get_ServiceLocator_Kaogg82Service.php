<?php

namespace Container63MOUjL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Kaogg82Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Kaogg82' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Kaogg82'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'repo' => ['privates', 'App\\Repository\\QuestionFirasRepository', 'getQuestionFirasRepositoryService', true],
        ], [
            'paginator' => '?',
            'repo' => 'App\\Repository\\QuestionFirasRepository',
        ]);
    }
}