<?php

namespace ContainerEw7R0Mn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NpFHERService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.np_FHER' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.np_FHER'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\LoginController::login' => ['privates', '.service_locator.TKm5lL2', 'get_ServiceLocator_TKm5lL2Service', true],
            'App\\Controller\\PostController::checkConfirm' => ['privates', '.service_locator.Gooei0F', 'get_ServiceLocator_Gooei0FService', true],
            'App\\Controller\\PostController::confirmTest' => ['privates', '.service_locator.oNldM1t', 'get_ServiceLocator_ONldM1tService', true],
            'App\\Controller\\PostController::mail' => ['privates', '.service_locator.6E9xidT', 'get_ServiceLocator_6E9xidTService', true],
            'App\\Controller\\RecoverController::resetPassword' => ['privates', '.service_locator.wX9uosa', 'get_ServiceLocator_WX9uosaService', true],
            'App\\Controller\\RecoverController::resetPasswordConfirm' => ['privates', '.service_locator.tMalvZa', 'get_ServiceLocator_TMalvZaService', true],
            'App\\Controller\\RecoverController::sendToken' => ['privates', '.service_locator.6CS2dNN', 'get_ServiceLocator_6CS2dNNService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.dju2A1Q', 'get_ServiceLocator_Dju2A1QService', true],
            'App\\Controller\\RegistrationController::resendConfirmation' => ['privates', '.service_locator.MHPHtrT', 'get_ServiceLocator_MHPHtrTService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\LoginController:login' => ['privates', '.service_locator.TKm5lL2', 'get_ServiceLocator_TKm5lL2Service', true],
            'App\\Controller\\PostController:checkConfirm' => ['privates', '.service_locator.Gooei0F', 'get_ServiceLocator_Gooei0FService', true],
            'App\\Controller\\PostController:confirmTest' => ['privates', '.service_locator.oNldM1t', 'get_ServiceLocator_ONldM1tService', true],
            'App\\Controller\\PostController:mail' => ['privates', '.service_locator.6E9xidT', 'get_ServiceLocator_6E9xidTService', true],
            'App\\Controller\\RecoverController:resetPassword' => ['privates', '.service_locator.wX9uosa', 'get_ServiceLocator_WX9uosaService', true],
            'App\\Controller\\RecoverController:resetPasswordConfirm' => ['privates', '.service_locator.tMalvZa', 'get_ServiceLocator_TMalvZaService', true],
            'App\\Controller\\RecoverController:sendToken' => ['privates', '.service_locator.6CS2dNN', 'get_ServiceLocator_6CS2dNNService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.dju2A1Q', 'get_ServiceLocator_Dju2A1QService', true],
            'App\\Controller\\RegistrationController:resendConfirmation' => ['privates', '.service_locator.MHPHtrT', 'get_ServiceLocator_MHPHtrTService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\LoginController::login' => '?',
            'App\\Controller\\PostController::checkConfirm' => '?',
            'App\\Controller\\PostController::confirmTest' => '?',
            'App\\Controller\\PostController::mail' => '?',
            'App\\Controller\\RecoverController::resetPassword' => '?',
            'App\\Controller\\RecoverController::resetPasswordConfirm' => '?',
            'App\\Controller\\RecoverController::sendToken' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::resendConfirmation' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\LoginController:login' => '?',
            'App\\Controller\\PostController:checkConfirm' => '?',
            'App\\Controller\\PostController:confirmTest' => '?',
            'App\\Controller\\PostController:mail' => '?',
            'App\\Controller\\RecoverController:resetPassword' => '?',
            'App\\Controller\\RecoverController:resetPasswordConfirm' => '?',
            'App\\Controller\\RecoverController:sendToken' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:resendConfirmation' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
