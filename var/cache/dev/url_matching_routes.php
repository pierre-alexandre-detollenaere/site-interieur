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
        '/admin/categorie_add' => [[['_route' => 'admin_app_categorie_add', '_controller' => 'App\\Controller\\AdminController::addCategorie'], null, null, null, false, false, null]],
        '/admin/categories' => [[['_route' => 'admin_app_categories', '_controller' => 'App\\Controller\\AdminController::showAllCategories'], null, null, null, false, false, null]],
        '/admin/article_add' => [[['_route' => 'admin_app_article_add', '_controller' => 'App\\Controller\\AdminController::addArticle'], null, null, null, false, false, null]],
        '/admin/articles' => [[['_route' => 'admin_app_articles', '_controller' => 'App\\Controller\\AdminController::showArticles'], null, null, null, false, false, null]],
        '/admin/auteur_add' => [[['_route' => 'admin_app_auteur_add', '_controller' => 'App\\Controller\\AdminController::addAuteur'], null, null, null, false, false, null]],
        '/admin/auteurs' => [[['_route' => 'admin_app_auteurs', '_controller' => 'App\\Controller\\AdminController::showAll'], null, null, null, false, false, null]],
        '/admin/prestation_add' => [[['_route' => 'admin_app_produit_add', '_controller' => 'App\\Controller\\AdminController::addPrestation'], null, null, null, false, false, null]],
        '/admin/prestations' => [[['_route' => 'admin_app_produits', '_controller' => 'App\\Controller\\AdminController::showAllPrestation'], null, null, null, false, false, null]],
        '/admin/commandes' => [[['_route' => 'admin_app_commandes', '_controller' => 'App\\Controller\\AdminController::showAllCommandes'], null, null, null, false, false, null]],
        '/articles' => [[['_route' => 'app_articles', '_controller' => 'App\\Controller\\ArticleController::showArticles'], null, null, null, false, false, null]],
        '/articles_all' => [[['_route' => 'app_articles_all', '_controller' => 'App\\Controller\\ArticleController::showAllArticles'], null, null, null, false, false, null]],
        '/commander' => [[['_route' => 'app_commander', '_controller' => 'App\\Controller\\CommandeController::passerCommande'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'app_panier', '_controller' => 'App\\Controller\\PanierController::showPanier'], null, null, null, false, false, null]],
        '/prestations' => [[['_route' => 'app_produits', '_controller' => 'App\\Controller\\ProduitController::showAllPrestation'], null, null, null, false, false, null]],
        '/prestations_client' => [[['_route' => 'app_prestations_client', '_controller' => 'App\\Controller\\ProduitController::showPrestationsClient'], null, null, null, false, false, null]],
        '/realisations' => [[['_route' => 'app_realisations', '_controller' => 'App\\Controller\\RealisationsController::pageRealisations'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_user_profile', '_controller' => 'App\\Controller\\UserController::showProfile'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|dmin/(?'
                        .'|categorie_(?'
                            .'|update_\\{(\\d+)\\}(*:211)'
                            .'|delete_(\\d+)(*:231)'
                        .')'
                        .'|a(?'
                            .'|rticle_(?'
                                .'|update_(\\d+)(*:266)'
                                .'|delete_(\\d+)(*:286)'
                            .')'
                            .'|uteur_(?'
                                .'|update_(\\d+)(*:316)'
                                .'|delete_(\\d+)(*:336)'
                            .')'
                        .')'
                        .'|prestation_(?'
                            .'|update_(\\d+)(*:372)'
                            .'|delete_(\\d+)(*:392)'
                        .')'
                    .')'
                    .'|rticle_(\\d+)(*:414)'
                .')'
                .'|/categorie_(\\d+)(*:439)'
                .'|/p(?'
                    .'|anier_(?'
                        .'|add_(\\d+)(*:470)'
                        .'|delete_product_(\\d+)(*:498)'
                    .')'
                    .'|restation_(\\d+)(*:522)'
                .')'
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
        211 => [[['_route' => 'admin_app_categorie_update', '_controller' => 'App\\Controller\\AdminController::udpdateCategorie'], ['id'], null, null, false, false, null]],
        231 => [[['_route' => 'admin_app_categorie_delete', '_controller' => 'App\\Controller\\AdminController::deleteCategorie'], ['id'], null, null, false, true, null]],
        266 => [[['_route' => 'admin_app_article_update', '_controller' => 'App\\Controller\\AdminController::updateArticle'], ['id'], null, null, false, true, null]],
        286 => [[['_route' => 'admin_app_article_delete', '_controller' => 'App\\Controller\\AdminController::deleteArticle'], ['id'], null, null, false, true, null]],
        316 => [[['_route' => 'admin_app_auteur_update', '_controller' => 'App\\Controller\\AdminController::updateAuteur'], ['id'], null, null, false, true, null]],
        336 => [[['_route' => 'admin_app_auteur_delete', '_controller' => 'App\\Controller\\AdminController::deleteAuteur'], ['id'], null, null, false, true, null]],
        372 => [[['_route' => 'admin_app_produit_update', '_controller' => 'App\\Controller\\AdminController::updateProduit'], ['id'], null, null, false, true, null]],
        392 => [[['_route' => 'admin_app_produit_delete', '_controller' => 'App\\Controller\\AdminController::deleteProduit'], ['id'], null, null, false, true, null]],
        414 => [[['_route' => 'app_article', '_controller' => 'App\\Controller\\ArticleController::showOneArticle'], ['id'], null, null, false, true, null]],
        439 => [[['_route' => 'app_categorie', '_controller' => 'App\\Controller\\CategorieController::showCategorie'], ['id'], null, null, false, true, null]],
        470 => [[['_route' => 'app_panier_add', '_controller' => 'App\\Controller\\PanierController::addPanier'], ['id'], null, null, false, true, null]],
        498 => [[['_route' => 'app_panier_delete_product', '_controller' => 'App\\Controller\\PanierController::deleteProduct'], ['id'], null, null, false, true, null]],
        522 => [
            [['_route' => 'app_produit', '_controller' => 'App\\Controller\\ProduitController::showOneProduit'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
