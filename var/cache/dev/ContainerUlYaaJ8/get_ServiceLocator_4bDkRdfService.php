<?php

namespace ContainerUlYaaJ8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4bDkRdfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4bDkRdf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4bDkRdf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'command' => ['privates', '.errored..service_locator.4bDkRdf.App\\Entity\\Newsletter\\Newsletters\\UseCase\\UserDeleteNewsletter\\Command', NULL, 'Cannot autowire service ".service_locator.4bDkRdf": it references class "App\\Entity\\Newsletter\\Newsletters\\UseCase\\UserDeleteNewsletter\\Command" but no such service exists.'],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'user' => ['privates', '.errored..service_locator.4bDkRdf.App\\Entity\\Users\\User', NULL, 'Cannot autowire service ".service_locator.4bDkRdf": it references class "App\\Entity\\Users\\User" but no such service exists.'],
        ], [
            'command' => 'App\\Entity\\Newsletter\\Newsletters\\UseCase\\UserDeleteNewsletter\\Command',
            'mailer' => '?',
            'user' => 'App\\Entity\\Users\\User',
        ]);
    }
}
