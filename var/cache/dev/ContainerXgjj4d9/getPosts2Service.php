<?php

namespace ContainerXgjj4d9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPosts2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Posts' shared autowired service.
     *
     * @return \App\Adapter\Post\Posts
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\src\\Entity\\Posts\\PostsInterface.php';
        include_once \dirname(__DIR__, 4).'\\src\\Adapter\\Post\\Posts.php';

        return $container->services['Posts'] = new \App\Adapter\Post\Posts(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
