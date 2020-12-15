<?php

namespace Src\controller;

use Core\Controller\DefaultController;
use Src\Models\UserModel;
use Src\Models\Model;


class ProfilController extends DefaultController{

    public function renderProfil(){
        $defControl = new DefaultController();
        return $defControl->render("profil");
        // require ROOT."/Src/View/Home.php";
    }

    public function displayFriend(){

        if(isset($_SESSION["firstname"])){

        $email= $_SESSION["email"];
        $pwd = $_SESSION["password"];

        $friendList = new UserModel($email,$pwd);
        $friendDisp = $friendList->findFriend();
        return $this->render("profil",compact("friendDisp"));
        
    }else{
        return $this->render("home");
    }

    }

    public function searchFriend($friend){
        // var_dump($friend);
        $newFriend = $friend["content"];
        
        $query = new Model();
        $find = $query->getOne("user", "email", $newFriend);
        if($find === false){
            echo json_encode("Ami non trouvé");
        }else{
            $query->addFriend("friends", $_SESSION["email"], $newFriend);
            $query->addFriend("friends", $newFriend, $_SESSION["email"]);
            echo json_encode("Ami ajouté");
        }

    }
}