<?php

namespace Src\Models;

class UserModel extends Model{

    protected $email;
    protected $pwd;


    public function __construct($email, $pwd)
    {
        parent::__construct();
        $this->email = $email;
        $this->pwd = $pwd;
    }

    
    /**
     * Method searchId
     *
     * @return void
     */
    public function searchId(){
        $infos = $this->getOne('user', 'email',$this->email);

        return $infos;
    }
    
    /**
     * Method searchAdmin
     *
     * @return void
     */
    public function searchAdmin(){
        $infos = $this->getOne('admin', 'email',$this->email);

        return $infos;
    }
    
    /**
     * Method addUser
     *
     * @param array $infos data of user you put 
     *
     * @return void
     */
    public function addUser(array $infos){
        $this->insert('user', $infos);
    }
    
    /**
     * Method setConnection
     *
     * @param int $status switch status
     * @param string $email email account of user
     *
     * @return void
     */
    public function setConnection(int $status, string $email){
        $this->updateStatus($status, $email);
    }
    
    /**
     * Method findFriend
     *
     * @return void
     */
    public function findFriend(){
        return $this->getAll("friends", 'user_email',$_SESSION["email"]);
    }

    public function getSurvey($userEmail){
        return $this->getFriendSurvey($userEmail);
    }
}