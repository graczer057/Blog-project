<?php

namespace ContainerUlYaaJ8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QEe6iEhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QEe6iEh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QEe6iEh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'command' => ['privates', '.errored..service_locator.QEe6iEh.App\\Entity\\Users\\UseCase\\ExpireUser\\Command', NULL, 'Cannot autowire service ".service_locator.QEe6iEh": it references class "App\\Entity\\Users\\UseCase\\ExpireUser\\Command" but no such service exists.'],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
        ], [
            'command' => 'App\\Entity\\Users\\UseCase\\ExpireUser\\Command',
            'mailer' => '?',
        ]);
    }
}
