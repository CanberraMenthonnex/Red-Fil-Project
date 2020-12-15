<?php


namespace Src\controller;

use Core\Controller\DefaultController;

class ErrorController extends DefaultController{

    public function renderError(){
        return $this->render("error");

    }



}