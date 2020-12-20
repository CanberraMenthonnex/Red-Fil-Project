<?php

namespace Src\controller;

use Core\Controller\DefaultController;
use Src\Models\SurveyModel;

class ResultController extends DefaultController{

    public function renderResult(){
        $defControl = new DefaultController();
        return $defControl->render("result");
        // require ROOT."/Src/View/Home.php";
    }

    public function getMessage()
    {
        $query = new SurveyModel;
        $messages = $query->getMessage();
        
        echo json_encode($messages);
    }

    public function sendMessage($data)
    {   

        $message = new SurveyModel();
        $message->sendMessage($data);
        echo json_encode("");
        
    }
}