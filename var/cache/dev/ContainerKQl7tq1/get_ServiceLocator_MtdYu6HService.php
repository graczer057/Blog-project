<?php

namespace ContainerKQl7tq1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MtdYu6HService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mtdYu6H' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mtdYu6H'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'User' => ['services', 'App\\Adapter\\User\\Users', 'getUsersService', true],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'passwordChangeUser' => ['services', 'App\\Entity\\Users\\UseCase\\PasswordChangeUser', 'getPasswordChangeUserService', true],
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
        ], [
            'User' => 'App\\Adapter\\User\\Users',
            'mailer' => '?',
            'passwordChangeUser' => 'App\\Entity\\Users\\UseCase\\PasswordChangeUser',
            'passwordEncoder' => '?',
        ]);
    }
}
