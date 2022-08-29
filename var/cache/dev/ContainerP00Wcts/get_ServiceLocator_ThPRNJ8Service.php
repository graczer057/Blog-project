<?php

namespace ContainerP00Wcts;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ThPRNJ8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.thPRNJ8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.thPRNJ8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'userJoinNewsletter' => ['services', 'App\\Entity\\Newsletter\\Newsletters\\UseCase\\UserJoinNewsletter', 'getUserJoinNewsletterService', true],
            'users' => ['services', 'App\\Adapter\\User\\Users', 'getUsersService', true],
        ], [
            'mailer' => '?',
            'userJoinNewsletter' => 'App\\Entity\\Newsletter\\Newsletters\\UseCase\\UserJoinNewsletter',
            'users' => 'App\\Adapter\\User\\Users',
        ]);
    }
}
