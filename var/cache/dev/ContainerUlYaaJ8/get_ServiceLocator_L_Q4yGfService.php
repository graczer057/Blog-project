<?php

namespace ContainerUlYaaJ8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_L_Q4yGfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.L.q4yGf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.L.q4yGf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'User' => ['services', 'App\\Adapter\\User\\Users', 'getUsersService', true],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'passwordResetUser' => ['services', 'App\\Entity\\Users\\UseCase\\PasswordResetUser', 'getPasswordResetUserService', true],
        ], [
            'User' => 'App\\Adapter\\User\\Users',
            'mailer' => '?',
            'passwordResetUser' => 'App\\Entity\\Users\\UseCase\\PasswordResetUser',
        ]);
    }
}
