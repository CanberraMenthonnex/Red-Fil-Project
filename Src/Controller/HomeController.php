<?php

namespace Src\controller;



use Core\Controller\DefaultController;
use Src\Models\UserModel;

class HomeController extends DefaultController{

    public function renderHome(){
        $defControl = new DefaultController();
        return $defControl->render("home");
        // require ROOT."/Src/View/Home.php";
    }


    // public function displayFriendList(){
    //     $friendList = new UserModel($_SESSION["email"],$_SESSION["password"]);
    //     $friendList->findFriend();
    // }

    public function displayFriendSurvey($userEmail){
        $friendSurvey = new UserModel($_SESSION["email"],$_SESSION["password"]);
        $survey = $friendSurvey->getSurvey($userEmail);

        echo json_encode($survey);

    }
}


