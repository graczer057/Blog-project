<?php

namespace ContainerXgjj4d9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PBzUO1jService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pBzUO1j' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pBzUO1j'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'command' => ['privates', '.errored..service_locator.pBzUO1j.App\\Entity\\Newsletter\\Newsletters\\UseCase\\UserJoinNewsletter\\Command', NULL, 'Cannot autowire service ".service_locator.pBzUO1j": it references class "App\\Entity\\Newsletter\\Newsletters\\UseCase\\UserJoinNewsletter\\Command" but no such service exists.'],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
        ], [
            'command' => 'App\\Entity\\Newsletter\\Newsletters\\UseCase\\UserJoinNewsletter\\Command',
            'mailer' => '?',
        ]);
    }
}
