<?php

namespace ContainerKQl7tq1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LEPEAjrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lEPEAjr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lEPEAjr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'command' => ['privates', '.errored..service_locator.lEPEAjr.App\\Entity\\Users\\UseCase\\PasswordChangeUser\\Command', NULL, 'Cannot autowire service ".service_locator.lEPEAjr": it references class "App\\Entity\\Users\\UseCase\\PasswordChangeUser\\Command" but no such service exists.'],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
        ], [
            'command' => 'App\\Entity\\Users\\UseCase\\PasswordChangeUser\\Command',
            'mailer' => '?',
        ]);
    }
}
