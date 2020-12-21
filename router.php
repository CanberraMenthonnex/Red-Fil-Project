<?php
session_start();

use Src\Controller\{
    AddSurveyController,
    ErrorController,
    HomeController,
    LoginController,
    ProfilController,
    ResultController,
    SignController,
    AdminController
};


//Router qui redirige la page en fonction de l'URL, ?page=


if(array_key_exists("page", $_GET)){
    switch ($_GET["page"]) {

        // Méthode GET => affichage de page


        case 'home':
            $controller = new HomeController();
            $controller->renderHome();
            break;
        
        
        case 'login':
            $controller = new LoginController();
            $controller->renderLogin();
            break;
        
            

        case 'sign':
            $controller = new SignController();
            $controller->renderSign();
            break;


        case 'profil':
            $controller = new ProfilController();
            $controller->renderProfil();
            break;

            
        case 'addSurvey':
            $controller = new AddSurveyController();
            $controller->renderAddSurvey();
            break;

        case 'friendList':
            $controller = new ProfilController();
            $controller->displayFriend();
            break;




        case 'connexionAdmin':
            $controller = new AdminController();
            $controller->renderConnexionAdmin();
            break;


        case 'logout':
            $controller = new LoginController();
            $controller->logOut();
            break;





        case 'result':
            $controller = new ResultController();
            $controller->renderResult();
            break;



        

        // Méthode POST => traitement
        case 'logCheck':
            $controller = new LoginController();
            $controller->log();
            break;

        case 'logCheckAdmin':
            $controller = new LoginController();
            $controller->logAdmin();
            break;
        
        case 'homesign':
            $controller = new SignController();
            $controller->validateSign();
            break;



        //survey

        case 'sendSurvey':
            $controller = new AdminController();
            $controller->postSurvey($_POST);
            break;

        case 'getSurvey':
            $controller = new HomeController();
            $controller->displaySurvey();
            break;
        //chat

        case 'postMessage':
            $controller = new ResultController();
            $controller->sendMessage($_POST);
            break;

        case 'getMessage':
            $controller = new ResultController();
            $controller->getMessage();
            break;

        case 'searchFriend':
            $controller = new ProfilController();
            $controller->searchFriend($_POST);
            break;
            
            
        default:
            $controller = new ErrorController();
            $controller->renderError();
            break;
    }
} else{
    $controller = new HomeController();
    $controller->renderHome();
}
