<?php

namespace Container7J0n3Ni;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnonJoinNewsletterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Entity\Newsletter\Newsletters\UseCase\AnonJoinNewsletter' shared autowired service.
     *
     * @return \App\Entity\Newsletter\Newsletters\UseCase\AnonJoinNewsletter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Entity\\Newsletter\\Newsletters\\UseCase\\AnonJoinNewsletter.php';

        $container->services['App\\Entity\\Newsletter\\Newsletters\\UseCase\\AnonJoinNewsletter'] = $instance = new \App\Entity\Newsletter\Newsletters\UseCase\AnonJoinNewsletter(($container->services['application_Newsletter'] ?? $container->load('getApplicationNewsletterService')), ($container->services['doctrine_application_transaction'] ?? $container->load('getDoctrineApplicationTransactionService')));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Entity\\Newsletter\\Newsletters\\UseCase\\AnonJoinNewsletter', $container));

        return $instance;
    }
}
