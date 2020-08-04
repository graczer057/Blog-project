<?php

namespace ContainerKQl7tq1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WTQmulfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WTQmulf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WTQmulf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'User' => ['services', 'App\\Adapter\\User\\Users', 'getUsersService', true],
            'expireUser' => ['services', 'App\\Entity\\Users\\UseCase\\ExpireUser', 'getExpireUserService', true],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
        ], [
            'User' => 'App\\Adapter\\User\\Users',
            'expireUser' => 'App\\Entity\\Users\\UseCase\\ExpireUser',
            'mailer' => '?',
        ]);
    }
}
