<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/avis' => [[['_route' => '_avis_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AvisCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AvisCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/avis/new' => [[['_route' => '_avis_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AvisCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AvisCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/avis/batch-delete' => [[['_route' => '_avis_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AvisCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AvisCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/avis/autocomplete' => [[['_route' => '_avis_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AvisCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AvisCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/avis/render-filters' => [[['_route' => '_avis_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AvisCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AvisCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/covoiturage' => [[['_route' => '_covoiturage_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CovoiturageCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CovoiturageCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/covoiturage/new' => [[['_route' => '_covoiturage_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CovoiturageCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CovoiturageCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/covoiturage/batch-delete' => [[['_route' => '_covoiturage_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CovoiturageCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CovoiturageCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/covoiturage/autocomplete' => [[['_route' => '_covoiturage_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CovoiturageCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CovoiturageCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/covoiturage/render-filters' => [[['_route' => '_covoiturage_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CovoiturageCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CovoiturageCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/preference' => [[['_route' => '_preference_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PreferenceCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PreferenceCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/preference/new' => [[['_route' => '_preference_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PreferenceCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PreferenceCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/preference/batch-delete' => [[['_route' => '_preference_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PreferenceCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PreferenceCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/preference/autocomplete' => [[['_route' => '_preference_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PreferenceCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PreferenceCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/preference/render-filters' => [[['_route' => '_preference_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PreferenceCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PreferenceCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/role' => [[['_route' => '_role_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\RoleCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\RoleCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/role/new' => [[['_route' => '_role_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\RoleCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\RoleCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/role/batch-delete' => [[['_route' => '_role_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\RoleCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\RoleCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/role/autocomplete' => [[['_route' => '_role_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\RoleCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\RoleCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/role/render-filters' => [[['_route' => '_role_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\RoleCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\RoleCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/utilisateur' => [[['_route' => '_utilisateur_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateurCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateurCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/utilisateur/new' => [[['_route' => '_utilisateur_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateurCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateurCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/utilisateur/batch-delete' => [[['_route' => '_utilisateur_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateurCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateurCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/utilisateur/autocomplete' => [[['_route' => '_utilisateur_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateurCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateurCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/utilisateur/render-filters' => [[['_route' => '_utilisateur_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateurCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateurCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/vehicule' => [[['_route' => '_vehicule_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VehiculeCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VehiculeCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/vehicule/new' => [[['_route' => '_vehicule_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VehiculeCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VehiculeCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/vehicule/batch-delete' => [[['_route' => '_vehicule_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VehiculeCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VehiculeCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/vehicule/autocomplete' => [[['_route' => '_vehicule_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VehiculeCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VehiculeCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/vehicule/render-filters' => [[['_route' => '_vehicule_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VehiculeCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VehiculeCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
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
        '/admin/admin' => [[['_route' => 'app_admin_dashboard_index', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::contact'], null, null, null, false, false, null]],
        '/contact/send' => [[['_route' => 'app_contact_send', '_controller' => 'App\\Controller\\ContactController::send'], null, ['POST' => 0], null, false, false, null]],
        '/covoiturages' => [[['_route' => 'app_covoiturages', '_controller' => 'App\\Controller\\CovoiturageController::index'], null, null, null, false, false, null]],
        '/covoiturages/historique' => [[['_route' => 'app_covoiturage_historique', '_controller' => 'App\\Controller\\CovoiturageController::historiqueCovoiturages'], null, null, null, false, false, null]],
        '/covoiturage/nouveau' => [[['_route' => 'app_covoiturage_add', '_controller' => 'App\\Controller\\CovoiturageController::addCovoiturage'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout-message' => [[['_route' => 'app_logout_message', '_controller' => 'App\\Controller\\SecurityController::logoutMessage'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/mon-espace' => [[['_route' => 'app_user_space', '_controller' => 'App\\Controller\\UserController::userSpace'], null, null, null, false, false, null]],
        '/mon-espace/ajouter-vehicule' => [[['_route' => 'app_user_add_vehicle', '_controller' => 'App\\Controller\\UserController::addVehicle'], null, null, null, false, false, null]],
        '/mon-espace/preferences' => [[['_route' => 'app_user_preferences', '_controller' => 'App\\Controller\\UserController::managePreferences'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|avis/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:41)'
                            .'|delete(*:54)'
                        .')'
                        .'|(*:62)'
                    .')'
                    .'|covoiturage/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:101)'
                            .'|delete(*:115)'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|preference/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:163)'
                            .'|delete(*:177)'
                        .')'
                        .'|(*:186)'
                    .')'
                    .'|role/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:219)'
                            .'|delete(*:233)'
                        .')'
                        .'|(*:242)'
                    .')'
                    .'|utilisateur/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:282)'
                            .'|delete(*:296)'
                        .')'
                        .'|(*:305)'
                    .')'
                    .'|vehicule/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:342)'
                            .'|delete(*:356)'
                        .')'
                        .'|(*:365)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:406)'
                    .'|wdt/([^/]++)(*:426)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:468)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:505)'
                                .'|router(*:519)'
                                .'|exception(?'
                                    .'|(*:539)'
                                    .'|\\.css(*:552)'
                                .')'
                            .')'
                            .'|(*:562)'
                        .')'
                    .')'
                .')'
                .'|/covoiturage(?'
                    .'|s/(?'
                        .'|(\\d+)(*:598)'
                        .'|(\\d+)/participer(*:622)'
                    .')'
                    .'|/(?'
                        .'|(\\d+)/annuler(*:648)'
                        .'|(\\d+)/supprimer(*:671)'
                        .'|(\\d+)/modifier(*:693)'
                    .')'
                .')'
                .'|/mon\\-espace/(?'
                    .'|preferences/supprimer/([^/]++)(*:749)'
                    .'|vehicule/(?'
                        .'|supprimer/([^/]++)(*:787)'
                        .'|modifier/([^/]++)(*:812)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        41 => [[['_route' => '_avis_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AvisCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AvisCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        54 => [[['_route' => '_avis_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AvisCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AvisCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        62 => [[['_route' => '_avis_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AvisCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AvisCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        101 => [[['_route' => '_covoiturage_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CovoiturageCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CovoiturageCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        115 => [[['_route' => '_covoiturage_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CovoiturageCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CovoiturageCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        124 => [[['_route' => '_covoiturage_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\CovoiturageCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\CovoiturageCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        163 => [[['_route' => '_preference_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PreferenceCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PreferenceCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        177 => [[['_route' => '_preference_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PreferenceCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PreferenceCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        186 => [[['_route' => '_preference_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PreferenceCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PreferenceCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        219 => [[['_route' => '_role_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\RoleCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\RoleCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        233 => [[['_route' => '_role_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\RoleCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\RoleCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        242 => [[['_route' => '_role_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\RoleCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\RoleCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        282 => [[['_route' => '_utilisateur_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateurCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateurCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        296 => [[['_route' => '_utilisateur_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateurCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateurCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        305 => [[['_route' => '_utilisateur_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UtilisateurCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UtilisateurCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        342 => [[['_route' => '_vehicule_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VehiculeCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VehiculeCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        356 => [[['_route' => '_vehicule_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VehiculeCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VehiculeCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        365 => [[['_route' => '_vehicule_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\VehiculeCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\VehiculeCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        406 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        426 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        468 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        505 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        519 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        539 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        552 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        562 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        598 => [[['_route' => 'app_covoiturage_details', '_controller' => 'App\\Controller\\CovoiturageController::details'], ['id'], null, null, false, true, null]],
        622 => [[['_route' => 'app_covoiturage_participer', '_controller' => 'App\\Controller\\CovoiturageController::participer'], ['id'], ['POST' => 0], null, false, false, null]],
        648 => [[['_route' => 'app_covoiturage_annuler', '_controller' => 'App\\Controller\\CovoiturageController::annulerCovoiturage'], ['id'], ['POST' => 0], null, false, false, null]],
        671 => [[['_route' => 'app_covoiturage_delete', '_controller' => 'App\\Controller\\CovoiturageController::deleteCovoiturage'], ['id'], ['POST' => 0], null, false, false, null]],
        693 => [[['_route' => 'app_covoiturage_edit', '_controller' => 'App\\Controller\\CovoiturageController::editCovoiturage'], ['id'], null, null, false, false, null]],
        749 => [[['_route' => 'app_user_delete_preference', '_controller' => 'App\\Controller\\UserController::deletePreference'], ['id'], ['POST' => 0], null, false, true, null]],
        787 => [[['_route' => 'app_user_delete_vehicle', '_controller' => 'App\\Controller\\UserController::deleteVehicle'], ['id'], ['POST' => 0], null, false, true, null]],
        812 => [
            [['_route' => 'app_user_edit_vehicle', '_controller' => 'App\\Controller\\UserController::editVehicle'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
