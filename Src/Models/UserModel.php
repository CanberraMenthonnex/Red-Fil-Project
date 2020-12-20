<?php

namespace Src\Models;

class UserModel extends Model{

    protected $email;
    protected $pwd;


    public function __construct(/*$firstname, $lastname, $pseudo,*/ $email, $pwd)
    {
        parent::__construct();
        $this->email = $email;
        $this->pwd = $pwd;
    }


    // public function searchId(){
    //     $infos = $this->getOne("user", $this->name, "email");
    //     return $infos;
    // }
    public function searchId(){
        $infos = $this->getOne('user', 'email',$this->email);

        return $infos;
    }

    public function searchAdmin(){
        $infos = $this->getOne('admin', 'email',$this->email);

        return $infos;
    }

    public function addUser(array $infos){
        $this->insert('user', $infos);
    }

    public function setConnection(int $status, string $email){
        $this->updateStatus($status, $email);
    }

    public function findFriend(){
        return $this->getAll("friends", 'user_email',$_SESSION["email"]);
    }

    public function getSurvey($userEmail){
        return $this->getFriendSurvey($userEmail);
    }
}