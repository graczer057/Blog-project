<?php

namespace ContainerKQl7tq1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUsers2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Users' shared autowired service.
     *
     * @return \App\Adapter\User\Users
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\src\\Entity\\Users\\UsersInterface.php';
        include_once \dirname(__DIR__, 4).'\\src\\Adapter\\User\\Users.php';

        return $container->services['Users'] = new \App\Adapter\User\Users(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
