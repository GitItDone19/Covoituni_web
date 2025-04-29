<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/annonces' => [[['_route' => 'app_admin_annonces', '_controller' => 'App\\Controller\\Admin\\AnnonceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/annonces-event' => [[['_route' => 'app_admin_annonces_event', '_controller' => 'App\\Controller\\Admin\\AnnonceEventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/category' => [[['_route' => 'app_admin_category_index', '_controller' => 'App\\Controller\\Admin\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/category/new' => [[['_route' => 'app_admin_category_new', '_controller' => 'App\\Controller\\Admin\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/reclamation' => [[['_route' => 'app_admin_reclamation_index', '_controller' => 'App\\Controller\\Admin\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/reservations' => [[['_route' => 'app_admin_reservations', '_controller' => 'App\\Controller\\Admin\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/trajets' => [[['_route' => 'app_admin_trajets', '_controller' => 'App\\Controller\\Admin\\TrajetController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/dashboard' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, false, false, null]],
        '/avis' => [[['_route' => 'app_avis_index', '_controller' => 'App\\Controller\\AvisController::index'], null, ['GET' => 0], null, false, false, null]],
        '/avis/new' => [[['_route' => 'app_avis_new', '_controller' => 'App\\Controller\\AvisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/passager/avis/list' => [[['_route' => 'app_passager_avis_list', '_controller' => 'App\\Controller\\AvisController::list'], null, null, null, false, false, null]],
        '/passager/avis/new' => [[['_route' => 'app_passager_avis_new', '_controller' => 'App\\Controller\\AvisController::passagerAvisNew'], null, null, null, false, false, null]],
        '/chat/conversations' => [[['_route' => 'app_chat_conversations', '_controller' => 'App\\Controller\\ChatController::conversations'], null, null, null, false, false, null]],
        '/conducteur/dashboard' => [[['_route' => 'app_conducteur_dashboard', '_controller' => 'App\\Controller\\ConducteurController::dashboard'], null, null, null, false, false, null]],
        '/conducteur/profile' => [[['_route' => 'app_conducteur_profile', '_controller' => 'App\\Controller\\ConducteurController::profile'], null, null, null, false, false, null]],
        '/conducteur/reclamation' => [[['_route' => 'app_conducteur_reclamation', '_controller' => 'App\\Controller\\ConducteurController::reclamation'], null, null, null, false, false, null]],
        '/conducteur/reclamation/submit' => [[['_route' => 'app_conducteur_reclamation_submit', '_controller' => 'App\\Controller\\ConducteurController::reclamationSubmit'], null, ['POST' => 0], null, false, false, null]],
        '/conducteur/mes-reclamations' => [[['_route' => 'app_conducteur_mes_reclamations', '_controller' => 'App\\Controller\\ConducteurController::mesReclamations'], null, null, null, false, false, null]],
        '/conducteur/annonce' => [[['_route' => 'app_conducteur_annonce', '_controller' => 'App\\Controller\\ConducteurController::annonce'], null, null, null, false, false, null]],
        '/conducteur/annonce/submit' => [[['_route' => 'app_conducteur_annonce_submit', '_controller' => 'App\\Controller\\ConducteurController::annonceSubmit'], null, ['POST' => 0], null, false, false, null]],
        '/conducteur/reservations' => [[['_route' => 'app_conducteur_reservations', '_controller' => 'App\\Controller\\ConducteurController::reservations'], null, null, null, false, false, null]],
        '/conducteur/voiture' => [[['_route' => 'app_conducteur_voiture', '_controller' => 'App\\Controller\\ConducteurController::voiture'], null, null, null, false, false, null]],
        '/conducteur/liste-trajet' => [[['_route' => 'app_conducteur_liste_trajet', '_controller' => 'App\\Controller\\ConducteurController::listeTrajet'], null, null, null, false, false, null]],
        '/conducteur/liste-annonce' => [[['_route' => 'app_conducteur_liste_annonce', '_controller' => 'App\\Controller\\ConducteurController::listeAnnonce'], null, null, null, false, false, null]],
        '/conducteur/ajouter-trajet' => [[['_route' => 'app_conducteur_ajouter_trajet', '_controller' => 'App\\Controller\\ConducteurController::ajouterTrajet'], null, null, null, false, false, null]],
        '/conducteur/ajouter-trajet/submit' => [[['_route' => 'app_conducteur_ajouter_trajet_submit', '_controller' => 'App\\Controller\\ConducteurController::ajouterTrajetSubmit'], null, ['POST' => 0], null, false, false, null]],
        '/conducteur/ajouter-annonce' => [[['_route' => 'app_conducteur_ajouter_annonce', '_controller' => 'App\\Controller\\ConducteurController::ajouterAnnonce'], null, null, null, false, false, null]],
        '/conducteur/ajouter-annonce/submit' => [[['_route' => 'app_conducteur_ajouter_annonce_submit', '_controller' => 'App\\Controller\\ConducteurController::ajouterAnnonceSubmit'], null, ['POST' => 0], null, false, false, null]],
        '/conducteur/conducteur/events' => [[['_route' => 'app_conducteur_events', '_controller' => 'App\\Controller\\ConducteurController::events'], null, null, null, false, false, null]],
        '/conducteur/conducteur/event/create' => [[['_route' => 'app_conducteur_event_create', '_controller' => 'App\\Controller\\ConducteurController::createEvent'], null, null, null, false, false, null]],
        '/conducteur/conducteur/reservations-event' => [[['_route' => 'app_conducteur_reservations_event', '_controller' => 'App\\Controller\\ConducteurController::reservationsEvent'], null, null, null, false, false, null]],
        '/conducteur/conducteur/participations-parraines' => [[['_route' => 'app_conducteur_participations_parraines', '_controller' => 'App\\Controller\\ConducteurController::participationsParrainees'], null, null, null, false, false, null]],
        '/conducteur/participations-evenements' => [[['_route' => 'app_conducteur_participations_evenements', '_controller' => 'App\\Controller\\ConducteurController::mesParticipationsEvenements'], null, null, null, false, false, null]],
        '/conducteur/voiture/add' => [[['_route' => 'app_conducteur_voiture_add', '_controller' => 'App\\Controller\\ConducteurController::addVoiture'], null, null, null, false, false, null]],
        '/conducteur/voiture/edit' => [[['_route' => 'app_conducteur_voiture_edit', '_controller' => 'App\\Controller\\ConducteurController::editVoiture'], null, null, null, false, false, null]],
        '/conducteur/voiture/delete' => [[['_route' => 'app_conducteur_voiture_delete', '_controller' => 'App\\Controller\\ConducteurController::deleteVoiture'], null, ['POST' => 0], null, false, false, null]],
        '/events' => [[['_route' => 'app_events', '_controller' => 'App\\Controller\\EventController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/api/geocode' => [[['_route' => 'app_api_geocode', '_controller' => 'App\\Controller\\MapController::geocode'], null, null, null, false, false, null]],
        '/api/validate-location' => [[['_route' => 'app_api_validate_location', '_controller' => 'App\\Controller\\MapController::validateLocation'], null, null, null, false, false, null]],
        '/passager/dashboard' => [[['_route' => 'app_passager_dashboard', '_controller' => 'App\\Controller\\PassagerController::dashboard'], null, null, null, false, false, null]],
        '/passager/profile' => [[['_route' => 'app_passager_profile', '_controller' => 'App\\Controller\\PassagerController::profile'], null, null, null, false, false, null]],
        '/passager/reclamation' => [[['_route' => 'app_passager_reclamation', '_controller' => 'App\\Controller\\PassagerController::reclamation'], null, null, null, false, false, null]],
        '/passager/reclamation/submit' => [[['_route' => 'app_passager_reclamation_submit', '_controller' => 'App\\Controller\\PassagerController::submitReclamation'], null, ['POST' => 0], null, false, false, null]],
        '/passager/mes-reclamations' => [[['_route' => 'app_passager_mes_reclamations', '_controller' => 'App\\Controller\\PassagerController::mesReclamations'], null, null, null, false, false, null]],
        '/passager/avis' => [[['_route' => 'app_passager_avis', '_controller' => 'App\\Controller\\PassagerController::avis'], null, null, null, false, false, null]],
        '/passager/avis/submit' => [[['_route' => 'app_passager_avis_submit', '_controller' => 'App\\Controller\\PassagerController::submitAvis'], null, ['POST' => 0], null, false, false, null]],
        '/passager/reservation' => [[['_route' => 'app_passager_reservation', '_controller' => 'App\\Controller\\PassagerController::reservation'], null, null, null, false, false, null]],
        '/passager/liste-trajet' => [[['_route' => 'app_passager_liste_trajet', '_controller' => 'App\\Controller\\PassagerController::listeTrajet'], null, null, null, false, false, null]],
        '/passager/liste-annonce' => [[['_route' => 'app_passager_liste_annonce', '_controller' => 'App\\Controller\\PassagerController::listeAnnonce'], null, null, null, false, false, null]],
        '/passager/rechercher-par-position' => [[['_route' => 'app_passager_rechercher_position', '_controller' => 'App\\Controller\\PassagerController::rechercherParPosition'], null, ['GET' => 0], null, false, false, null]],
        '/passager/ajouter-trajet' => [[['_route' => 'app_passager_ajouter_trajet', '_controller' => 'App\\Controller\\PassagerController::ajouterTrajet'], null, null, null, false, false, null]],
        '/passager/ajouter-trajet/submit' => [[['_route' => 'app_passager_ajouter_trajet_submit', '_controller' => 'App\\Controller\\PassagerController::ajouterTrajetSubmit'], null, ['POST' => 0], null, false, false, null]],
        '/passager/ajouter-annonce' => [[['_route' => 'app_passager_ajouter_annonce', '_controller' => 'App\\Controller\\PassagerController::ajouterAnnonce'], null, null, null, false, false, null]],
        '/passager/ajouter-annonce/submit' => [[['_route' => 'app_passager_ajouter_annonce_submit', '_controller' => 'App\\Controller\\PassagerController::ajouterAnnonceSubmit'], null, ['POST' => 0], null, false, false, null]],
        '/passager/mes-reservations' => [[['_route' => 'app_passager_mes_reservations', '_controller' => 'App\\Controller\\PassagerController::mesReservations'], null, null, null, false, false, null]],
        '/passager/historique-reservations' => [[['_route' => 'app_passager_historique_reservations', '_controller' => 'App\\Controller\\PassagerController::historiqueReservations'], null, null, null, false, false, null]],
        '/passager/passager/events' => [[['_route' => 'app_passager_events', '_controller' => 'App\\Controller\\PassagerController::events'], null, null, null, false, false, null]],
        '/api/predict-price' => [[['_route' => 'app_api_predict_price', '_controller' => 'App\\Controller\\PriceController::predictPrice'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_passager_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, null, null, true, false, null]],
        '/rides' => [[['_route' => 'app_rides', '_controller' => 'App\\Controller\\RideController::index'], null, null, null, false, false, null]],
        '/admin/setup-roles' => [[['_route' => 'app_setup_roles', '_controller' => 'App\\Controller\\RoleController::setupRoles'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/login-redirect' => [[['_route' => 'app_login_redirect', '_controller' => 'App\\Controller\\SecurityController::loginRedirect'], null, null, null, false, false, null]],
        '/forgot-password' => [[['_route' => 'app_forgot_password', '_controller' => 'App\\Controller\\SecurityController::forgotPassword'], null, null, null, false, false, null]],
        '/user/profile' => [[['_route' => 'app_user_profile', '_controller' => 'App\\Controller\\UserController::profile'], null, null, null, false, false, null]],
        '/user/profile/edit' => [[['_route' => 'app_user_edit_profile', '_controller' => 'App\\Controller\\UserController::editProfile'], null, null, null, false, false, null]],
        '/user/profile/change-password' => [[['_route' => 'app_user_change_password', '_controller' => 'App\\Controller\\UserController::changePassword'], null, null, null, false, false, null]],
        '/user/admin/users' => [[['_route' => 'app_admin_users', '_controller' => 'App\\Controller\\UserController::listUsers'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|dmin/(?'
                        .'|annonces(?'
                            .'|/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:246)'
                                    .'|terminate(*:263)'
                                    .'|delete(*:277)'
                                .')'
                                .'|(*:286)'
                            .')'
                            .'|\\-event/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:322)'
                                    .'|delete(*:336)'
                                .')'
                                .'|(*:345)'
                            .')'
                        .')'
                        .'|category/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:383)'
                                .'|delete(*:397)'
                            .')'
                            .'|(*:406)'
                        .')'
                        .'|re(?'
                            .'|clamation/(?'
                                .'|([^/]++)(?'
                                    .'|(*:444)'
                                    .'|/(?'
                                        .'|re(?'
                                            .'|ply(*:464)'
                                            .'|spond(*:477)'
                                        .')'
                                        .'|delete(*:492)'
                                        .'|change\\-status(*:514)'
                                    .')'
                                .')'
                                .'|update\\-all\\-status(*:543)'
                                .'|([^/]++)/fix\\-status(*:571)'
                            .')'
                            .'|servations/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:610)'
                                    .'|delete(*:624)'
                                .')'
                                .'|(*:633)'
                            .')'
                        .')'
                        .'|trajets/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:670)'
                                .'|delete(*:684)'
                            .')'
                            .'|(*:693)'
                        .')'
                    .')'
                    .'|vis/(?'
                        .'|([^/]++)(?'
                            .'|(*:721)'
                            .'|/edit(*:734)'
                            .'|(*:742)'
                        .')'
                        .'|list(*:755)'
                    .')'
                .')'
                .'|/c(?'
                    .'|hat/(?'
                        .'|conversation/([^/]++)/([^/]++)(*:807)'
                        .'|send/([^/]++)/([^/]++)(*:837)'
                        .'|get\\-new\\-messages/([^/]++)/([^/]++)/([^/]++)(*:890)'
                    .')'
                    .'|onducteur/(?'
                        .'|re(?'
                            .'|clamation/([^/]++)(*:935)'
                            .'|fuser\\-reservation/([^/]++)(*:970)'
                        .')'
                        .'|a(?'
                            .'|ccepter\\-reservation(?'
                                .'|/([^/]++)(*:1015)'
                                .'|\\-event/([^/]++)(*:1040)'
                            .')'
                            .'|pi/car\\-models/([^/]++)(*:1073)'
                        .')'
                        .'|terminer\\-annonce/([^/]++)(*:1109)'
                        .'|modifier\\-(?'
                            .'|annonce/([^/]++)(?'
                                .'|(*:1150)'
                                .'|/submit(*:1166)'
                            .')'
                            .'|trajet/([^/]++)(?'
                                .'|(*:1194)'
                                .'|/submit(*:1210)'
                            .')'
                        .')'
                        .'|supprimer\\-(?'
                            .'|annonce/([^/]++)(*:1251)'
                            .'|trajet/([^/]++)(*:1275)'
                        .')'
                        .'|conducteur/(?'
                            .'|event/(?'
                                .'|([^/]++)/(?'
                                    .'|edit(*:1324)'
                                    .'|delete(*:1339)'
                                    .'|annonce(?'
                                        .'|s(*:1359)'
                                        .'|/create(*:1375)'
                                    .')'
                                .')'
                                .'|annonce/([^/]++)/(?'
                                    .'|edit(*:1410)'
                                    .'|delete(*:1425)'
                                    .'|terminer(*:1442)'
                                .')'
                                .'|([^/]++)(?'
                                    .'|/(?'
                                        .'|terminer\\-all(*:1480)'
                                        .'|participants(*:1501)'
                                    .')'
                                    .'|(*:1511)'
                                .')'
                            .')'
                            .'|reservation/([^/]++)/refuser\\-event(*:1557)'
                        .')'
                    .')'
                .')'
                .'|/events/([^/]++)(*:1585)'
                .'|/map/trajet/([^/]++)(*:1614)'
                .'|/passager/(?'
                    .'|modifier\\-(?'
                        .'|trajet/([^/]++)(?'
                            .'|(*:1667)'
                            .'|/submit(*:1683)'
                        .')'
                        .'|annonce/([^/]++)(?'
                            .'|(*:1712)'
                            .'|/submit(*:1728)'
                        .')'
                    .')'
                    .'|supprimer\\-(?'
                        .'|trajet/([^/]++)(*:1768)'
                        .'|annonce/([^/]++)(*:1793)'
                    .')'
                    .'|reservation\\-create/([^/]++)(*:1831)'
                    .'|annuler\\-reservation/([^/]++)(*:1869)'
                    .'|passager/(?'
                        .'|event/(?'
                            .'|([^/]++)(?'
                                .'|(*:1910)'
                                .'|/(?'
                                    .'|participer(*:1933)'
                                    .'|ann(?'
                                        .'|uler\\-participation(*:1967)'
                                        .'|onces(*:1981)'
                                    .')'
                                .')'
                            .')'
                            .'|annonce/([^/]++)/reserver(*:2018)'
                        .')'
                        .'|reservation\\-event/([^/]++)/annuler(*:2063)'
                    .')'
                .')'
                .'|/r(?'
                    .'|e(?'
                        .'|clamation/(?'
                            .'|([^/]++)(*:2104)'
                            .'|new(*:2116)'
                            .'|([^/]++)(?'
                                .'|/edit(*:2141)'
                                .'|(*:2150)'
                            .')'
                        .')'
                        .'|set\\-password/([^/]++)(*:2183)'
                    .')'
                    .'|ides/([^/]++)(*:2206)'
                .')'
                .'|/verify\\-email/([^/]++)(*:2239)'
                .'|/user/admin/users/([^/]++)/(?'
                    .'|delete(*:2284)'
                    .'|edit\\-roles(*:2304)'
                    .'|ban(*:2316)'
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
        246 => [[['_route' => 'app_admin_annonce_edit', '_controller' => 'App\\Controller\\Admin\\AnnonceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'app_admin_annonce_terminate', '_controller' => 'App\\Controller\\Admin\\AnnonceController::terminate'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        277 => [[['_route' => 'app_admin_annonce_delete', '_controller' => 'App\\Controller\\Admin\\AnnonceController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        286 => [[['_route' => 'app_admin_annonce_show', '_controller' => 'App\\Controller\\Admin\\AnnonceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        322 => [[['_route' => 'app_admin_annonce_event_edit', '_controller' => 'App\\Controller\\Admin\\AnnonceEventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        336 => [[['_route' => 'app_admin_annonce_event_delete', '_controller' => 'App\\Controller\\Admin\\AnnonceEventController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        345 => [[['_route' => 'app_admin_annonce_event_show', '_controller' => 'App\\Controller\\Admin\\AnnonceEventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        383 => [[['_route' => 'app_admin_category_edit', '_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        397 => [[['_route' => 'app_admin_category_delete', '_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        406 => [[['_route' => 'app_admin_category_show', '_controller' => 'App\\Controller\\Admin\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        444 => [[['_route' => 'app_admin_reclamation_show', '_controller' => 'App\\Controller\\Admin\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        464 => [[['_route' => 'app_admin_reclamation_reply', '_controller' => 'App\\Controller\\Admin\\ReclamationController::reply'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        477 => [[['_route' => 'app_admin_reclamation_respond', '_controller' => 'App\\Controller\\Admin\\ReclamationController::respond'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        492 => [[['_route' => 'app_admin_reclamation_delete', '_controller' => 'App\\Controller\\Admin\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        514 => [[['_route' => 'app_admin_reclamation_change_status', '_controller' => 'App\\Controller\\Admin\\ReclamationController::changeStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        543 => [[['_route' => 'app_admin_reclamation_update_all_status', '_controller' => 'App\\Controller\\Admin\\ReclamationController::updateAllStatus'], [], ['GET' => 0], null, false, false, null]],
        571 => [[['_route' => 'app_admin_reclamation_fix_status', '_controller' => 'App\\Controller\\Admin\\ReclamationController::fixStatus'], ['id'], ['GET' => 0], null, false, false, null]],
        610 => [[['_route' => 'app_admin_reservation_edit', '_controller' => 'App\\Controller\\Admin\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        624 => [[['_route' => 'app_admin_reservation_delete', '_controller' => 'App\\Controller\\Admin\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        633 => [[['_route' => 'app_admin_reservation_show', '_controller' => 'App\\Controller\\Admin\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        670 => [[['_route' => 'app_admin_trajet_edit', '_controller' => 'App\\Controller\\Admin\\TrajetController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        684 => [[['_route' => 'app_admin_trajet_delete', '_controller' => 'App\\Controller\\Admin\\TrajetController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        693 => [[['_route' => 'app_admin_trajet_show', '_controller' => 'App\\Controller\\Admin\\TrajetController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        721 => [[['_route' => 'app_avis_show', '_controller' => 'App\\Controller\\AvisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        734 => [[['_route' => 'app_avis_edit', '_controller' => 'App\\Controller\\AvisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        742 => [[['_route' => 'app_avis_delete', '_controller' => 'App\\Controller\\AvisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        755 => [[['_route' => 'app_avis_list', '_controller' => 'App\\Controller\\AvisController::list'], [], null, null, false, false, null]],
        807 => [[['_route' => 'app_chat_conversation', '_controller' => 'App\\Controller\\ChatController::conversation'], ['reservationId', 'type'], null, null, false, true, null]],
        837 => [[['_route' => 'app_chat_send', '_controller' => 'App\\Controller\\ChatController::sendMessage'], ['reservationId', 'type'], ['POST' => 0], null, false, true, null]],
        890 => [[['_route' => 'app_chat_get_new_messages', '_controller' => 'App\\Controller\\ChatController::getNewMessages'], ['reservationId', 'type', 'lastId'], ['GET' => 0], null, false, true, null]],
        935 => [[['_route' => 'app_conducteur_reclamation_show', '_controller' => 'App\\Controller\\ConducteurController::reclamationShow'], ['id'], null, null, false, true, null]],
        970 => [[['_route' => 'app_conducteur_refuser_reservation', '_controller' => 'App\\Controller\\ConducteurController::refuserReservation'], ['id'], ['POST' => 0], null, false, true, null]],
        1015 => [[['_route' => 'app_conducteur_accepter_reservation', '_controller' => 'App\\Controller\\ConducteurController::accepterReservation'], ['id'], ['POST' => 0], null, false, true, null]],
        1040 => [[['_route' => 'app_conducteur_accepter_reservation_event', '_controller' => 'App\\Controller\\ConducteurController::accepterReservationEvent'], ['id'], ['POST' => 0], null, false, true, null]],
        1073 => [[['_route' => 'app_api_car_models', '_controller' => 'App\\Controller\\ConducteurController::getCarModels'], ['makeId'], ['GET' => 0], null, false, true, null]],
        1109 => [[['_route' => 'app_conducteur_terminer_annonce', '_controller' => 'App\\Controller\\ConducteurController::terminerAnnonce'], ['id'], ['POST' => 0], null, false, true, null]],
        1150 => [[['_route' => 'app_conducteur_modifier_annonce', '_controller' => 'App\\Controller\\ConducteurController::modifierAnnonce'], ['id'], null, null, false, true, null]],
        1166 => [[['_route' => 'app_conducteur_modifier_annonce_submit', '_controller' => 'App\\Controller\\ConducteurController::modifierAnnonceSubmit'], ['id'], ['POST' => 0], null, false, false, null]],
        1194 => [[['_route' => 'app_conducteur_modifier_trajet', '_controller' => 'App\\Controller\\ConducteurController::modifierTrajet'], ['id'], null, null, false, true, null]],
        1210 => [[['_route' => 'app_conducteur_modifier_trajet_submit', '_controller' => 'App\\Controller\\ConducteurController::modifierTrajetSubmit'], ['id'], ['POST' => 0], null, false, false, null]],
        1251 => [[['_route' => 'app_conducteur_supprimer_annonce', '_controller' => 'App\\Controller\\ConducteurController::supprimerAnnonce'], ['id'], ['GET' => 0], null, false, true, null]],
        1275 => [[['_route' => 'app_conducteur_supprimer_trajet', '_controller' => 'App\\Controller\\ConducteurController::supprimerTrajet'], ['id'], ['GET' => 0], null, false, true, null]],
        1324 => [[['_route' => 'app_conducteur_event_edit', '_controller' => 'App\\Controller\\ConducteurController::editEvent'], ['id'], null, null, false, false, null]],
        1339 => [[['_route' => 'app_conducteur_event_delete', '_controller' => 'App\\Controller\\ConducteurController::deleteEvent'], ['id'], ['POST' => 0], null, false, false, null]],
        1359 => [[['_route' => 'app_conducteur_event_annonces', '_controller' => 'App\\Controller\\ConducteurController::eventAnnonces'], ['id'], null, null, false, false, null]],
        1375 => [[['_route' => 'app_conducteur_event_annonce_create', '_controller' => 'App\\Controller\\ConducteurController::createEventAnnonce'], ['id'], null, null, false, false, null]],
        1410 => [[['_route' => 'app_conducteur_event_annonce_edit', '_controller' => 'App\\Controller\\ConducteurController::editEventAnnonce'], ['id'], null, null, false, false, null]],
        1425 => [[['_route' => 'app_conducteur_event_annonce_delete', '_controller' => 'App\\Controller\\ConducteurController::deleteEventAnnonce'], ['id'], ['POST' => 0], null, false, false, null]],
        1442 => [[['_route' => 'app_conducteur_event_annonce_terminer', '_controller' => 'App\\Controller\\ConducteurController::terminerEventAnnonce'], ['id'], ['POST' => 0], null, false, false, null]],
        1480 => [[['_route' => 'app_conducteur_event_terminer_all', '_controller' => 'App\\Controller\\ConducteurController::terminerAllEventAnnonce'], ['id'], ['POST' => 0], null, false, false, null]],
        1501 => [[['_route' => 'app_conducteur_event_participants', '_controller' => 'App\\Controller\\ConducteurController::eventParticipants'], ['id'], null, null, false, false, null]],
        1511 => [[['_route' => 'app_conducteur_event_show', '_controller' => 'App\\Controller\\ConducteurController::showEvent'], ['id'], null, null, false, true, null]],
        1557 => [[['_route' => 'app_conducteur_refuser_reservation_event', '_controller' => 'App\\Controller\\ConducteurController::refuserReservationEvent'], ['id'], ['POST' => 0], null, false, false, null]],
        1585 => [[['_route' => 'app_events_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], null, null, false, true, null]],
        1614 => [[['_route' => 'app_map_trajet', '_controller' => 'App\\Controller\\MapController::showTrajetMap'], ['id'], null, null, false, true, null]],
        1667 => [[['_route' => 'app_passager_modifier_trajet', '_controller' => 'App\\Controller\\PassagerController::modifierTrajet'], ['id'], null, null, false, true, null]],
        1683 => [[['_route' => 'app_passager_modifier_trajet_submit', '_controller' => 'App\\Controller\\PassagerController::modifierTrajetSubmit'], ['id'], ['POST' => 0], null, false, false, null]],
        1712 => [[['_route' => 'app_passager_modifier_annonce', '_controller' => 'App\\Controller\\PassagerController::modifierAnnonce'], ['id'], null, null, false, true, null]],
        1728 => [[['_route' => 'app_passager_modifier_annonce_submit', '_controller' => 'App\\Controller\\PassagerController::modifierAnnonceSubmit'], ['id'], ['POST' => 0], null, false, false, null]],
        1768 => [[['_route' => 'app_passager_supprimer_trajet', '_controller' => 'App\\Controller\\PassagerController::supprimerTrajet'], ['id'], ['POST' => 0], null, false, true, null]],
        1793 => [[['_route' => 'app_passager_supprimer_annonce', '_controller' => 'App\\Controller\\PassagerController::supprimerAnnonce'], ['id'], ['POST' => 0], null, false, true, null]],
        1831 => [[['_route' => 'app_passager_reservation_create', '_controller' => 'App\\Controller\\PassagerController::createReservation'], ['id'], null, null, false, true, null]],
        1869 => [[['_route' => 'app_passager_annuler_reservation', '_controller' => 'App\\Controller\\PassagerController::annulerReservation'], ['id'], ['POST' => 0], null, false, true, null]],
        1910 => [[['_route' => 'app_passager_event_show', '_controller' => 'App\\Controller\\PassagerController::showEvent'], ['id'], null, null, false, true, null]],
        1933 => [[['_route' => 'app_passager_event_participer', '_controller' => 'App\\Controller\\PassagerController::participerEvent'], ['id'], ['POST' => 0], null, false, false, null]],
        1967 => [[['_route' => 'app_passager_event_annuler_participation', '_controller' => 'App\\Controller\\PassagerController::annulerParticipationEvent'], ['id'], ['POST' => 0], null, false, false, null]],
        1981 => [[['_route' => 'app_passager_event_annonces', '_controller' => 'App\\Controller\\PassagerController::eventAnnonces'], ['id'], null, null, false, false, null]],
        2018 => [[['_route' => 'app_passager_event_annonce_reserver', '_controller' => 'App\\Controller\\PassagerController::reserverEventAnnonce'], ['id'], null, null, false, false, null]],
        2063 => [[['_route' => 'app_passager_reservation_event_annuler', '_controller' => 'App\\Controller\\PassagerController::annulerReservationEvent'], ['id'], ['POST' => 0], null, false, false, null]],
        2104 => [[['_route' => 'app_passager_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2116 => [[['_route' => 'app_passager_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], [], null, null, false, false, null]],
        2141 => [[['_route' => 'app_passager_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2150 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2183 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
        2206 => [[['_route' => 'app_rides_show', '_controller' => 'App\\Controller\\RideController::show'], ['id'], null, null, false, true, null]],
        2239 => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\SecurityController::verifyEmail'], ['token'], null, null, false, true, null]],
        2284 => [[['_route' => 'app_admin_user_delete', '_controller' => 'App\\Controller\\UserController::deleteUser'], ['id'], ['POST' => 0], null, false, false, null]],
        2304 => [[['_route' => 'app_user_edit_roles', '_controller' => 'App\\Controller\\UserController::editRoles'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2316 => [
            [['_route' => 'app_admin_user_ban', '_controller' => 'App\\Controller\\UserController::banUser'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
