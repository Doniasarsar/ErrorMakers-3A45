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
    'admin_dashboard' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin/dashboard']], [], []],
    'admin_userlist' => [[], ['_controller' => 'App\\Controller\\AdminController::afficher'], [], [['text', '/admin/dashboard/listU']], [], []],
    'admin_userdelete' => [['id'], ['_controller' => 'App\\Controller\\AdminController::Delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/dashboard/listU/delete']], [], []],
    'admin_loginadmin' => [[], ['_controller' => 'App\\Controller\\AdminController::login'], [], [['text', '/admin/loginadmin']], [], []],
    'admin_logoutadmin' => [[], ['_controller' => 'App\\Controller\\AdminController::logout'], [], [['text', '/admin/logout']], [], []],
    'cart_index' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart/']], [], []],
    'cart_add' => [['id'], ['_controller' => 'App\\Controller\\CartController::add'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/add']], [], []],
    'cart_remove' => [['id'], ['_controller' => 'App\\Controller\\CartController::remove'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/remove']], [], []],
    'cart_delete' => [['id'], ['_controller' => 'App\\Controller\\CartController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/delete']], [], []],
    'cart_deleteall' => [[], ['_controller' => 'App\\Controller\\CartController::deleteall'], [], [['text', '/cart/deleteall']], [], []],
    'commande' => [[], ['_controller' => 'App\\Controller\\CommandeController::ajoutercommande'], [], [['text', '/commande']], [], []],
    'admincommande' => [[], ['_controller' => 'App\\Controller\\CommandeController::afficher'], [], [['text', '/admin/affcommande']], [], []],
    'adminsupp' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::supprimercommande'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/suppcommande']], [], []],
    'adminmodif' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::modifiercommande'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/modifcommande']], [], []],
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'commande4' => [[], ['_controller' => 'App\\Controller\\CommandeController::ajoutercommande4'], [], [['text', '/commande4']], [], []],
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
    'demande' => [[], ['_controller' => 'App\\Controller\\DemandeController::index'], [], [['text', '/demande']], [], []],
    'acteurSAdd' => [[], ['_controller' => 'App\\Controller\\DemandeController::AddActeur'], [], [['text', '/demande/addActeur']], [], []],
>>>>>>> Stashed changes
    'home' => [[], ['_controller' => 'App\\Controller\\FrontController::index'], [], [['text', '/home']], [], []],
    'produit' => [[], ['_controller' => 'App\\Controller\\FrontController::afficher'], [], [['text', '/produit']], [], []],
    'delete1' => [['id'], ['_controller' => 'App\\Controller\\FrontController::delete1'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/delete1']], [], []],
    'ligne_commande' => [[], ['_controller' => 'App\\Controller\\LigneCommandeController::index'], [], [['text', '/ligne/commande']], [], []],
    'adminlignesupp' => [['id'], ['_controller' => 'App\\Controller\\LigneCommandeController::supprimercommande'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/suppligne']], [], []],
    'livraison_controlleur' => [[], ['_controller' => 'App\\Controller\\LivraisonControlleur::index'], [], [['text', '/livraison/controlleur']], [], []],
    'r_list' => [[], ['_controller' => 'App\\Controller\\LivraisonControlleur::afficher'], [], [['text', '/livraison/list']], [], []],
    'r_delete' => [['id'], ['_controller' => 'App\\Controller\\LivraisonControlleur::Supprimer'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/livraison/delete']], [], []],
    'r_add' => [[], ['_controller' => 'App\\Controller\\LivraisonControlleur::Add'], [], [['text', '/livraison/add']], [], []],
    'r_update' => [['id'], ['_controller' => 'App\\Controller\\LivraisonControlleur::Update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/livraison/update']], [], []],
    'utilisateurs' => [[], ['_controller' => 'App\\Controller\\UtilisateursController::index'], [], [['text', '/utilisateurs']], [], []],
    'userAdd' => [[], ['_controller' => 'App\\Controller\\UtilisateursController::AddUser'], [], [['text', '/utilisateurs/add']], [], []],
    'acteurSAdd' => [[], ['_controller' => 'App\\Controller\\UtilisateursController::AddActeurS'], [], [['text', '/utilisateurs/addActeur']], [], []],
    'userupdate' => [['id'], ['_controller' => 'App\\Controller\\UtilisateursController::Update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/utilisateurs/update']], [], []],
    'usercompte' => [[], ['_controller' => 'App\\Controller\\UtilisateursController::Compte'], [], [['text', '/utilisateurs/compte']], [], []],
    'passupdate' => [[], ['_controller' => 'App\\Controller\\UtilisateursController::EditPassword'], [], [['text', '/utilisateurs/updatepass']], [], []],
    'activation' => [['token'], ['_controller' => 'App\\Controller\\UtilisateursController::activation'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/activation']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\UtilisateursController::login'], [], [['text', '/login']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\UtilisateursController::logout'], [], [['text', '/logout']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\FrontController::index'], [], [['text', '/']], [], []],
];
