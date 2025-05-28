<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/logout' => [
            [['_route' => '_logout_main'], null, null, null, false, false, null],
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
        ],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, true, false, null]],
        '/admin/covoiturages' => [[['_route' => 'app_admin_covoiturages', '_controller' => 'App\\Controller\\AdminController::manageCovoiturages'], null, null, null, false, false, null]],
        '/admin/avis' => [[['_route' => 'app_admin_avis', '_controller' => 'App\\Controller\\AdminController::manageAvis'], null, null, null, false, false, null]],
        '/admin/employes' => [[['_route' => 'app_admin_employes', '_controller' => 'App\\Controller\\AdminController::manageEmployes'], null, null, null, false, false, null]],
        '/admin/employes/nouveau' => [[['_route' => 'app_admin_create_employe', '_controller' => 'App\\Controller\\AdminController::createEmploye'], null, null, null, false, false, null]],
        '/admin/utilisateurs' => [[['_route' => 'app_admin_users', '_controller' => 'App\\Controller\\AdminController::listUsers'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::contact'], null, null, null, false, false, null]],
        '/contact/send' => [[['_route' => 'app_contact_send', '_controller' => 'App\\Controller\\ContactController::send'], null, ['POST' => 0], null, false, false, null]],
        '/covoiturages' => [[['_route' => 'app_covoiturages', '_controller' => 'App\\Controller\\CovoiturageController::index'], null, null, null, false, false, null]],
        '/covoiturages/historique' => [[['_route' => 'app_covoiturage_historique', '_controller' => 'App\\Controller\\CovoiturageController::historiqueCovoiturages'], null, null, null, false, false, null]],
        '/covoiturage/nouveau' => [[['_route' => 'app_covoiturage_add', '_controller' => 'App\\Controller\\CovoiturageController::addCovoiturage'], null, null, null, false, false, null]],
        '/chauffeur/avis' => [[['_route' => 'app_chauffeur_avis', '_controller' => 'App\\Controller\\CovoiturageController::avisRecus'], null, null, null, false, false, null]],
        '/employe' => [[['_route' => 'app_employe_space', '_controller' => 'App\\Controller\\EmployeController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout-message' => [[['_route' => 'app_logout_message', '_controller' => 'App\\Controller\\SecurityController::logoutMessage'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/changer-mot-de-passe' => [[['_route' => 'app_change_password', '_controller' => 'App\\Controller\\SecurityController::changePassword'], null, null, null, false, false, null]],
        '/mon-espace' => [[['_route' => 'app_user_space', '_controller' => 'App\\Controller\\UserController::userSpace'], null, null, null, false, false, null]],
        '/mon-espace/ajouter-vehicule' => [[['_route' => 'app_user_add_vehicle', '_controller' => 'App\\Controller\\UserController::addVehicle'], null, null, null, false, false, null]],
        '/mon-espace/preferences' => [[['_route' => 'app_user_preferences', '_controller' => 'App\\Controller\\UserController::managePreferences'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|employes/([^/]++)/supprimer(*:239)'
                    .'|utilisateurs/([^/]++)/(?'
                        .'|suspendre(*:281)'
                        .'|reactiver(*:298)'
                    .')'
                .')'
                .'|/covoiturage(?'
                    .'|s/(?'
                        .'|(\\d+)(*:333)'
                        .'|(\\d+)/participer(*:357)'
                    .')'
                    .'|/(?'
                        .'|(\\d+)/annuler(*:383)'
                        .'|(\\d+)/supprimer(*:406)'
                        .'|(\\d+)/modifier(*:428)'
                        .'|(\\d+)/demarrer(*:450)'
                        .'|(\\d+)/terminer(*:472)'
                        .'|(\\d+)/validation(*:496)'
                        .'|(\\d+)/feedback(*:518)'
                        .'|([^/]++)/avis(*:539)'
                    .')'
                .')'
                .'|/employe/avis/([^/]++)/(?'
                    .'|valider(*:582)'
                    .'|refuser(*:597)'
                .')'
                .'|/mon\\-espace/(?'
                    .'|preferences/supprimer/([^/]++)(*:652)'
                    .'|vehicule/(?'
                        .'|supprimer/([^/]++)(*:690)'
                        .'|modifier/([^/]++)(*:715)'
                    .')'
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
        239 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\AdminController::deleteEmploye'], ['id'], ['POST' => 0], null, false, false, null]],
        281 => [[['_route' => 'app_user_suspend', '_controller' => 'App\\Controller\\AdminController::suspendUser'], ['id'], ['POST' => 0], null, false, false, null]],
        298 => [[['_route' => 'app_user_reactivate', '_controller' => 'App\\Controller\\AdminController::reactivateUser'], ['id'], ['POST' => 0], null, false, false, null]],
        333 => [[['_route' => 'app_covoiturage_details', '_controller' => 'App\\Controller\\CovoiturageController::details'], ['id'], null, null, false, true, null]],
        357 => [[['_route' => 'app_covoiturage_participer', '_controller' => 'App\\Controller\\CovoiturageController::participer'], ['id'], ['POST' => 0], null, false, false, null]],
        383 => [[['_route' => 'app_covoiturage_annuler', '_controller' => 'App\\Controller\\CovoiturageController::annulerCovoiturage'], ['id'], ['POST' => 0], null, false, false, null]],
        406 => [[['_route' => 'app_covoiturage_delete', '_controller' => 'App\\Controller\\CovoiturageController::deleteCovoiturage'], ['id'], ['POST' => 0], null, false, false, null]],
        428 => [[['_route' => 'app_covoiturage_edit', '_controller' => 'App\\Controller\\CovoiturageController::editCovoiturage'], ['id'], null, null, false, false, null]],
        450 => [[['_route' => 'app_covoiturage_start', '_controller' => 'App\\Controller\\CovoiturageController::startCovoiturage'], ['id'], ['POST' => 0], null, false, false, null]],
        472 => [[['_route' => 'app_covoiturage_end', '_controller' => 'App\\Controller\\CovoiturageController::endCovoiturage'], ['id'], ['POST' => 0], null, false, false, null]],
        496 => [[['_route' => 'app_covoiturage_validate', '_controller' => 'App\\Controller\\CovoiturageController::validateCovoiturage'], ['id'], ['POST' => 0], null, false, false, null]],
        518 => [[['_route' => 'app_covoiturage_feedback', '_controller' => 'App\\Controller\\CovoiturageController::feedback'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        539 => [[['_route' => 'app_covoiturage_load_avis', '_controller' => 'App\\Controller\\CovoiturageController::loadAvis'], ['id'], ['GET' => 0], null, false, false, null]],
        582 => [[['_route' => 'app_employe_valider_avis', '_controller' => 'App\\Controller\\EmployeController::validerAvis'], ['id'], ['POST' => 0], null, false, false, null]],
        597 => [[['_route' => 'app_employe_refuser_avis', '_controller' => 'App\\Controller\\EmployeController::refuserAvis'], ['id'], ['POST' => 0], null, false, false, null]],
        652 => [[['_route' => 'app_user_delete_preference', '_controller' => 'App\\Controller\\UserController::deletePreference'], ['id'], ['POST' => 0], null, false, true, null]],
        690 => [[['_route' => 'app_user_delete_vehicle', '_controller' => 'App\\Controller\\UserController::deleteVehicle'], ['id'], ['POST' => 0], null, false, true, null]],
        715 => [
            [['_route' => 'app_user_edit_vehicle', '_controller' => 'App\\Controller\\UserController::editVehicle'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
