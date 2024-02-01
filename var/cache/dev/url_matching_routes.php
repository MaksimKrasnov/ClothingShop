<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/logout' => [[['_route' => '_logout_main'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'indexApp', '_controller' => 'App\\Controller\\AppController::index'], null, null, null, false, false, null]],
        '/cart/view' => [[['_route' => 'view_cart', '_controller' => 'App\\Controller\\CartController::viewCart'], null, null, null, false, false, null]],
        '/adminPanel' => [[['_route' => 'adminPanel', '_controller' => 'App\\Controller\\CrudController::showAdminPanel'], null, null, null, false, false, null]],
        '/product/add' => [[['_route' => 'addProduct', '_controller' => 'App\\Controller\\CrudController::addProduct'], null, null, null, false, false, null]],
        '/product/delete' => [[['_route' => 'deleteProduct', '_controller' => 'App\\Controller\\CrudController::deleteProduct'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/cart/add/([^/]++)(*:60)'
                .'|/product/(?'
                    .'|delete/([^/]++)(*:94)'
                    .'|update/([^/]++)(*:116)'
                    .'|([^/]++)(*:132)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        60 => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::addToCart'], ['productId'], ['POST' => 0], null, false, true, null]],
        94 => [[['_route' => 'deleteProductById', '_controller' => 'App\\Controller\\CrudController::deleteProductById'], ['id'], null, null, false, true, null]],
        116 => [[['_route' => 'updateProduct', '_controller' => 'App\\Controller\\CrudController::updateProduct'], ['id'], null, null, false, true, null]],
        132 => [
            [['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::showJeans'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
