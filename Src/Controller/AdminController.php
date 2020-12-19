<?php

namespace Src\controller;

use Core\Controller\DefaultController;
use Src\Models\SurveyModel;

class AdminController extends DefaultController{

    public function renderAdmin(){
        return $this->render("Admin");
    
    }

    public function renderConnexionAdmin(){
        return $this->render("Connexion-admin");
    
    }

    public function postSurvey($data)
    {   
        $envoi = new SurveyModel();

        $envoi->sendSurvey($data);
        echo json_encode("");
        $envoi->prepareSendingMail();
    }


}