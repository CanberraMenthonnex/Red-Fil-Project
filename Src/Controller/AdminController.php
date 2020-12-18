<?php

namespace Src\controller;

use Core\Controller\DefaultController;
use Src\Models\UserModel;

class AdminController extends DefaultController{

    public function renderAdmin(){
        return $this->render("Admin");
        // require ROOT."/Src/View/Home.php";
    }



}