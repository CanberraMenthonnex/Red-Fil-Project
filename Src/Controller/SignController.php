<?php

namespace Src\controller;

use Core\Controller\DefaultController;
use Core\Tools\ValidatorString;
use Src\Models\UserModel;

class SignController extends DefaultController{

    public function renderSign(){
        return $this->render("sign");
        // require ROOT."/Src/View/Home.php";
    }

    public function validateSign(){
        if($this->checkPostKeys($_POST, ['firstname', 'lastname', 'email', 'pseudo', 'password', 'checkPassword']) && ($_POST['password'] === $_POST['checkPassword'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $pseudo = $_POST['pseudo'];
            $password = $_POST['password'];

            $validator = new ValidatorString($firstname);
            $validator
            ->validateString()
            ->validateLength(3, 20)
            ->validateNoSpecialChar(); 
            $validator_error[] = $validator->getError();



            $validator = new ValidatorString($lastname);
            $validator
            ->validateString()
            ->validateLength(3, 50)
            ->validateNoSpecialChar(); 
            $sign_error[] = $validator->getError();
            
            $validator = new ValidatorString($email);
            $validator
            ->validateEmail(); 
            $validator_error[] = $validator->getError();

            $validator = new ValidatorString($pseudo);
            $validator
            ->validateString()
            ->validateLength(1, 50)
            ->validateNoSpecialChar();  
            $validator_error[] = $validator->getError();

            $validator = new ValidatorString($password);
            $validator
            ->validatePwd();
            $sign_error[] = $validator->getError();

            $sign_error = array_values(array_filter($sign_error));

            if(!$sign_error){
                $model = new UserModel($email, $password);
                if($model->searchId()){
                    $that_fcking_error = "Cet email existe déjà";
                }
                else{
                    $model->addUser($_POST);
                    return $this->render('home'); 
                }
            }else{
                $that_fcking_error = $sign_error[0][0];                
            }
       }else{
        $that_fcking_error = "Veuillez renseigner tous les champs et/ou faire correspondre les mdp plz";
       }  
       return $this->render('sign', compact("that_fcking_error"));   
   }

}