<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/abonnement' => [[['_route' => 'app_abonnement', '_controller' => 'App\\Controller\\AbonnementController::index'], null, null, null, false, false, null]],
        '/showabonnement' => [[['_route' => 'app_showabonnement', '_controller' => 'App\\Controller\\AbonnementController::showabonnement'], null, null, null, false, false, null]],
        '/admin/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/showproduct' => [[['_route' => 'app_showproduct', '_controller' => 'App\\Controller\\AdminController::showporduct'], null, null, null, false, false, null]],
        '/admin/addproduct' => [[['_route' => 'app_addproduct', '_controller' => 'App\\Controller\\AdminController::addporduct'], null, null, null, false, false, null]],
        '/generatePDF' => [[['_route' => 'app_generatePDF', '_controller' => 'App\\Controller\\CategorieController::PDF'], null, null, null, false, false, null]],
        '/showcategoryAll' => [[['_route' => 'app_catAll', '_controller' => 'App\\Controller\\CategorieController::showcategorie'], null, null, null, false, false, null]],
        '/admin.showcategory' => [[['_route' => 'admin.category.show', '_controller' => 'App\\Controller\\CategorieController::adminshowcategorie'], null, null, null, false, false, null]],
        '/showcategory' => [[['_route' => 'app_showcat', '_controller' => 'App\\Controller\\CategorieController::searchbynamee'], null, null, null, false, false, null]],
        '/showcategoryVisiteur' => [[['_route' => 'app_showcatVisiteur', '_controller' => 'App\\Controller\\CategorieController::searchbyNameV'], null, null, null, false, false, null]],
        '/category.add' => [[['_route' => 'category.add', '_controller' => 'App\\Controller\\CategorieController::addcategorie'], null, null, null, false, false, null]],
        '/admin.category.add' => [[['_route' => 'admin.category.add', '_controller' => 'App\\Controller\\CategorieController::adminaddcategorie'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande', '_controller' => 'App\\Controller\\CommandeController::index'], null, null, null, false, false, null]],
        '/sheckout' => [[['_route' => 'app_sheckout', '_controller' => 'App\\Controller\\CommandeController::checkout'], null, null, null, false, false, null]],
        '/search-commande' => [[['_route' => 'search_commande', '_controller' => 'App\\Controller\\CommandeController::searchCommande'], null, ['GET' => 0], null, false, false, null]],
        '/cours' => [[['_route' => 'app_cours', '_controller' => 'App\\Controller\\CoursController::index'], null, null, null, false, false, null]],
        '/admin.cource.showlist' => [[['_route' => 'admin.cource.showlist', '_controller' => 'App\\Controller\\CoursController::adminshowcours'], null, null, null, false, false, null]],
        '/cource.showlist' => [[['_route' => 'cource.showlist', '_controller' => 'App\\Controller\\CoursController::showcours'], null, null, null, false, false, null]],
        '/prof.cours.add' => [[['_route' => 'prof.cours.add', '_controller' => 'App\\Controller\\CoursController::addcours'], null, null, null, false, false, null]],
        '/admin.cours.add' => [[['_route' => 'admin.cours.add', '_controller' => 'App\\Controller\\CoursController::adminaddcours'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::statics'], null, null, null, false, false, null]],
        '/email' => [[['_route' => 'app_email', '_controller' => 'App\\Controller\\EmailController::index'], null, null, null, false, false, null]],
        '/evenement' => [[['_route' => 'app_evenement', '_controller' => 'App\\Controller\\EvenementController::index'], null, null, null, false, false, null]],
        '/showevenementprofesseur' => [[['_route' => 'showevenementp', '_controller' => 'App\\Controller\\EvenementController::showevenementp'], null, null, null, false, false, null]],
        '/addevenementprofesseur' => [[['_route' => 'addevenement', '_controller' => 'App\\Controller\\EvenementController::addevenement'], null, null, null, false, false, null]],
        '/showevenementenfant' => [[['_route' => 'showevenemente', '_controller' => 'App\\Controller\\EvenementController::showquestionn'], null, null, null, false, false, null]],
        '/showevenementadmin' => [[['_route' => 'showevenements', '_controller' => 'App\\Controller\\EvenementController::showquestions'], null, null, null, false, false, null]],
        '/showevenementparent' => [[['_route' => 'showevenementpa', '_controller' => 'App\\Controller\\EvenementController::showevenement'], null, null, null, false, false, null]],
        '/addevenementadmin' => [[['_route' => 'addevenemente', '_controller' => 'App\\Controller\\EvenementController::addevenements'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/home1' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index1'], null, null, null, false, false, null]],
        '/home2' => [[['_route' => 'home2', '_controller' => 'App\\Controller\\HomeController::index2'], null, null, null, false, false, null]],
        '/showParticipationenfant' => [[['_route' => 'showParticipatione', '_controller' => 'App\\Controller\\ParticipationController::showquestion'], null, null, null, false, false, null]],
        '/showParticipationparent' => [[['_route' => 'showParticipationpa', '_controller' => 'App\\Controller\\ParticipationController::showquestionp'], null, null, null, false, false, null]],
        '/showParticipationadmin' => [[['_route' => 'showParticipationa', '_controller' => 'App\\Controller\\ParticipationController::showquestionn'], null, null, null, false, false, null]],
        '/showParticipationprof' => [[['_route' => 'showParticipationpr', '_controller' => 'App\\Controller\\ParticipationController::show'], null, null, null, false, false, null]],
        '/payment' => [[['_route' => 'app_payment', '_controller' => 'App\\Controller\\PaymentController::payment'], null, null, null, false, false, null]],
        '/success_url' => [[['_route' => 'app_success_url', '_controller' => 'App\\Controller\\PaymentController::successUrl'], null, null, null, false, false, null]],
        '/cancel_url' => [[['_route' => 'app_cancel_url', '_controller' => 'App\\Controller\\PaymentController::cancelUrl'], null, null, null, false, false, null]],
        '/question' => [[['_route' => 'app_question', '_controller' => 'App\\Controller\\QuestionFirasController::index'], null, null, null, false, false, null]],
        '/add_question' => [[['_route' => 'add_question', '_controller' => 'App\\Controller\\QuestionFirasController::add'], null, null, null, false, false, null]],
        '/afficher_qestion' => [[['_route' => 'afficher_qestion', '_controller' => 'App\\Controller\\QuestionFirasController::AfficheQuestion'], null, null, null, false, false, null]],
        '/afficher_qestion22' => [[['_route' => 'afficher_qestion22', '_controller' => 'App\\Controller\\QuestionFirasController::AfficheQuestion22'], null, null, null, false, false, null]],
        '/afficher_questions_plus_de_cinq_likes' => [[['_route' => 'afficher_questions_plus_de_cinq_likes', '_controller' => 'App\\Controller\\QuestionFirasController::afficherQuestionsPlusDeCinqLikes'], null, null, null, false, false, null]],
        '/statsquestion' => [[['_route' => 'statsquestion', '_controller' => 'App\\Controller\\QuestionFirasController::statistiques'], null, null, null, false, false, null]],
        '/admin/showquestionadmin' => [[['_route' => 'showquestionadmin', '_controller' => 'App\\Controller\\QuestionsAdminController::showquestionadmin'], null, null, null, false, false, null]],
        '/admin/addquestionadmin' => [[['_route' => 'addquestionadmin', '_controller' => 'App\\Controller\\QuestionsAdminController::addquestionadmin'], null, null, null, false, false, null]],
        '/prof/questions' => [[['_route' => 'app_questions', '_controller' => 'App\\Controller\\QuestionsController::index'], null, null, null, false, false, null]],
        '/prof/showquestion' => [[['_route' => 'showquestion', '_controller' => 'App\\Controller\\QuestionsController::showquestion'], null, null, null, false, false, null]],
        '/prof/addquestion' => [[['_route' => 'addquestion', '_controller' => 'App\\Controller\\QuestionsController::addquestion'], null, null, null, false, false, null]],
        '/admin/showquizzadmin' => [[['_route' => 'showquizzadmin', '_controller' => 'App\\Controller\\QuizzAdminController::showquizzadmin'], null, null, null, false, false, null]],
        '/admin/addquizzadmin' => [[['_route' => 'addquizzadmin', '_controller' => 'App\\Controller\\QuizzAdminController::addquizzadmin'], null, null, null, false, false, null]],
        '/prof/quizz' => [[['_route' => 'app_quizz', '_controller' => 'App\\Controller\\QuizzController::index'], null, null, null, false, false, null]],
        '/prof/showquizz' => [[['_route' => 'showquizz', '_controller' => 'App\\Controller\\QuizzController::showquizz'], null, null, null, false, false, null]],
        '/prof/addquizz' => [[['_route' => 'addquizz', '_controller' => 'App\\Controller\\QuizzController::addquizz'], null, null, null, false, false, null]],
        '/child/showallquizz' => [[['_route' => 'showallquizz', '_controller' => 'App\\Controller\\QuizzEnfantController::showallquizz'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reponse' => [[['_route' => 'app_reponse', '_controller' => 'App\\Controller\\ReponseFirasController::index'], null, null, null, false, false, null]],
        '/add_Reponse' => [[['_route' => 'add_Reponse', '_controller' => 'App\\Controller\\ReponseFirasController::Add'], null, null, null, false, false, null]],
        '/afficher_reponse' => [[['_route' => 'afficher_reponse', '_controller' => 'App\\Controller\\ReponseFirasController::AfficheReponse'], null, null, null, false, false, null]],
        '/afficher_reponse22' => [[['_route' => 'afficher_reponse22', '_controller' => 'App\\Controller\\ReponseFirasController::AfficheReponse22'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/newressource' => [[['_route' => 'app_ressource.add', '_controller' => 'App\\Controller\\RessourceController::new'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/login_check' => [[['_route' => 'login_check', '_controller' => 'App\\Controller\\SecurityController::loginCheck'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/store' => [[['_route' => 'app_store', '_controller' => 'App\\Controller\\StoreController::store'], null, null, null, false, false, null]],
        '/test/enfant' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::enfant'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::showUser'], null, null, null, false, false, null]],
        '/admin/produit' => [[['_route' => 'user.produit', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/admin/user/show1' => [[['_route' => 'user.show1', '_controller' => 'App\\Controller\\UserController::showUser1'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|d(?'
                        .'|d(?'
                            .'|abonnement/([^/]++)(*:39)'
                            .'|participation/([^/]++)(*:68)'
                            .'|tocart/([^/]++)/([^/]++)(*:99)'
                        .')'
                        .'|min(?'
                            .'|/(?'
                                .'|u(?'
                                    .'|pdateproduct/([^/]++)(*:142)'
                                    .'|ser/(?'
                                        .'|show/([^/]++)(*:170)'
                                        .'|a(?'
                                            .'|dd(?:/([^/]++))?(*:198)'
                                            .'|ctiver/([^/]++)(*:221)'
                                        .')'
                                    .')'
                                .')'
                                .'|removeproduct/([^/]++)(*:254)'
                                .'|de(?'
                                    .'|tailsproduct/([^/]++)(*:288)'
                                    .'|lete(?'
                                        .'|comment/([^/]++)/([^/]++)(*:328)'
                                        .'|qu(?'
                                            .'|estionadmin/([^/]++)(*:361)'
                                            .'|izzadmin/([^/]++)(*:386)'
                                        .')'
                                    .')'
                                .')'
                                .'|editqu(?'
                                    .'|estionadmin/([^/]++)(*:426)'
                                    .'|izzadmin/([^/]++)(*:451)'
                                .')'
                            .')'
                            .'|delete(?'
                                .'|categorie/([^/]++)(*:488)'
                                .'|ressource/([^/]++)(*:514)'
                            .')'
                            .'|edit(?'
                                .'|categorie/([^/]++)(*:548)'
                                .'|ressouce/([^/]++)(*:573)'
                            .')'
                            .'|\\.cours\\.(?'
                                .'|delete/([^/]++)(*:609)'
                                .'|edit/([^/]++)(*:630)'
                                .'|valid/([^/]++)(*:652)'
                            .')'
                            .'|user/delete/([^/]++)(*:681)'
                        .')'
                    .')'
                    .'|llcommand/([^/]++)(*:709)'
                .')'
                .'|/d(?'
                    .'|elete(?'
                        .'|abonnement/([^/]++)(*:750)'
                        .'|categorie/([^/]++)(*:776)'
                        .'|evenement(?'
                            .'|/([^/]++)(*:805)'
                            .'|admin/([^/]++)(*:827)'
                        .')'
                        .'|Participation(?'
                            .'|/([^/]++)(?'
                                .'|(*:864)'
                            .')'
                            .'|a/([^/]++)(*:883)'
                            .'|p/([^/]++)(*:901)'
                        .')'
                        .'|_a(?'
                            .'|b/([^/]++)(*:925)'
                            .'|dh/([^/]++)(*:944)'
                        .')'
                        .'|ressource/([^/]++)(*:971)'
                    .')'
                    .'|islike/([^/]++)(*:995)'
                .')'
                .'|/e(?'
                    .'|dit(?'
                        .'|abonnement/([^/]++)(*:1034)'
                        .'|categorie/([^/]++)(*:1061)'
                        .'|evenement(?'
                            .'|professeur/([^/]++)(*:1101)'
                            .'|admin/([^/]++)(*:1124)'
                        .')'
                        .'|ressource/([^/]++)(*:1152)'
                    .')'
                    .'|nfant\\.cources/([^/]++)(*:1185)'
                .')'
                .'|/s(?'
                    .'|how(?'
                        .'|categorybyid/([^/]++)(*:1227)'
                        .'|Details/([^/]++)(*:1252)'
                    .')'
                    .'|end_message/([^/]++)(*:1282)'
                .')'
                .'|/facture/([^/]++)(*:1309)'
                .'|/re(?'
                    .'|movecomment/([^/]++)/([^/]++)(*:1353)'
                    .'|s(?'
                        .'|et\\-password/reset(?:/([^/]++))?(*:1398)'
                        .'|source(?'
                            .'|bycourse/([^/]++)(*:1433)'
                            .'|/([^/]++)(*:1451)'
                            .'|d/([^/]++)(*:1470)'
                        .')'
                    .')'
                .')'
                .'|/update(?'
                    .'|comment/([^/]++)/([^/]++)(*:1517)'
                    .'|_a(?'
                        .'|b/([^/]++)(*:1541)'
                        .'|dh/([^/]++)(*:1561)'
                    .')'
                .')'
                .'|/c(?'
                    .'|ourcebycategory/([^/]++)(*:1601)'
                    .'|hild/(?'
                        .'|historique/([^/]++)(*:1637)'
                        .'|result/([^/]++)(*:1661)'
                        .'|showquizzenfant/([^/]++)(*:1694)'
                    .')'
                .')'
                .'|/prof(?'
                    .'|\\.cours\\.(?'
                        .'|delete/([^/]++)(*:1740)'
                        .'|edit/([^/]++)(*:1762)'
                    .')'
                    .'|/(?'
                        .'|editqu(?'
                            .'|estion/([^/]++)(*:1800)'
                            .'|izz/([^/]++)(*:1821)'
                        .')'
                        .'|deletequ(?'
                            .'|estion/([^/]++)(*:1857)'
                            .'|izz/([^/]++)(*:1878)'
                        .')'
                        .'|questions/([^/]++)(*:1906)'
                        .'|showquizzid/([^/]++)(*:1935)'
                    .')'
                .')'
                .'|/like/([^/]++)(*:1960)'
                .'|/Prof/ressourcebycourse/([^/]++)(*:2001)'
                .'|/viewproduct/([^/]++)(*:2031)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:2071)'
                    .'|wdt/([^/]++)(*:2092)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:2139)'
                            .'|router(*:2154)'
                            .'|exception(?'
                                .'|(*:2175)'
                                .'|\\.css(*:2189)'
                            .')'
                        .')'
                        .'|(*:2200)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        39 => [[['_route' => 'app_addabonnement', '_controller' => 'App\\Controller\\AbonnementController::addabonnement'], ['name'], null, null, false, true, null]],
        68 => [[['_route' => 'addparticipation', '_controller' => 'App\\Controller\\ParticipationController::addParticipation'], ['id'], null, null, false, true, null]],
        99 => [[['_route' => 'app_addtocart', '_controller' => 'App\\Controller\\StoreController::addtocart'], ['id', 'qt'], null, null, false, true, null]],
        142 => [[['_route' => 'app_updateproduct', '_controller' => 'App\\Controller\\AdminController::updateporduct'], ['id'], null, null, false, true, null]],
        170 => [[['_route' => 'user.show', '_controller' => 'App\\Controller\\UserController::showUserById'], ['id'], null, null, false, true, null]],
        198 => [[['_route' => 'user.add', 'id' => '0', '_controller' => 'App\\Controller\\UserController::editUser'], ['id'], null, null, false, true, null]],
        221 => [[['_route' => 'user.active', '_controller' => 'App\\Controller\\UserController::activerUser'], ['id'], null, null, false, true, null]],
        254 => [[['_route' => 'app_removeproduct', '_controller' => 'App\\Controller\\AdminController::removeporduct'], ['id'], null, null, false, true, null]],
        288 => [[['_route' => 'app_detailsproduct', '_controller' => 'App\\Controller\\AdminController::detailsporduct'], ['id'], null, null, false, true, null]],
        328 => [[['_route' => 'app_deletecomment', '_controller' => 'App\\Controller\\AdminController::deletecomment'], ['id', 'ic'], null, null, false, true, null]],
        361 => [[['_route' => 'deletequestionadmin', '_controller' => 'App\\Controller\\QuestionsAdminController::deletequestionadmin'], ['id'], null, null, false, true, null]],
        386 => [[['_route' => 'deletequizzadmin', '_controller' => 'App\\Controller\\QuizzAdminController::deletequizzadmin'], ['id'], null, null, false, true, null]],
        426 => [[['_route' => 'editquestionadmin', '_controller' => 'App\\Controller\\QuestionsAdminController::editquestionadmin'], ['id'], null, null, false, true, null]],
        451 => [[['_route' => 'editquizzadmin', '_controller' => 'App\\Controller\\QuizzAdminController::editquizzadmin'], ['id'], null, null, false, true, null]],
        488 => [[['_route' => 'admindeletecategorie', '_controller' => 'App\\Controller\\CategorieController::admindeletecategorie'], ['id'], null, null, false, true, null]],
        514 => [[['_route' => 'admindeleteressource', '_controller' => 'App\\Controller\\RessourceController::admindeleteressource'], ['id'], null, null, false, true, null]],
        548 => [[['_route' => 'admineditcategorie', '_controller' => 'App\\Controller\\CategorieController::admineditcategorie'], ['id'], null, null, false, true, null]],
        573 => [[['_route' => 'admineditressouce', '_controller' => 'App\\Controller\\RessourceController::admineditressouce'], ['id'], null, null, false, true, null]],
        609 => [[['_route' => 'app_admin.cours.delete', '_controller' => 'App\\Controller\\CoursController::admin_cours_delete'], ['id'], null, null, false, true, null]],
        630 => [[['_route' => 'app_admin.cours.edit', '_controller' => 'App\\Controller\\CoursController::admineditcours'], ['id'], null, null, false, true, null]],
        652 => [[['_route' => 'app_admin.cours.valid', '_controller' => 'App\\Controller\\CoursController::adminvalidcours'], ['id'], null, null, false, true, null]],
        681 => [[['_route' => 'user.delete', '_controller' => 'App\\Controller\\UserController::deletePersonne'], ['id'], null, null, false, true, null]],
        709 => [[['_route' => 'app_allcommand', '_controller' => 'App\\Controller\\EmailController::allcommand'], ['commandId'], null, null, false, true, null]],
        750 => [[['_route' => 'app_deleteabonnement', '_controller' => 'App\\Controller\\AbonnementController::deleteabonnement'], ['id'], null, null, false, true, null]],
        776 => [[['_route' => 'app_deletecategorie', '_controller' => 'App\\Controller\\CategorieController::deletecategorie'], ['id'], null, null, false, true, null]],
        805 => [[['_route' => 'deleteevenementp', '_controller' => 'App\\Controller\\EvenementController::deleteevenementp'], ['id'], null, null, false, true, null]],
        827 => [[['_route' => 'deleteevenementadmin', '_controller' => 'App\\Controller\\EvenementController::deleteevenement'], ['id'], null, null, false, true, null]],
        864 => [
            [['_route' => 'deleteParticipationpa', '_controller' => 'App\\Controller\\ParticipationController::deleteParticipationp'], ['id'], null, null, false, true, null],
            [['_route' => 'deleteParticipatione', '_controller' => 'App\\Controller\\ParticipationController::deleteParticipatione'], ['id'], null, null, false, true, null],
        ],
        883 => [[['_route' => 'deleteParticipationa', '_controller' => 'App\\Controller\\ParticipationController::deleteParticipation'], ['id'], null, null, false, true, null]],
        901 => [[['_route' => 'deleteParticipationp', '_controller' => 'App\\Controller\\ParticipationController::deleteParticipationpr'], ['id'], null, null, false, true, null]],
        925 => [[['_route' => 'delete_ab', '_controller' => 'App\\Controller\\QuestionFirasController::Delete'], ['id'], null, null, false, true, null]],
        944 => [[['_route' => 'delete_adh', '_controller' => 'App\\Controller\\ReponseFirasController::Delete'], ['id'], null, null, false, true, null]],
        971 => [[['_route' => 'app_deleteressource', '_controller' => 'App\\Controller\\RessourceController::deleteressource'], ['id'], null, null, false, true, null]],
        995 => [[['_route' => 'dislike_question', '_controller' => 'App\\Controller\\QuestionFirasController::dislikeQuestion'], ['id'], null, null, false, true, null]],
        1034 => [[['_route' => 'app_editabonnement', '_controller' => 'App\\Controller\\AbonnementController::editabonnement'], ['id'], null, null, false, true, null]],
        1061 => [[['_route' => 'app_editcategorie', '_controller' => 'App\\Controller\\CategorieController::editcategorie'], ['id'], null, null, false, true, null]],
        1101 => [[['_route' => 'editevenement', '_controller' => 'App\\Controller\\EvenementController::editevenement'], ['id'], null, null, false, true, null]],
        1124 => [[['_route' => 'editevenemente', '_controller' => 'App\\Controller\\EvenementController::editevenements'], ['id'], null, null, false, true, null]],
        1152 => [[['_route' => 'app_editressource', '_controller' => 'App\\Controller\\RessourceController::editressource'], ['id'], null, null, false, true, null]],
        1185 => [[['_route' => 'enfant.cources', '_controller' => 'App\\Controller\\CoursController::coursebycategory'], ['id'], null, null, false, true, null]],
        1227 => [[['_route' => 'category.showbyid', '_controller' => 'App\\Controller\\CategorieController::showcategoriebyid'], ['id'], null, null, false, true, null]],
        1252 => [[['_route' => 'app_showDetails', '_controller' => 'App\\Controller\\CoursController::showDetails'], ['id'], null, null, false, true, null]],
        1282 => [[['_route' => 'send_message', '_controller' => 'App\\Controller\\QuestionFirasController::sendMessage'], ['name'], null, null, false, true, null]],
        1309 => [[['_route' => 'app_facture', '_controller' => 'App\\Controller\\CommandeController::facture'], ['commandId'], null, null, false, true, null]],
        1353 => [[['_route' => 'app_removecomment', '_controller' => 'App\\Controller\\CommentController::index'], ['id', 'ip'], null, null, false, true, null]],
        1398 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1433 => [[['_route' => 'app_course.chapters', '_controller' => 'App\\Controller\\RessourceController::showbycourse'], ['id'], null, null, false, true, null]],
        1451 => [[['_route' => 'app_ressource', '_controller' => 'App\\Controller\\RessourceController::index'], ['id'], null, null, false, true, null]],
        1470 => [[['_route' => 'app_ressourced', '_controller' => 'App\\Controller\\RessourceController::indexd'], ['id'], null, null, false, true, null]],
        1517 => [[['_route' => 'app_updatecomment', '_controller' => 'App\\Controller\\CommentController::updatecomment'], ['id', 'ip'], null, null, false, true, null]],
        1541 => [[['_route' => 'update_ab', '_controller' => 'App\\Controller\\QuestionFirasController::update'], ['id'], null, null, false, true, null]],
        1561 => [[['_route' => 'update_adh', '_controller' => 'App\\Controller\\ReponseFirasController::update'], ['id'], null, null, false, true, null]],
        1601 => [[['_route' => 'cource.bycategory', '_controller' => 'App\\Controller\\CoursController::showbycategory'], ['id'], null, null, false, true, null]],
        1637 => [[['_route' => 'app_historique', '_controller' => 'App\\Controller\\QuizzEnfantController::historique'], ['id'], null, null, false, true, null]],
        1661 => [[['_route' => 'app_quiz_result', '_controller' => 'App\\Controller\\QuizzEnfantController::quizResult'], ['id'], ['GET' => 0], null, false, true, null]],
        1694 => [[['_route' => 'showquizzenfant', '_controller' => 'App\\Controller\\QuizzEnfantController::showquizzenfant'], ['id'], null, null, false, true, null]],
        1740 => [[['_route' => 'prof.cours.delete', '_controller' => 'App\\Controller\\CoursController::prof_cours_delete'], ['id'], null, null, false, true, null]],
        1762 => [[['_route' => 'prof.cours.edit', '_controller' => 'App\\Controller\\CoursController::editcours'], ['id'], null, null, false, true, null]],
        1800 => [[['_route' => 'editquestion', '_controller' => 'App\\Controller\\QuestionsController::editquestion'], ['id'], null, null, false, true, null]],
        1821 => [[['_route' => 'editquizz', '_controller' => 'App\\Controller\\QuizzController::editquizz'], ['id'], null, null, false, true, null]],
        1857 => [[['_route' => 'deletequestion', '_controller' => 'App\\Controller\\QuestionsController::deletequestion'], ['id'], null, null, false, true, null]],
        1878 => [[['_route' => 'deletequizz', '_controller' => 'App\\Controller\\QuizzController::deletequizz'], ['id'], null, null, false, true, null]],
        1906 => [[['_route' => 'questions_for_quiz', '_controller' => 'App\\Controller\\QuestionsController::questionsForQuiz'], ['quizId'], null, null, false, true, null]],
        1935 => [[['_route' => 'showquizzid', '_controller' => 'App\\Controller\\QuizzController::showquizzid'], ['id'], null, null, false, true, null]],
        1960 => [[['_route' => 'like_question', '_controller' => 'App\\Controller\\QuestionFirasController::likeQuestion'], ['id'], null, null, false, true, null]],
        2001 => [[['_route' => 'app_prof.course.chapters', '_controller' => 'App\\Controller\\RessourceController::Pshowbycourse'], ['id'], null, null, false, true, null]],
        2031 => [[['_route' => 'app_viewproduct', '_controller' => 'App\\Controller\\StoreController::viewproduct'], ['id'], null, null, false, true, null]],
        2071 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        2092 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        2139 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        2154 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        2175 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        2189 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        2200 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
