<?php

namespace ContainerKQl7tq1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddPostTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Posts\AddPostType' shared autowired service.
     *
     * @return \App\Form\Posts\AddPostType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\src\\Form\\Posts\\AddPostType.php';

        return $container->privates['App\\Form\\Posts\\AddPostType'] = new \App\Form\Posts\AddPostType();
    }
}
