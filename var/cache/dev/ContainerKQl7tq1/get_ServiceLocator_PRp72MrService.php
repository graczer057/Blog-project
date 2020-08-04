<?php

namespace ContainerKQl7tq1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PRp72MrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pRp72Mr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pRp72Mr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ListController::Post' => ['privates', '.service_locator.ugyrBnk', 'get_ServiceLocator_UgyrBnkService', true],
            'App\\Controller\\PostsController::addAction' => ['privates', '.service_locator.LN3OQw.', 'get_ServiceLocator_LN3OQw_Service', true],
            'App\\Controller\\PostsController::postCreated' => ['privates', '.service_locator.qR_a68B', 'get_ServiceLocator_QRA68BService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\newsletters\\NewsletterController::Join' => ['privates', '.service_locator.Lj2YAcf', 'get_ServiceLocator_Lj2YAcfService', true],
            'App\\Controller\\newsletters\\NewsletterController::JoinNewsletter' => ['privates', '.service_locator.L8FURQc', 'get_ServiceLocator_L8FURQcService', true],
            'App\\Controller\\newsletters\\UserDeleteController::Delete' => ['privates', '.service_locator.AxvoE31', 'get_ServiceLocator_AxvoE31Service', true],
            'App\\Controller\\newsletters\\UserDeleteController::DeleteNewsletter' => ['privates', '.service_locator.L8FURQc', 'get_ServiceLocator_L8FURQcService', true],
            'App\\Controller\\newsletters\\UserJoinController::Join' => ['privates', '.service_locator..RyPjJv', 'get_ServiceLocator__RyPjJvService', true],
            'App\\Controller\\users\\ActivateController::JoinNewsletter' => ['privates', '.service_locator.L8FURQc', 'get_ServiceLocator_L8FURQcService', true],
            'App\\Controller\\users\\ActivateController::UserActivated' => ['privates', '.service_locator.VnT6WfK', 'get_ServiceLocator_VnT6WfKService', true],
            'App\\Controller\\users\\ActivateController::activate' => ['privates', '.service_locator.4tO0bWI', 'get_ServiceLocator_4tO0bWIService', true],
            'App\\Controller\\users\\ExpireController::TokenExpire' => ['privates', '.service_locator.WTQmulf', 'get_ServiceLocator_WTQmulfService', true],
            'App\\Controller\\users\\ExpireController::UserTokenExpire' => ['privates', '.service_locator.VnT6WfK', 'get_ServiceLocator_VnT6WfKService', true],
            'App\\Controller\\users\\PasswordChangeController::change' => ['privates', '.service_locator.mtdYu6H', 'get_ServiceLocator_MtdYu6HService', true],
            'App\\Controller\\users\\PasswordChangeController::passwordChanged' => ['privates', '.service_locator.VnT6WfK', 'get_ServiceLocator_VnT6WfKService', true],
            'App\\Controller\\users\\PasswordResetController::PasswordReset' => ['privates', '.service_locator.Ld.W6k5', 'get_ServiceLocator_Ld_W6k5Service', true],
            'App\\Controller\\users\\PasswordResetController::UserPasswordReset' => ['privates', '.service_locator.VnT6WfK', 'get_ServiceLocator_VnT6WfKService', true],
            'App\\Controller\\users\\RegisterController::register' => ['privates', '.service_locator.A7shXJh', 'get_ServiceLocator_A7shXJhService', true],
            'App\\Controller\\users\\RegisterController::userCreated' => ['privates', '.service_locator.VnT6WfK', 'get_ServiceLocator_VnT6WfKService', true],
            'App\\Entity\\Newsletter\\Newsletters\\UseCase\\AnonJoinNewsletter::execute' => ['privates', '.service_locator.apuLg5r', 'get_ServiceLocator_ApuLg5rService', true],
            'App\\Entity\\Newsletter\\Newsletters\\UseCase\\UserDeleteNewsletter::exeute' => ['privates', '.service_locator.P3K8z4_', 'get_ServiceLocator_P3K8z4Service', true],
            'App\\Entity\\Newsletter\\Newsletters\\UseCase\\UserJoinNewsletter::execute' => ['privates', '.service_locator.pBzUO1j', 'get_ServiceLocator_PBzUO1jService', true],
            'App\\Entity\\Posts\\UseCase\\CreatePost::execute' => ['privates', '.service_locator.3CprBVb', 'get_ServiceLocator_3CprBVbService', true],
            'App\\Entity\\Users\\UseCase\\ActivateUser::execute' => ['privates', '.service_locator.XuTbgWg', 'get_ServiceLocator_XuTbgWgService', true],
            'App\\Entity\\Users\\UseCase\\ExpireUser::execute' => ['privates', '.service_locator.vrc7Oql', 'get_ServiceLocator_Vrc7OqlService', true],
            'App\\Entity\\Users\\UseCase\\PasswordChangeUser::execute' => ['privates', '.service_locator.lEPEAjr', 'get_ServiceLocator_LEPEAjrService', true],
            'App\\Entity\\Users\\UseCase\\PasswordResetUser::execute' => ['privates', '.service_locator.ha4pBI8', 'get_ServiceLocator_Ha4pBI8Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\ListController:Post' => ['privates', '.service_locator.ugyrBnk', 'get_ServiceLocator_UgyrBnkService', true],
            'App\\Controller\\PostsController:addAction' => ['privates', '.service_locator.LN3OQw.', 'get_ServiceLocator_LN3OQw_Service', true],
            'App\\Controller\\PostsController:postCreated' => ['privates', '.service_locator.qR_a68B', 'get_ServiceLocator_QRA68BService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\newsletters\\NewsletterController:Join' => ['privates', '.service_locator.Lj2YAcf', 'get_ServiceLocator_Lj2YAcfService', true],
            'App\\Controller\\newsletters\\NewsletterController:JoinNewsletter' => ['privates', '.service_locator.L8FURQc', 'get_ServiceLocator_L8FURQcService', true],
            'App\\Controller\\newsletters\\UserDeleteController:Delete' => ['privates', '.service_locator.AxvoE31', 'get_ServiceLocator_AxvoE31Service', true],
            'App\\Controller\\newsletters\\UserDeleteController:DeleteNewsletter' => ['privates', '.service_locator.L8FURQc', 'get_ServiceLocator_L8FURQcService', true],
            'App\\Controller\\newsletters\\UserJoinController:Join' => ['privates', '.service_locator..RyPjJv', 'get_ServiceLocator__RyPjJvService', true],
            'App\\Controller\\users\\ActivateController:JoinNewsletter' => ['privates', '.service_locator.L8FURQc', 'get_ServiceLocator_L8FURQcService', true],
            'App\\Controller\\users\\ActivateController:UserActivated' => ['privates', '.service_locator.VnT6WfK', 'get_ServiceLocator_VnT6WfKService', true],
            'App\\Controller\\users\\ActivateController:activate' => ['privates', '.service_locator.4tO0bWI', 'get_ServiceLocator_4tO0bWIService', true],
            'App\\Controller\\users\\ExpireController:TokenExpire' => ['privates', '.service_locator.WTQmulf', 'get_ServiceLocator_WTQmulfService', true],
            'App\\Controller\\users\\ExpireController:UserTokenExpire' => ['privates', '.service_locator.VnT6WfK', 'get_ServiceLocator_VnT6WfKService', true],
            'App\\Controller\\users\\PasswordChangeController:change' => ['privates', '.service_locator.mtdYu6H', 'get_ServiceLocator_MtdYu6HService', true],
            'App\\Controller\\users\\PasswordChangeController:passwordChanged' => ['privates', '.service_locator.VnT6WfK', 'get_ServiceLocator_VnT6WfKService', true],
            'App\\Controller\\users\\PasswordResetController:PasswordReset' => ['privates', '.service_locator.Ld.W6k5', 'get_ServiceLocator_Ld_W6k5Service', true],
            'App\\Controller\\users\\PasswordResetController:UserPasswordReset' => ['privates', '.service_locator.VnT6WfK', 'get_ServiceLocator_VnT6WfKService', true],
            'App\\Controller\\users\\RegisterController:register' => ['privates', '.service_locator.A7shXJh', 'get_ServiceLocator_A7shXJhService', true],
            'App\\Controller\\users\\RegisterController:userCreated' => ['privates', '.service_locator.VnT6WfK', 'get_ServiceLocator_VnT6WfKService', true],
            'App\\Entity\\Newsletter\\Newsletters\\UseCase\\AnonJoinNewsletter:execute' => ['privates', '.service_locator.apuLg5r', 'get_ServiceLocator_ApuLg5rService', true],
            'App\\Entity\\Newsletter\\Newsletters\\UseCase\\UserDeleteNewsletter:exeute' => ['privates', '.service_locator.P3K8z4_', 'get_ServiceLocator_P3K8z4Service', true],
            'App\\Entity\\Newsletter\\Newsletters\\UseCase\\UserJoinNewsletter:execute' => ['privates', '.service_locator.pBzUO1j', 'get_ServiceLocator_PBzUO1jService', true],
            'App\\Entity\\Posts\\UseCase\\CreatePost:execute' => ['privates', '.service_locator.3CprBVb', 'get_ServiceLocator_3CprBVbService', true],
            'App\\Entity\\Users\\UseCase\\ActivateUser:execute' => ['privates', '.service_locator.XuTbgWg', 'get_ServiceLocator_XuTbgWgService', true],
            'App\\Entity\\Users\\UseCase\\ExpireUser:execute' => ['privates', '.service_locator.vrc7Oql', 'get_ServiceLocator_Vrc7OqlService', true],
            'App\\Entity\\Users\\UseCase\\PasswordChangeUser:execute' => ['privates', '.service_locator.lEPEAjr', 'get_ServiceLocator_LEPEAjrService', true],
            'App\\Entity\\Users\\UseCase\\PasswordResetUser:execute' => ['privates', '.service_locator.ha4pBI8', 'get_ServiceLocator_Ha4pBI8Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\ListController::Post' => '?',
            'App\\Controller\\PostsController::addAction' => '?',
            'App\\Controller\\PostsController::postCreated' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\newsletters\\NewsletterController::Join' => '?',
            'App\\Controller\\newsletters\\NewsletterController::JoinNewsletter' => '?',
            'App\\Controller\\newsletters\\UserDeleteController::Delete' => '?',
            'App\\Controller\\newsletters\\UserDeleteController::DeleteNewsletter' => '?',
            'App\\Controller\\newsletters\\UserJoinController::Join' => '?',
            'App\\Controller\\users\\ActivateController::JoinNewsletter' => '?',
            'App\\Controller\\users\\ActivateController::UserActivated' => '?',
            'App\\Controller\\users\\ActivateController::activate' => '?',
            'App\\Controller\\users\\ExpireController::TokenExpire' => '?',
            'App\\Controller\\users\\ExpireController::UserTokenExpire' => '?',
            'App\\Controller\\users\\PasswordChangeController::change' => '?',
            'App\\Controller\\users\\PasswordChangeController::passwordChanged' => '?',
            'App\\Controller\\users\\PasswordResetController::PasswordReset' => '?',
            'App\\Controller\\users\\PasswordResetController::UserPasswordReset' => '?',
            'App\\Controller\\users\\RegisterController::register' => '?',
            'App\\Controller\\users\\RegisterController::userCreated' => '?',
            'App\\Entity\\Newsletter\\Newsletters\\UseCase\\AnonJoinNewsletter::execute' => '?',
            'App\\Entity\\Newsletter\\Newsletters\\UseCase\\UserDeleteNewsletter::exeute' => '?',
            'App\\Entity\\Newsletter\\Newsletters\\UseCase\\UserJoinNewsletter::execute' => '?',
            'App\\Entity\\Posts\\UseCase\\CreatePost::execute' => '?',
            'App\\Entity\\Users\\UseCase\\ActivateUser::execute' => '?',
            'App\\Entity\\Users\\UseCase\\ExpireUser::execute' => '?',
            'App\\Entity\\Users\\UseCase\\PasswordChangeUser::execute' => '?',
            'App\\Entity\\Users\\UseCase\\PasswordResetUser::execute' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ListController:Post' => '?',
            'App\\Controller\\PostsController:addAction' => '?',
            'App\\Controller\\PostsController:postCreated' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\newsletters\\NewsletterController:Join' => '?',
            'App\\Controller\\newsletters\\NewsletterController:JoinNewsletter' => '?',
            'App\\Controller\\newsletters\\UserDeleteController:Delete' => '?',
            'App\\Controller\\newsletters\\UserDeleteController:DeleteNewsletter' => '?',
            'App\\Controller\\newsletters\\UserJoinController:Join' => '?',
            'App\\Controller\\users\\ActivateController:JoinNewsletter' => '?',
            'App\\Controller\\users\\ActivateController:UserActivated' => '?',
            'App\\Controller\\users\\ActivateController:activate' => '?',
            'App\\Controller\\users\\ExpireController:TokenExpire' => '?',
            'App\\Controller\\users\\ExpireController:UserTokenExpire' => '?',
            'App\\Controller\\users\\PasswordChangeController:change' => '?',
            'App\\Controller\\users\\PasswordChangeController:passwordChanged' => '?',
            'App\\Controller\\users\\PasswordResetController:PasswordReset' => '?',
            'App\\Controller\\users\\PasswordResetController:UserPasswordReset' => '?',
            'App\\Controller\\users\\RegisterController:register' => '?',
            'App\\Controller\\users\\RegisterController:userCreated' => '?',
            'App\\Entity\\Newsletter\\Newsletters\\UseCase\\AnonJoinNewsletter:execute' => '?',
            'App\\Entity\\Newsletter\\Newsletters\\UseCase\\UserDeleteNewsletter:exeute' => '?',
            'App\\Entity\\Newsletter\\Newsletters\\UseCase\\UserJoinNewsletter:execute' => '?',
            'App\\Entity\\Posts\\UseCase\\CreatePost:execute' => '?',
            'App\\Entity\\Users\\UseCase\\ActivateUser:execute' => '?',
            'App\\Entity\\Users\\UseCase\\ExpireUser:execute' => '?',
            'App\\Entity\\Users\\UseCase\\PasswordChangeUser:execute' => '?',
            'App\\Entity\\Users\\UseCase\\PasswordResetUser:execute' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
