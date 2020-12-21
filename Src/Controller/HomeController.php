<?php

namespace Src\controller;



use Core\Controller\DefaultController;
use Src\Models\UserModel;
use Src\Models\Model;

class HomeController extends DefaultController{
    
    /**
     * Method renderHome
     *
     * @return void
     */
    public function renderHome(){
        $defControl = new DefaultController();
        return $defControl->render("home");
        // require ROOT."/Src/View/Home.php";
    }

    
    /**
     * Method displayFriendSurvey
     *
     * @param $userEmail $userEmail account
     *
     * @return void
     */
    public function displayFriendSurvey($userEmail){
        $friendSurvey = new UserModel($_SESSION["email"],$_SESSION["password"]);
        $survey = $friendSurvey->getSurvey($userEmail);

        echo json_encode($survey);

    }

    
    /**
     * Method displaySurvey
     * display Survey
     * @return void
     */
    public function displaySurvey(){
        $table = "survey";
        $survey = new Model();
        $displaySurvey = $survey->getAll($table);

        echo json_encode($displaySurvey);
    }
}


