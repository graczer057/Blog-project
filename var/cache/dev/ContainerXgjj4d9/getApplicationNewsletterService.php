<?php

namespace ContainerXgjj4d9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApplicationNewsletterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'application_Newsletter' shared autowired service.
     *
     * @return \App\Adapter\Newsletter\Newsletters
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\src\\Entity\\Newsletter\\NewslettersInterface.php';
        include_once \dirname(__DIR__, 4).'\\src\\Adapter\\Newsletter\\Newsletters.php';

        return $container->services['application_Newsletter'] = new \App\Adapter\Newsletter\Newsletters(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
