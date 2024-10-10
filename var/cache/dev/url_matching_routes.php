<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/carrito' => [[['_route' => 'app_carrito', '_controller' => 'App\\Controller\\CarritoController::mostrarCarrito'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/detalle/compra' => [[['_route' => 'app_detalle_compra_index', '_controller' => 'App\\Controller\\DetalleCompraController::index'], null, ['GET' => 0], null, false, false, null]],
        '/detalle/compra/new' => [[['_route' => 'app_detalle_compra_new', '_controller' => 'App\\Controller\\DetalleCompraController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/detalle/pedido' => [[['_route' => 'app_detalle_pedido_index', '_controller' => 'App\\Controller\\DetallePedidoController::index'], null, ['GET' => 0], null, false, false, null]],
        '/detalle/pedido/new' => [[['_route' => 'app_detalle_pedido_new', '_controller' => 'App\\Controller\\DetallePedidoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/pedidos' => [[['_route' => 'app_pedidos_index', '_controller' => 'App\\Controller\\PedidosController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pedidos/new' => [[['_route' => 'app_pedidos_new', '_controller' => 'App\\Controller\\PedidosController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/([^/]++)/(?'
                    .'|aniadirCarrito(?'
                        .'|Gafas(*:237)'
                        .'|Lentillas(*:254)'
                    .')'
                    .'|eliminarCarrito(*:278)'
                .')'
                .'|/detalle/(?'
                    .'|compra/([^/]++)(?'
                        .'|(*:317)'
                        .'|/edit(*:330)'
                        .'|(*:338)'
                    .')'
                    .'|pedido/([^/]++)(?'
                        .'|(*:365)'
                        .'|/edit(*:378)'
                        .'|(*:386)'
                    .')'
                .')'
                .'|/pedidos/([^/]++)(?'
                    .'|(*:416)'
                    .'|/edit(*:429)'
                    .'|(*:437)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:482)'
                .'|/user/([^/]++)(?'
                    .'|(*:507)'
                    .'|/edit(*:520)'
                    .'|(*:528)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        237 => [[['_route' => 'app_carrito_aniadirGafas', '_controller' => 'App\\Controller\\CarritoController::añadirGafasAction'], ['id'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        254 => [[['_route' => 'app_carrito_aniadirLentillas', '_controller' => 'App\\Controller\\CarritoController::añadirLentillasAction'], ['id'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        278 => [[['_route' => 'app_carrito_eliminarProducto', '_controller' => 'App\\Controller\\CarritoController::eliminarProductoAction'], ['id'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        317 => [[['_route' => 'app_detalle_compra_show', '_controller' => 'App\\Controller\\DetalleCompraController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        330 => [[['_route' => 'app_detalle_compra_edit', '_controller' => 'App\\Controller\\DetalleCompraController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        338 => [[['_route' => 'app_detalle_compra_delete', '_controller' => 'App\\Controller\\DetalleCompraController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        365 => [[['_route' => 'app_detalle_pedido_show', '_controller' => 'App\\Controller\\DetallePedidoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        378 => [[['_route' => 'app_detalle_pedido_edit', '_controller' => 'App\\Controller\\DetallePedidoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        386 => [[['_route' => 'app_detalle_pedido_delete', '_controller' => 'App\\Controller\\DetallePedidoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        416 => [[['_route' => 'app_pedidos_show', '_controller' => 'App\\Controller\\PedidosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        429 => [[['_route' => 'app_pedidos_edit', '_controller' => 'App\\Controller\\PedidosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        437 => [[['_route' => 'app_pedidos_delete', '_controller' => 'App\\Controller\\PedidosController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        482 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        507 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        520 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        528 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
