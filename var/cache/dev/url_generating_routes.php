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
    'show_projects' => [[], ['_controller' => 'App\\Controller\\ProjectsController::ShowProjects'], [], [['text', '/projects']], [], []],
    'create_project' => [[], ['_controller' => 'App\\Controller\\ProjectsController::new'], [], [['text', '/projects/create']], [], []],
    'edit_project' => [['id'], ['_controller' => 'App\\Controller\\ProjectsController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/project/edit']], [], []],
    'delete_project' => [['id'], ['_controller' => 'App\\Controller\\ProjectsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/project/delete']], [], []],
    'show_project' => [['id'], ['_controller' => 'App\\Controller\\ProjectsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/project']], [], []],
    'registration' => [[], ['_controller' => 'App\\Controller\\RegistrationController::new'], [], [['text', '/registration']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'ticket_new' => [[], ['_controller' => 'App\\Controller\\TicketController::new'], [], [['text', '/ticket/new']], [], []],
    'ticket_show' => [['id'], ['_controller' => 'App\\Controller\\TicketController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ticket']], [], []],
    'ticket_edit' => [['id'], ['_controller' => 'App\\Controller\\TicketController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/ticket']], [], []],
    'ticket_delete' => [['id'], ['_controller' => 'App\\Controller\\TicketController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/ticket']], [], []],
];
