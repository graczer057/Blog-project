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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\ListController::HomePage'], null, ['GET' => 0], null, false, false, null]],
        '/post/add' => [[['_route' => 'posts_add', '_controller' => 'App\\Controller\\PostsController::addAction'], null, ['GET' => 0], null, false, false, null]],
        '/post/create' => [[['_route' => 'posts_create', '_controller' => 'App\\Controller\\PostsController::addAction'], null, ['POST' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/anon/join/newsletter' => [[['_route' => 'anon_join', '_controller' => 'App\\Controller\\newsletters\\NewsletterController::Join'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/newsletter/delete' => [[['_route' => 'newsletter_delete', '_controller' => 'App\\Controller\\newsletters\\UserDeleteController::Delete'], null, null, null, false, false, null]],
        '/newsletter/join/user' => [[['_route' => 'user_join', '_controller' => 'App\\Controller\\newsletters\\UserJoinController::Join'], null, null, null, false, false, null]],
        '/token/expire' => [[['_route' => 'token_expire', '_controller' => 'App\\Controller\\users\\ExpireController::TokenExpire'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/password/reset' => [[['_route' => 'password_reset', '_controller' => 'App\\Controller\\users\\PasswordResetController::PasswordReset'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register/form' => [[['_route' => 'register', '_controller' => 'App\\Controller\\users\\RegisterController::register'], null, ['GET' => 0], null, false, false, null]],
        '/register/create' => [[['_route' => 'register_create', '_controller' => 'App\\Controller\\users\\RegisterController::register'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/posts/([^/]++)/show(*:189)'
                .'|/activate/([^/]++)(*:215)'
                .'|/change/([^/]++)(*:239)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'see', '_controller' => 'App\\Controller\\ListController::Post'], ['id'], ['GET' => 0], null, false, false, null]],
        215 => [[['_route' => 'activate', '_controller' => 'App\\Controller\\users\\ActivateController::activate'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        239 => [
            [['_route' => 'change', '_controller' => 'App\\Controller\\users\\PasswordChangeController::change'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
