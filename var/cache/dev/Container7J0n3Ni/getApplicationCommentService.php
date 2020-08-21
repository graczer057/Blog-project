<?php

namespace Container7J0n3Ni;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApplicationCommentService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'application_comment' shared autowired service.
     *
     * @return \App\Adapter\Comment\Comments
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\src\\Entity\\Comments\\ReadModel\\CommentsQueryInterface.php';
        include_once \dirname(__DIR__, 4).'\\src\\Adapter\\Comment\\Comments.php';

        return $container->services['application_comment'] = new \App\Adapter\Comment\Comments(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
