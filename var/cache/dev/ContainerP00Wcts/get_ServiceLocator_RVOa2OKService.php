<?php

namespace ContainerP00Wcts;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RVOa2OKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rVOa2OK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rVOa2OK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'userDeleteNewsletter' => ['services', 'App\\Entity\\Newsletter\\Newsletters\\UseCase\\UserDeleteNewsletter', 'getUserDeleteNewsletterService', true],
            'users' => ['services', 'App\\Adapter\\User\\Users', 'getUsersService', true],
        ], [
            'mailer' => '?',
            'userDeleteNewsletter' => 'App\\Entity\\Newsletter\\Newsletters\\UseCase\\UserDeleteNewsletter',
            'users' => 'App\\Adapter\\User\\Users',
        ]);
    }
}