<?php

namespace ContainerRIxSd5x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XfcUcOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XfcUcO_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XfcUcO_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'rec' => ['privates', 'App\\Repository\\CommentaireRepository', 'getCommentaireRepositoryService', true],
            'rep' => ['privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService', true],
        ], [
            'rec' => 'App\\Repository\\CommentaireRepository',
            'rep' => 'App\\Repository\\ProduitRepository',
        ]);
    }
}