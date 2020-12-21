<?php

namespace Src\Models;


class Model{
    protected $_db;
        
    /**
     * Function __construct
     *  
     * Connexion data base
     * 
     * @return void
     */
    public function __construct(){
        
        $this->_db = new \PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . '; charset=utf8',  DB_USERNAME  , DB_PASSWORD , array(\PDO::ATTR_ERRMODE=>\PDO::ERRMODE_WARNING,\PDO::ATTR_DEFAULT_FETCH_MODE=>\PDO::FETCH_OBJ));
    }
    
    /**
     * Function insert
     *
     * @param string $table [explicite description]
     * @param array $infos [explicite description]
     *
     * insert infos in table
     * @return void
     */
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

    
    /**
     * Method getOne
     *
     * @param string $table [explicite description]
     * @param string $champs [explicite description]
     * @param string $infos [explicite description]
     *
     * @return void
     */
    public function getOne(string $table, string $champs, string $infos){
        $request = $this->_db->query("SELECT * FROM $table WHERE $champs =" . "'$infos'");
        $result = $request->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }
    
    /**
     * Method getAll
     *
     * @param string $table [explicite description]
     *
     * @return Array
     */
    public function getAll(string $table): Array{
        $request = $this->_db->query("SELECT * FROM $table");

        return $result = $request->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    /**
     * Method updateStatus
     *
     * @param int $status [explicite description]
     * @param string $email [explicite description]
     *
     * @return void
     */
    public function updateStatus(int $status, string $email){
       $this->_db->query("UPDATE user SET status = $status WHERE email=" ."'$email'");
    }
    
    /**
     * Method getFriendSurvey
     *
     * @param string $userEmail [explicite description]
     *
     * @return void
     */
    public function getFriendSurvey(string $userEmail){
        $request = $this->_db->query("SELECT user, question, answer_1, answer_2,answer_3,answer_4 FROM friends INNER JOIN survey ON friends.friend = survey.user WHERE friends.user_email = " . "'$userEmail'");
        return $result = $request->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    /**
     * Method addFriend
     *
     * @param string $table [explicite description]
     * @param string $user [explicite description]
     * @param string $newFriend [explicite description]
     *
     * @return void
     */
    public function addFriend(string $table, string $user, string $newFriend){
        var_dump($user);
        var_dump($newFriend);
        $request = $this->_db->query("INSERT INTO $table (user_email , friend) VALUES ('$user' , '$newFriend')");
    }

}