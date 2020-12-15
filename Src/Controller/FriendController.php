<?php

namespace Src\controller;

use Core\Controller\DefaultController;

class FriendController extends DefaultController{

    public function renderFriend(){
        $defControl = new DefaultController();
        return $defControl->render("friendList");
        // require ROOT."/Src/View/Home.php";
    }
}