<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'homepage' => [[], ['_controller' => 'App\\Controller\\ListController::HomePage'], [], [['text', '/']], [], []],
    'see' => [['id'], ['_controller' => 'App\\Controller\\ListController::Post'], [], [['text', '/show'], ['variable', '/', '[^/]++', 'id', true], ['text', '/post']], [], []],
    'posts_add' => [[], ['_controller' => 'App\\Controller\\PostsController::addAction'], [], [['text', '/post/add']], [], []],
    'posts_create' => [[], ['_controller' => 'App\\Controller\\PostsController::addAction'], [], [['text', '/post/create']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'anon_join' => [[], ['_controller' => 'App\\Controller\\newsletters\\NewsletterController::Join'], [], [['text', '/anon/join/newsletter']], [], []],
    'newsletter_delete' => [[], ['_controller' => 'App\\Controller\\newsletters\\UserDeleteController::Join'], [], [['text', '/newsletter/delete']], [], []],
    'activate' => [['token'], ['_controller' => 'App\\Controller\\users\\ActivateController::activate'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/activate']], [], []],
    'token_expire' => [[], ['_controller' => 'App\\Controller\\users\\ExpireController::TokenExpire'], [], [['text', '/token/expire']], [], []],
    'change' => [['token'], ['_controller' => 'App\\Controller\\users\\PasswordChangeController::change'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/change']], [], []],
    'password_reset' => [[], ['_controller' => 'App\\Controller\\users\\PasswordResetController::PasswordReset'], [], [['text', '/password/reset']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\users\\RegisterController::register'], [], [['text', '/register/form']], [], []],
    'register_create' => [[], ['_controller' => 'App\\Controller\\users\\RegisterController::register'], [], [['text', '/register/create']], [], []],
];