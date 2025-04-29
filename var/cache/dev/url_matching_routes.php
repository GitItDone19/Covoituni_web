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
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:35)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:73)'
                    .'|wdt/([^/]++)(*:92)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:133)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:170)'
                                .'|router(*:184)'
                                .'|exception(?'
                                    .'|(*:204)'
                                    .'|\\.css(*:217)'
                                .')'
                            .')'
                            .'|(*:227)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|annonces(?'
                            .'|/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:282)'
                                    .'|terminate(*:299)'
                                    .'|delete(*:313)'
                                .')'
                                .'|(*:322)'
                            .')'
                            .'|\\-event/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:358)'
                                    .'|delete(*:372)'
                                .')'
                                .'|(*:381)'
                            .')'
                        .')'
                        .'|category/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:419)'
                                .'|delete(*:433)'
                            .')'
                            .'|(*:442)'
                        .')'
                        .'|re(?'
                            .'|clamation/(?'
                                .'|([^/]++)(?'
                                    .'|(*:480)'
                                    .'|/(?'
                                        .'|re(?'
                                            .'|ply(*:500)'
                                            .'|spond(*:513)'
                                        .')'
                                        .'|delete(*:528)'
                                        .'|change\\-status(*:550)'
                                    .')'
                                .')'
                                .'|update\\-all\\-status(*:579)'
                                .'|([^/]++)/fix\\-status(*:607)'
                            .')'
                            .'|servations/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:646)'
                                    .'|delete(*:660)'
                                .')'
                                .'|(*:669)'
                            .')'
                        .')'
                        .'|trajets/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:706)'
                                .'|delete(*:720)'
                            .')'
                            .'|(*:729)'
                        .')'
                    .')'
                    .'|vis/(?'
                        .'|([^/]++)(?'
                            .'|(*:757)'
                            .'|/edit(*:770)'
                            .'|(*:778)'
                        .')'
                        .'|list(*:791)'
                    .')'
                .')'
                .'|/c(?'
                    .'|hat/(?'
                        .'|conversation/([^/]++)/([^/]++)(*:843)'
                        .'|send/([^/]++)/([^/]++)(*:873)'
                        .'|get\\-new\\-messages/([^/]++)/([^/]++)/([^/]++)(*:926)'
                    .')'
                    .'|onducteur/(?'
                        .'|re(?'
                            .'|clamation/([^/]++)(*:971)'
                            .'|fuser\\-reservation/([^/]++)(*:1006)'
                        .')'
                        .'|a(?'
                            .'|ccepter\\-reservation(?'
                                .'|/([^/]++)(*:1052)'
                                .'|\\-event/([^/]++)(*:1077)'
                            .')'
                            .'|pi/car\\-models/([^/]++)(*:1110)'
                        .')'
                        .'|terminer\\-annonce/([^/]++)(*:1146)'
                        .'|modifier\\-(?'
                            .'|annonce/([^/]++)(?'
                                .'|(*:1187)'
                                .'|/submit(*:1203)'
                            .')'
                            .'|trajet/([^/]++)(?'
                                .'|(*:1231)'
                                .'|/submit(*:1247)'
                            .')'
                        .')'
                        .'|supprimer\\-(?'
                            .'|annonce/([^/]++)(*:1288)'
                            .'|trajet/([^/]++)(*:1312)'
                        .')'
                        .'|conducteur/(?'
                            .'|event/(?'
                                .'|([^/]++)/(?'
                                    .'|edit(*:1361)'
                                    .'|delete(*:1376)'
                                    .'|annonce(?'
                                        .'|s(*:1396)'
                                        .'|/create(*:1412)'
                                    .')'
                                .')'
                                .'|annonce/([^/]++)/(?'
                                    .'|edit(*:1447)'
                                    .'|delete(*:1462)'
                                    .'|terminer(*:1479)'
                                .')'
                                .'|([^/]++)(?'
                                    .'|/(?'
                                        .'|terminer\\-all(*:1517)'
                                        .'|participants(*:1538)'
                                    .')'
                                    .'|(*:1548)'
                                .')'
                            .')'
                            .'|reservation/([^/]++)/refuser\\-event(*:1594)'
                        .')'
                    .')'
                .')'
                .'|/events/([^/]++)(*:1622)'
                .'|/map/trajet/([^/]++)(*:1651)'
                .'|/passager/(?'
                    .'|modifier\\-(?'
                        .'|trajet/([^/]++)(?'
                            .'|(*:1704)'
                            .'|/submit(*:1720)'
                        .')'
                        .'|annonce/([^/]++)(?'
                            .'|(*:1749)'
                            .'|/submit(*:1765)'
                        .')'
                    .')'
                    .'|supprimer\\-(?'
                        .'|trajet/([^/]++)(*:1805)'
                        .'|annonce/([^/]++)(*:1830)'
                    .')'
                    .'|reservation\\-create/([^/]++)(*:1868)'
                    .'|annuler\\-reservation/([^/]++)(*:1906)'
                    .'|passager/(?'
                        .'|event/(?'
                            .'|([^/]++)(?'
                                .'|(*:1947)'
                                .'|/(?'
                                    .'|participer(*:1970)'
                                    .'|ann(?'
                                        .'|uler\\-participation(*:2004)'
                                        .'|onces(*:2018)'
                                    .')'
                                .')'
                            .')'
                            .'|annonce/([^/]++)/reserver(*:2055)'
                        .')'
                        .'|reservation\\-event/([^/]++)/annuler(*:2100)'
                    .')'
                .')'
                .'|/r(?'
                    .'|e(?'
                        .'|clamation/(?'
                            .'|([^/]++)(*:2141)'
                            .'|new(*:2153)'
                            .'|([^/]++)(?'
                                .'|/edit(*:2178)'
                                .'|(*:2187)'
                            .')'
                        .')'
                        .'|set\\-password/([^/]++)(*:2220)'
                    .')'
                    .'|ides/([^/]++)(*:2243)'
                .')'
                .'|/verify\\-email/([^/]++)(*:2276)'
                .'|/user/admin/users/([^/]++)/(?'
                    .'|delete(*:2321)'
                    .'|edit\\-roles(*:2341)'
                    .'|ban(*:2353)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        73 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        92 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        133 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        170 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        184 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        204 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        217 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        227 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        282 => [[['_route' => 'app_admin_annonce_edit', '_controller' => 'App\\Controller\\Admin\\AnnonceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        299 => [[['_route' => 'app_admin_annonce_terminate', '_controller' => 'App\\Controller\\Admin\\AnnonceController::terminate'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        313 => [[['_route' => 'app_admin_annonce_delete', '_controller' => 'App\\Controller\\Admin\\AnnonceController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        322 => [[['_route' => 'app_admin_annonce_show', '_controller' => 'App\\Controller\\Admin\\AnnonceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        358 => [[['_route' => 'app_admin_annonce_event_edit', '_controller' => 'App\\Controller\\Admin\\AnnonceEventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        372 => [[['_route' => 'app_admin_annonce_event_delete', '_controller' => 'App\\Controller\\Admin\\AnnonceEventController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        381 => [[['_route' => 'app_admin_annonce_event_show', '_controller' => 'App\\Controller\\Admin\\AnnonceEventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        419 => [[['_route' => 'app_admin_category_edit', '_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        433 => [[['_route' => 'app_admin_category_delete', '_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        442 => [[['_route' => 'app_admin_category_show', '_controller' => 'App\\Controller\\Admin\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        480 => [[['_route' => 'app_admin_reclamation_show', '_controller' => 'App\\Controller\\Admin\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        500 => [[['_route' => 'app_admin_reclamation_reply', '_controller' => 'App\\Controller\\Admin\\ReclamationController::reply'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        513 => [[['_route' => 'app_admin_reclamation_respond', '_controller' => 'App\\Controller\\Admin\\ReclamationController::respond'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        528 => [[['_route' => 'app_admin_reclamation_delete', '_controller' => 'App\\Controller\\Admin\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        550 => [[['_route' => 'app_admin_reclamation_change_status', '_controller' => 'App\\Controller\\Admin\\ReclamationController::changeStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        579 => [[['_route' => 'app_admin_reclamation_update_all_status', '_controller' => 'App\\Controller\\Admin\\ReclamationController::updateAllStatus'], [], ['GET' => 0], null, false, false, null]],
        607 => [[['_route' => 'app_admin_reclamation_fix_status', '_controller' => 'App\\Controller\\Admin\\ReclamationController::fixStatus'], ['id'], ['GET' => 0], null, false, false, null]],
        646 => [[['_route' => 'app_admin_reservation_edit', '_controller' => 'App\\Controller\\Admin\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        660 => [[['_route' => 'app_admin_reservation_delete', '_controller' => 'App\\Controller\\Admin\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        669 => [[['_route' => 'app_admin_reservation_show', '_controller' => 'App\\Controller\\Admin\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        706 => [[['_route' => 'app_admin_trajet_edit', '_controller' => 'App\\Controller\\Admin\\TrajetController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        720 => [[['_route' => 'app_admin_trajet_delete', '_controller' => 'App\\Controller\\Admin\\TrajetController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        729 => [[['_route' => 'app_admin_trajet_show', '_controller' => 'App\\Controller\\Admin\\TrajetController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        757 => [[['_route' => 'app_avis_show', '_controller' => 'App\\Controller\\AvisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        770 => [[['_route' => 'app_avis_edit', '_controller' => 'App\\Controller\\AvisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        778 => [[['_route' => 'app_avis_delete', '_controller' => 'App\\Controller\\AvisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        791 => [[['_route' => 'app_avis_list', '_controller' => 'App\\Controller\\AvisController::list'], [], null, null, false, false, null]],
        843 => [[['_route' => 'app_chat_conversation', '_controller' => 'App\\Controller\\ChatController::conversation'], ['reservationId', 'type'], null, null, false, true, null]],
        873 => [[['_route' => 'app_chat_send', '_controller' => 'App\\Controller\\ChatController::sendMessage'], ['reservationId', 'type'], ['POST' => 0], null, false, true, null]],
        926 => [[['_route' => 'app_chat_get_new_messages', '_controller' => 'App\\Controller\\ChatController::getNewMessages'], ['reservationId', 'type', 'lastId'], ['GET' => 0], null, false, true, null]],
        971 => [[['_route' => 'app_conducteur_reclamation_show', '_controller' => 'App\\Controller\\ConducteurController::reclamationShow'], ['id'], null, null, false, true, null]],
        1006 => [[['_route' => 'app_conducteur_refuser_reservation', '_controller' => 'App\\Controller\\ConducteurController::refuserReservation'], ['id'], ['POST' => 0], null, false, true, null]],
        1052 => [[['_route' => 'app_conducteur_accepter_reservation', '_controller' => 'App\\Controller\\ConducteurController::accepterReservation'], ['id'], ['POST' => 0], null, false, true, null]],
        1077 => [[['_route' => 'app_conducteur_accepter_reservation_event', '_controller' => 'App\\Controller\\ConducteurController::accepterReservationEvent'], ['id'], ['POST' => 0], null, false, true, null]],
        1110 => [[['_route' => 'app_api_car_models', '_controller' => 'App\\Controller\\ConducteurController::getCarModels'], ['makeId'], ['GET' => 0], null, false, true, null]],
        1146 => [[['_route' => 'app_conducteur_terminer_annonce', '_controller' => 'App\\Controller\\ConducteurController::terminerAnnonce'], ['id'], ['POST' => 0], null, false, true, null]],
        1187 => [[['_route' => 'app_conducteur_modifier_annonce', '_controller' => 'App\\Controller\\ConducteurController::modifierAnnonce'], ['id'], null, null, false, true, null]],
        1203 => [[['_route' => 'app_conducteur_modifier_annonce_submit', '_controller' => 'App\\Controller\\ConducteurController::modifierAnnonceSubmit'], ['id'], ['POST' => 0], null, false, false, null]],
        1231 => [[['_route' => 'app_conducteur_modifier_trajet', '_controller' => 'App\\Controller\\ConducteurController::modifierTrajet'], ['id'], null, null, false, true, null]],
        1247 => [[['_route' => 'app_conducteur_modifier_trajet_submit', '_controller' => 'App\\Controller\\ConducteurController::modifierTrajetSubmit'], ['id'], ['POST' => 0], null, false, false, null]],
        1288 => [[['_route' => 'app_conducteur_supprimer_annonce', '_controller' => 'App\\Controller\\ConducteurController::supprimerAnnonce'], ['id'], ['GET' => 0], null, false, true, null]],
        1312 => [[['_route' => 'app_conducteur_supprimer_trajet', '_controller' => 'App\\Controller\\ConducteurController::supprimerTrajet'], ['id'], ['GET' => 0], null, false, true, null]],
        1361 => [[['_route' => 'app_conducteur_event_edit', '_controller' => 'App\\Controller\\ConducteurController::editEvent'], ['id'], null, null, false, false, null]],
        1376 => [[['_route' => 'app_conducteur_event_delete', '_controller' => 'App\\Controller\\ConducteurController::deleteEvent'], ['id'], ['POST' => 0], null, false, false, null]],
        1396 => [[['_route' => 'app_conducteur_event_annonces', '_controller' => 'App\\Controller\\ConducteurController::eventAnnonces'], ['id'], null, null, false, false, null]],
        1412 => [[['_route' => 'app_conducteur_event_annonce_create', '_controller' => 'App\\Controller\\ConducteurController::createEventAnnonce'], ['id'], null, null, false, false, null]],
        1447 => [[['_route' => 'app_conducteur_event_annonce_edit', '_controller' => 'App\\Controller\\ConducteurController::editEventAnnonce'], ['id'], null, null, false, false, null]],
        1462 => [[['_route' => 'app_conducteur_event_annonce_delete', '_controller' => 'App\\Controller\\ConducteurController::deleteEventAnnonce'], ['id'], ['POST' => 0], null, false, false, null]],
        1479 => [[['_route' => 'app_conducteur_event_annonce_terminer', '_controller' => 'App\\Controller\\ConducteurController::terminerEventAnnonce'], ['id'], ['POST' => 0], null, false, false, null]],
        1517 => [[['_route' => 'app_conducteur_event_terminer_all', '_controller' => 'App\\Controller\\ConducteurController::terminerAllEventAnnonce'], ['id'], ['POST' => 0], null, false, false, null]],
        1538 => [[['_route' => 'app_conducteur_event_participants', '_controller' => 'App\\Controller\\ConducteurController::eventParticipants'], ['id'], null, null, false, false, null]],
        1548 => [[['_route' => 'app_conducteur_event_show', '_controller' => 'App\\Controller\\ConducteurController::showEvent'], ['id'], null, null, false, true, null]],
        1594 => [[['_route' => 'app_conducteur_refuser_reservation_event', '_controller' => 'App\\Controller\\ConducteurController::refuserReservationEvent'], ['id'], ['POST' => 0], null, false, false, null]],
        1622 => [[['_route' => 'app_events_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], null, null, false, true, null]],
        1651 => [[['_route' => 'app_map_trajet', '_controller' => 'App\\Controller\\MapController::showTrajetMap'], ['id'], null, null, false, true, null]],
        1704 => [[['_route' => 'app_passager_modifier_trajet', '_controller' => 'App\\Controller\\PassagerController::modifierTrajet'], ['id'], null, null, false, true, null]],
        1720 => [[['_route' => 'app_passager_modifier_trajet_submit', '_controller' => 'App\\Controller\\PassagerController::modifierTrajetSubmit'], ['id'], ['POST' => 0], null, false, false, null]],
        1749 => [[['_route' => 'app_passager_modifier_annonce', '_controller' => 'App\\Controller\\PassagerController::modifierAnnonce'], ['id'], null, null, false, true, null]],
        1765 => [[['_route' => 'app_passager_modifier_annonce_submit', '_controller' => 'App\\Controller\\PassagerController::modifierAnnonceSubmit'], ['id'], ['POST' => 0], null, false, false, null]],
        1805 => [[['_route' => 'app_passager_supprimer_trajet', '_controller' => 'App\\Controller\\PassagerController::supprimerTrajet'], ['id'], ['POST' => 0], null, false, true, null]],
        1830 => [[['_route' => 'app_passager_supprimer_annonce', '_controller' => 'App\\Controller\\PassagerController::supprimerAnnonce'], ['id'], ['POST' => 0], null, false, true, null]],
        1868 => [[['_route' => 'app_passager_reservation_create', '_controller' => 'App\\Controller\\PassagerController::createReservation'], ['id'], null, null, false, true, null]],
        1906 => [[['_route' => 'app_passager_annuler_reservation', '_controller' => 'App\\Controller\\PassagerController::annulerReservation'], ['id'], ['POST' => 0], null, false, true, null]],
        1947 => [[['_route' => 'app_passager_event_show', '_controller' => 'App\\Controller\\PassagerController::showEvent'], ['id'], null, null, false, true, null]],
        1970 => [[['_route' => 'app_passager_event_participer', '_controller' => 'App\\Controller\\PassagerController::participerEvent'], ['id'], ['POST' => 0], null, false, false, null]],
        2004 => [[['_route' => 'app_passager_event_annuler_participation', '_controller' => 'App\\Controller\\PassagerController::annulerParticipationEvent'], ['id'], ['POST' => 0], null, false, false, null]],
        2018 => [[['_route' => 'app_passager_event_annonces', '_controller' => 'App\\Controller\\PassagerController::eventAnnonces'], ['id'], null, null, false, false, null]],
        2055 => [[['_route' => 'app_passager_event_annonce_reserver', '_controller' => 'App\\Controller\\PassagerController::reserverEventAnnonce'], ['id'], null, null, false, false, null]],
        2100 => [[['_route' => 'app_passager_reservation_event_annuler', '_controller' => 'App\\Controller\\PassagerController::annulerReservationEvent'], ['id'], ['POST' => 0], null, false, false, null]],
        2141 => [[['_route' => 'app_passager_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2153 => [[['_route' => 'app_passager_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], [], null, null, false, false, null]],
        2178 => [[['_route' => 'app_passager_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2187 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2220 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
        2243 => [[['_route' => 'app_rides_show', '_controller' => 'App\\Controller\\RideController::show'], ['id'], null, null, false, true, null]],
        2276 => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\SecurityController::verifyEmail'], ['token'], null, null, false, true, null]],
        2321 => [[['_route' => 'app_admin_user_delete', '_controller' => 'App\\Controller\\UserController::deleteUser'], ['id'], ['POST' => 0], null, false, false, null]],
        2341 => [[['_route' => 'app_user_edit_roles', '_controller' => 'App\\Controller\\UserController::editRoles'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2353 => [
            [['_route' => 'app_admin_user_ban', '_controller' => 'App\\Controller\\UserController::banUser'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
