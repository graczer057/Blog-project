<?php

namespace ContainerROtJd6H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XuTbgWgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XuTbgWg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XuTbgWg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'command' => ['privates', '.errored..service_locator.XuTbgWg.App\\Entity\\Users\\UseCase\\ActivateUser\\Command', NULL, 'Cannot autowire service ".service_locator.XuTbgWg": it references class "App\\Entity\\Users\\UseCase\\ActivateUser\\Command" but no such service exists.'],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
        ], [
            'command' => 'App\\Entity\\Users\\UseCase\\ActivateUser\\Command',
            'mailer' => '?',
        ]);
    }
}
