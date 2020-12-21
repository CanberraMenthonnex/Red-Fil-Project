<?php

namespace Src\controller;

use Core\Controller\DefaultController;
use Src\Models\SurveyModel;

class ResultController extends DefaultController{
    
    /**
     * Method renderResult
     *
     * @return void
     */
    public function renderResult(){
        $defControl = new DefaultController();
        return $defControl->render("result");

    }
    
    /**
     * Method getMessage
     *
     * @return void
     */
    public function getMessage()
    {
        $query = new SurveyModel;
        $messages = $query->getMessage();
        
        echo json_encode($messages);
    }
    
    /**
     * Method sendMessage
     *
     * @param $data $data message to push
     *
     * @return void
     */
    public function sendMessage($data)
    {   

        $message = new SurveyModel();
        $message->sendMessage($data);
        echo json_encode("");
        
    }
}