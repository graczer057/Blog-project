<?php

namespace ContainerP00Wcts;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VRScP0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.v_RScP0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.v_RScP0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'command' => ['privates', '.errored..service_locator.v_RScP0.App\\Entity\\Newsletter\\Newsletters\\UseCase\\AnonJoinNewsletter\\Command', NULL, 'Cannot autowire service ".service_locator.v_RScP0": it references class "App\\Entity\\Newsletter\\Newsletters\\UseCase\\AnonJoinNewsletter\\Command" but no such service exists.'],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
        ], [
            'command' => 'App\\Entity\\Newsletter\\Newsletters\\UseCase\\AnonJoinNewsletter\\Command',
            'mailer' => '?',
        ]);
    }
}
