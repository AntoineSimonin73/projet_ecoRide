<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/avis' => [[['_route' => 'app_admin_avis_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AvisCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AvisCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/avis/new' => [[['_route' => 'app_admin_avis_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AvisCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AvisCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/avis/batch-delete' => [[['_route' => 'app_admin_avis_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AvisCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AvisCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/avis/autocomplete' => [[['_route' => 'app_admin_avis_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AvisCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AvisCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/avis/render-filters' => [[['_route' => 'app_admin_avis_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AvisCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AvisCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/covoiturage' => [[['_route' => 'app_admin_covoiturage_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CovoiturageCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CovoiturageCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/covoiturage/new' => [[['_route' => 'app_admin_covoiturage_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CovoiturageCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CovoiturageCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/covoiturage/batch-delete' => [[['_route' => 'app_admin_covoiturage_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CovoiturageCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CovoiturageCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/covoiturage/autocomplete' => [[['_route' => 'app_admin_covoiturage_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CovoiturageCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CovoiturageCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/covoiturage/render-filters' => [[['_route' => 'app_admin_covoiturage_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CovoiturageCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CovoiturageCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/preference' => [[['_route' => 'app_admin_preference_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PreferenceCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PreferenceCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/preference/new' => [[['_route' => 'app_admin_preference_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PreferenceCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PreferenceCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/preference/batch-delete' => [[['_route' => 'app_admin_preference_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PreferenceCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PreferenceCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/preference/autocomplete' => [[['_route' => 'app_admin_preference_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PreferenceCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PreferenceCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/preference/render-filters' => [[['_route' => 'app_admin_preference_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PreferenceCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PreferenceCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/role' => [[['_route' => 'app_admin_role_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\RoleCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\RoleCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/role/new' => [[['_route' => 'app_admin_role_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\RoleCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\RoleCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/role/batch-delete' => [[['_route' => 'app_admin_role_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\RoleCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\RoleCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/role/autocomplete' => [[['_route' => 'app_admin_role_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\RoleCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\RoleCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/role/render-filters' => [[['_route' => 'app_admin_role_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\RoleCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\RoleCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/utilisateur' => [[['_route' => 'app_admin_utilisateur_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateurCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateurCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/utilisateur/new' => [[['_route' => 'app_admin_utilisateur_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateurCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateurCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur/batch-delete' => [[['_route' => 'app_admin_utilisateur_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateurCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateurCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/utilisateur/autocomplete' => [[['_route' => 'app_admin_utilisateur_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateurCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateurCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/utilisateur/render-filters' => [[['_route' => 'app_admin_utilisateur_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateurCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateurCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/vehicule' => [[['_route' => 'app_admin_vehicule_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VehiculeCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VehiculeCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/vehicule/new' => [[['_route' => 'app_admin_vehicule_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VehiculeCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VehiculeCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vehicule/batch-delete' => [[['_route' => 'app_admin_vehicule_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VehiculeCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VehiculeCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/vehicule/autocomplete' => [[['_route' => 'app_admin_vehicule_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VehiculeCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VehiculeCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/vehicule/render-filters' => [[['_route' => 'app_admin_vehicule_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VehiculeCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VehiculeCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
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
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, ['GET' => 0], null, true, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::contact'], null, null, null, false, false, null]],
        '/contact/send' => [[['_route' => 'app_contact_send', '_controller' => 'App\\Controller\\ContactController::send'], null, ['POST' => 0], null, false, false, null]],
        '/covoiturages' => [[['_route' => 'app_covoiturages', '_controller' => 'App\\Controller\\CovoiturageController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout-message' => [[['_route' => 'app_logout_message', '_controller' => 'App\\Controller\\SecurityController::logoutMessage'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/mon-espace' => [[['_route' => 'app_user_space', '_controller' => 'App\\Controller\\UserController::userSpace'], null, null, null, false, false, null]],
        '/mon-espace/ajouter-vehicule' => [[['_route' => 'app_user_add_vehicle', '_controller' => 'App\\Controller\\UserController::addVehicle'], null, null, null, false, false, null]],
        '/mon-espace/preferences' => [[['_route' => 'app_user_preferences', '_controller' => 'App\\Controller\\UserController::managePreferences'], null, null, null, false, false, null]],
        '/mon-espace/ajouter-voyage' => [[['_route' => 'app_user_add_trip', '_controller' => 'App\\Controller\\UserController::addTrip'], null, null, null, false, false, null]],
        '/mon-espace/ajouter-covoiturage' => [[['_route' => 'app_user_add_covoiturage', '_controller' => 'App\\Controller\\UserController::addCovoiturage'], null, null, null, false, false, null]],
        '/mon-espace/covoiturages/historique' => [[['_route' => 'app_user_covoiturage_historique', '_controller' => 'App\\Controller\\UserController::historiqueCovoiturages'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/avis/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:32)'
                        .'|delete(*:45)'
                    .')'
                    .'|(*:53)'
                .')'
                .'|/covoiturage(?'
                    .'|/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:96)'
                            .'|delete(*:109)'
                            .'|annuler(*:124)'
                        .')'
                        .'|(*:133)'
                    .')'
                    .'|s/([^/]++)(?'
                        .'|(*:155)'
                        .'|/participer(*:174)'
                    .')'
                .')'
                .'|/preference/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:215)'
                        .'|delete(*:229)'
                    .')'
                    .'|(*:238)'
                .')'
                .'|/role/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:272)'
                        .'|delete(*:286)'
                    .')'
                    .'|(*:295)'
                .')'
                .'|/utilisateur/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:336)'
                        .'|delete(*:350)'
                    .')'
                    .'|(*:359)'
                .')'
                .'|/vehicule/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:397)'
                        .'|delete(*:411)'
                    .')'
                    .'|(*:420)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:460)'
                    .'|wdt/([^/]++)(*:480)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:522)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:559)'
                                .'|router(*:573)'
                                .'|exception(?'
                                    .'|(*:593)'
                                    .'|\\.css(*:606)'
                                .')'
                            .')'
                            .'|(*:616)'
                        .')'
                    .')'
                .')'
                .'|/mon\\-espace/(?'
                    .'|preferences/supprimer/([^/]++)(*:673)'
                    .'|vehicule/(?'
                        .'|supprimer/([^/]++)(*:711)'
                        .'|modifier/([^/]++)(*:736)'
                    .')'
                    .'|covoiturage/([^/]++)/(?'
                        .'|modifier(*:777)'
                        .'|supprimer(*:794)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'app_admin_avis_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AvisCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AvisCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        45 => [[['_route' => 'app_admin_avis_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AvisCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AvisCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        53 => [[['_route' => 'app_admin_avis_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AvisCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AvisCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        96 => [[['_route' => 'app_admin_covoiturage_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CovoiturageCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CovoiturageCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        109 => [[['_route' => 'app_admin_covoiturage_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CovoiturageCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CovoiturageCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        124 => [[['_route' => 'app_covoiturage_annuler', '_controller' => 'App\\Controller\\CovoiturageController::annulerCovoiturage'], ['id'], ['POST' => 0], null, false, false, null]],
        133 => [[['_route' => 'app_admin_covoiturage_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CovoiturageCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CovoiturageCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        155 => [[['_route' => 'app_covoiturage_details', '_controller' => 'App\\Controller\\CovoiturageController::details'], ['id'], null, null, false, true, null]],
        174 => [[['_route' => 'app_covoiturage_participer', '_controller' => 'App\\Controller\\CovoiturageController::participer'], ['id'], ['POST' => 0], null, false, false, null]],
        215 => [[['_route' => 'app_admin_preference_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PreferenceCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PreferenceCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        229 => [[['_route' => 'app_admin_preference_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PreferenceCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PreferenceCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        238 => [[['_route' => 'app_admin_preference_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PreferenceCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PreferenceCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        272 => [[['_route' => 'app_admin_role_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\RoleCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\RoleCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        286 => [[['_route' => 'app_admin_role_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\RoleCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\RoleCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        295 => [[['_route' => 'app_admin_role_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\RoleCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\RoleCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        336 => [[['_route' => 'app_admin_utilisateur_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateurCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateurCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        350 => [[['_route' => 'app_admin_utilisateur_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateurCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateurCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        359 => [[['_route' => 'app_admin_utilisateur_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateurCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateurCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        397 => [[['_route' => 'app_admin_vehicule_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VehiculeCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VehiculeCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        411 => [[['_route' => 'app_admin_vehicule_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VehiculeCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VehiculeCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        420 => [[['_route' => 'app_admin_vehicule_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VehiculeCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VehiculeCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        460 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        480 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        522 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        559 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        573 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        593 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        606 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        616 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        673 => [[['_route' => 'app_user_delete_preference', '_controller' => 'App\\Controller\\UserController::deletePreference'], ['id'], ['POST' => 0], null, false, true, null]],
        711 => [[['_route' => 'app_user_delete_vehicle', '_controller' => 'App\\Controller\\UserController::deleteVehicle'], ['id'], ['POST' => 0], null, false, true, null]],
        736 => [[['_route' => 'app_user_edit_vehicle', '_controller' => 'App\\Controller\\UserController::editVehicle'], ['id'], null, null, false, true, null]],
        777 => [[['_route' => 'app_user_edit_covoiturage', '_controller' => 'App\\Controller\\UserController::editCovoiturage'], ['id'], null, null, false, false, null]],
        794 => [
            [['_route' => 'app_user_delete_covoiturage', '_controller' => 'App\\Controller\\UserController::deleteCovoiturage'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
