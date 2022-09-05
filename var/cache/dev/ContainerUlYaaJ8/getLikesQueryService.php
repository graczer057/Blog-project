<?php

namespace ContainerUlYaaJ8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLikesQueryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Adapter\Like\LikesQuery' shared autowired service.
     *
     * @return \App\Adapter\Like\LikesQuery
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Entity/Likes/LikesInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Adapter/Like/LikesQuery.php';

        return $container->services['App\\Adapter\\Like\\LikesQuery'] = new \App\Adapter\Like\LikesQuery(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}