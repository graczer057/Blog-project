<?php

namespace Container7J0n3Ni;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPostsQueryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Adapter\Post\PostsQuery' shared autowired service.
     *
     * @return \App\Adapter\Post\PostsQuery
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\src\\Entity\\Posts\\ReadModel\\PostsQueryInterface.php';
        include_once \dirname(__DIR__, 4).'\\src\\Adapter\\Post\\PostsQuery.php';

        return $container->privates['App\\Adapter\\Post\\PostsQuery'] = new \App\Adapter\Post\PostsQuery(($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService()));
    }
}
