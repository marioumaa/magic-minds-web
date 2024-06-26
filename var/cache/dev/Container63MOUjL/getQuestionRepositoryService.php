<?php

namespace Container63MOUjL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQuestionRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\QuestionRepository' shared autowired service.
     *
     * @return \App\Repository\QuestionRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'QuestionRepository.php';

        return $container->privates['App\\Repository\\QuestionRepository'] = new \App\Repository\QuestionRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
