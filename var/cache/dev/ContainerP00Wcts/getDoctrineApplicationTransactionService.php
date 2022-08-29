<?php

namespace ContainerP00Wcts;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineApplicationTransactionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'doctrine_application_transaction' shared autowired service.
     *
     * @return \App\Adapter\Core\Transaction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Core/Transaction.php';
        include_once \dirname(__DIR__, 4).'/src/Adapter/Core/Transaction.php';

        return $container->services['doctrine_application_transaction'] = new \App\Adapter\Core\Transaction(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
