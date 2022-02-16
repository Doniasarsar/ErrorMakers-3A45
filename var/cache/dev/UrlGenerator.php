<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], []],
    'cart_index' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart/']], [], []],
    'cart_add' => [['id'], ['_controller' => 'App\\Controller\\CartController::add'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/add']], [], []],
    'cart_remove' => [['id'], ['_controller' => 'App\\Controller\\CartController::remove'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/remove']], [], []],
    'cart_delete' => [['id'], ['_controller' => 'App\\Controller\\CartController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/delete']], [], []],
    'cart_deleteall' => [[], ['_controller' => 'App\\Controller\\CartController::deleteall'], [], [['text', '/cart/deleteall']], [], []],
    'commande' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::ajoutercommande'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/commande']], [], []],
    'admincommande' => [[], ['_controller' => 'App\\Controller\\CommandeController::afficher'], [], [['text', '/admin/affcommande']], [], []],
    'adminsupp' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::supprimercommande'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/suppcommande']], [], []],
    'adminmodif' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::modifiercommande'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/modifcommande']], [], []],
    'commande4' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::ajoutercommande4'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/commande4']], [], []],
    'front' => [[], ['_controller' => 'App\\Controller\\FrontController::index'], [], [['text', '/front']], [], []],
    'ligne_commande' => [[], ['_controller' => 'App\\Controller\\LigneCommandeController::index'], [], [['text', '/ligne/commande']], [], []],
    'adminlignesupp' => [['id'], ['_controller' => 'App\\Controller\\LigneCommandeController::supprimercommande'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/suppligne']], [], []],
    'produit' => [[], ['_controller' => 'App\\Controller\\ProduitController::afficher'], [], [['text', '/produit']], [], []],
    'delete1' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::delete1'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/delete1']], [], []],
];
