<?php

namespace ContainerY5bybAu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LGARFGLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lGARFGL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lGARFGL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\AppController::index' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\CartController::addToCart' => ['privates', '.service_locator.E8z.fpH', 'get_ServiceLocator_E8z_FpHService', true],
            'App\\Controller\\CartController::viewCart' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\CrudController::addProduct' => ['privates', '.service_locator.V71r_w4', 'get_ServiceLocator_V71rW4Service', true],
            'App\\Controller\\CrudController::deleteProduct' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\CrudController::deleteProductById' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CrudController::updateProduct' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LoginController::index' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\ProductController::showJeans' => ['privates', '.service_locator.a6rK7nk', 'get_ServiceLocator_A6rK7nkService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.HQYd7wV', 'get_ServiceLocator_HQYd7wVService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AppController:index' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\CartController:addToCart' => ['privates', '.service_locator.E8z.fpH', 'get_ServiceLocator_E8z_FpHService', true],
            'App\\Controller\\CartController:viewCart' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\CrudController:addProduct' => ['privates', '.service_locator.V71r_w4', 'get_ServiceLocator_V71rW4Service', true],
            'App\\Controller\\CrudController:deleteProduct' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\CrudController:deleteProductById' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\CrudController:updateProduct' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\LoginController:index' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\ProductController:showJeans' => ['privates', '.service_locator.a6rK7nk', 'get_ServiceLocator_A6rK7nkService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.HQYd7wV', 'get_ServiceLocator_HQYd7wVService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AppController::index' => '?',
            'App\\Controller\\CartController::addToCart' => '?',
            'App\\Controller\\CartController::viewCart' => '?',
            'App\\Controller\\CrudController::addProduct' => '?',
            'App\\Controller\\CrudController::deleteProduct' => '?',
            'App\\Controller\\CrudController::deleteProductById' => '?',
            'App\\Controller\\CrudController::updateProduct' => '?',
            'App\\Controller\\LoginController::index' => '?',
            'App\\Controller\\ProductController::showJeans' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AppController:index' => '?',
            'App\\Controller\\CartController:addToCart' => '?',
            'App\\Controller\\CartController:viewCart' => '?',
            'App\\Controller\\CrudController:addProduct' => '?',
            'App\\Controller\\CrudController:deleteProduct' => '?',
            'App\\Controller\\CrudController:deleteProductById' => '?',
            'App\\Controller\\CrudController:updateProduct' => '?',
            'App\\Controller\\LoginController:index' => '?',
            'App\\Controller\\ProductController:showJeans' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
