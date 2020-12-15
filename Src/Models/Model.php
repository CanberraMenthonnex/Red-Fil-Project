<?php

namespace Src\Models;

class Model{
    protected $_db;
    
    public function __construct(){
        
        $this->_db = new \PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . '; charset=utf8',  DB_USERNAME  , DB_PASSWORD , array(\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_WARNING,\PDO::ATTR_DEFAULT_FETCH_MODE=>\PDO::FETCH_OBJ));
    }


    public function insert(string $table, array $infos){
        $mdpCrypted = password_hash($infos['password'], PASSWORD_DEFAULT);
        
        $request = $this->_db->prepare("INSERT INTO $table (firstname, lastname, pseudo, password, email, status) VALUES (:firstname, :lastname, :pseudo, :password, :email, :status)");
        $request->bindValue(":firstname", $infos['firstname']);
        $request->bindValue(":lastname", $infos['lastname']);
        $request->bindValue(":pseudo", $infos['pseudo']);
        $request->bindValue(":password", $mdpCrypted);
        $request->bindValue(":email", $infos['email']);
        $request->bindValue(":status", 0);
        $request->execute();
    }


    public function getOne(string $table, string $champs, string $infos){
        $request = $this->_db->query("SELECT * FROM $table WHERE $champs =" . "'$infos'");
        $result = $request->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAll(string $table, string $champ = null, string $entree = null): Array{
        $request = $this->_db->query("SELECT * FROM $table WHERE $champ=" . "'$entree'");

        return $result = $request->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function updateStatus(int $status, string $email){
       $this->_db->query("UPDATE user SET status = $status WHERE email=" ."'$email'");
    }

    public function getFriendSurvey(string $userEmail){
        $request = $this->_db->query("SELECT user, question, answer_1, answer_2,answer_3,answer_4 FROM friends INNER JOIN survey ON friends.friend = survey.user WHERE friends.user_email = " . "'$userEmail'");
        return $result = $request->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function addFriend(string $table, string $user, string $newFriend){
        var_dump($user);
        var_dump($newFriend);
        $request = $this->_db->query("INSERT INTO $table (user_email , friend) VALUES ('$user' , '$newFriend')");
    }

}