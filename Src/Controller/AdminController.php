<?php

namespace Src\controller;

use Core\Controller\DefaultController;
use Src\Models\SurveyModel;

class AdminController extends DefaultController{
    
    /**
     * Method renderAdmin
     *
     * @return void
     */
    public function renderAdmin(){
        return $this->render("Admin");
    
    }
    
    /**
     * Method renderConnexionAdmin
     *
     * @return void
     */
    public function renderConnexionAdmin(){
        return $this->render("Connexion-admin");
    
    }
    
    /**
     * Method postSurvey
     *
     * @param $data $data survey to post
     *
     * @return void
     */
    public function postSurvey($data)
    {   
        $envoi = new SurveyModel();

        $envoi->sendSurvey($data);
        echo json_encode("");
        $envoi->prepareSendingMail();
    }


}