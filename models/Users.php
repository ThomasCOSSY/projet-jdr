<?php

class Users extends Database {

    private $users_id;
    private $users_firstname;
    private $users_lastname;
    private $users_username;
    private $users_password;
    private $users_mail;
    private $users_role;
    private $users_avatar;

    /**
     * Get the value of users_id
     */ 
    public function getUsers_id()
    {
        return $this->users_id;
    }

    /**
     * Set the value of users_id
     *
     * @return  self
     */ 
    public function setUsers_id($users_id)
    {
        $this->users_id = $users_id;

        return $this;
    }

    /**
     * Get the value of users_firstname
     */ 
    public function getUsers_firstname()
    {
        return $this->users_firstname;
    }

    /**
     * Set the value of users_firstname
     *
     * @return  self
     */ 
    public function setUsers_firstname($users_firstname)
    {
        $this->users_firstname = $users_firstname;

        return $this;
    }

    /**
     * Get the value of users_lastname
     */ 
    public function getUsers_lastname()
    {
        return $this->users_lastname;
    }

    /**
     * Set the value of users_lastname
     *
     * @return  self
     */ 
    public function setUsers_lastname($users_lastname)
    {
        $this->users_lastname = $users_lastname;

        return $this;
    }

    /**
     * Get the value of users_username
     */ 
    public function getUsers_username()
    {
        return $this->users_username;
    }

    /**
     * Set the value of users_username
     *
     * @return  self
     */ 
    public function setUsers_username($users_username)
    {
        $this->users_username = $users_username;

        return $this;
    }

    /**
     * Get the value of users_password
     */ 
    public function getUsers_password()
    {
        return $this->users_password;
    }

    /**
     * Set the value of users_password
     *
     * @return  self
     */ 
    public function setUsers_password($users_password)
    {
        $this->users_password = $users_password;

        return $this;
    }

    /**
     * Get the value of users_mail
     */ 
    public function getUsers_mail()
    {
        return $this->users_mail;
    }

    /**
     * Set the value of users_mail
     *
     * @return  self
     */ 
    public function setUsers_mail($users_mail)
    {
        $this->users_mail = $users_mail;

        return $this;
    }

    /**
     * Get the value of users_role
     */ 
    public function getUsers_role()
    {
        return $this->users_role;
    }

    /**
     * Set the value of users_role
     *
     * @return  self
     */ 
    public function setUsers_role($users_role)
    {
        $this->users_role = $users_role;

        return $this;
    }

    /**
     * Get the value of users_avatar
     */ 
    public function getUsers_avatar()
    {
        return $this->users_avatar;
    }

    /**
     * Set the value of users_avatar
     *
     * @return  self
     */ 
    public function setUsers_avatar($users_avatar)
    {
        $this->users_avatar = $users_avatar;

        return $this;
    }






    public function __construct() {
        parent::__construct();
    }

    public function addUser($arrayParameters) {
        $query = "INSERT INTO `users` (`users_firstname`, `users_lastname`, `users_username`, `users_password`, `users_mail`) VALUES (:firstname, :lastname, :username, :password, :mail);";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("firstname", $arrayParameters["firstname"], PDO::PARAM_STR);
        $buildQuery->bindValue("lastname", $arrayParameters["lastname"], PDO::PARAM_STR);
        $buildQuery->bindValue("username", $arrayParameters["username"], PDO::PARAM_STR);
        $buildQuery->bindValue("password", $arrayParameters["password"], PDO::PARAM_STR);
        $buildQuery->bindValue("mail", $arrayParameters["mail"], PDO::PARAM_STR);
        // $buildQuery->bindValue("avatar", $arrayParameters["avatar"], PDO::PARAM_STR);
        return $buildQuery->execute();
    }


     /**
     * Méthode qui permet de récupérer les informations d'un Users en particulier
     * 
     * @param int
     * @return array|boolean
     */
    public function getOneUsersInformations(int $id) {
        $query = "SELECT * FROM `Users` WHERE `users_id` = :id;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("id", $id, PDO::PARAM_INT);
        $buildQuery->execute();
        $resultQuery = $buildQuery->fetch(PDO::FETCH_ASSOC);
        if(!empty($resultQuery)) {
            return $resultQuery;
        } else {
            return false;
        }
    }


    /**
     * Méthode qui permet de modifier un Users existant
     * 
     * @param array
     * @return boolean
     */
    public function updateUsers(array $arrayParameters) {
        $query = "UPDATE `Users` SET `users_lastname` = :lastname, `users_firstname` = :firstname, `users_username` = :username, `users_mail` = :mail WHERE `users_id` = :id;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("lastname", $arrayParameters["lastname"], PDO::PARAM_STR);
        $buildQuery->bindValue("firstname", $arrayParameters["firstname"], PDO::PARAM_STR);   
        $buildQuery->bindValue("username", $arrayParameters["username"], PDO::PARAM_STR);
        $buildQuery->bindValue("mail", $arrayParameters["mail"], PDO::PARAM_STR);
        $buildQuery->bindValue("id", $arrayParameters["id"], PDO::PARAM_INT);
        return $buildQuery->execute();
    }

    public function updateAvatar($chemin, $id) {
        $query = "UPDATE `Users` SET `avatar` = :avatar WHERE `users_id` = :id;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("avatar", $chemin, PDO::PARAM_STR);        
        $buildQuery->bindValue("id", $id, PDO::PARAM_INT);
        return $buildQuery->execute();
    }

    public function searchUsername(string $username) {
        $query = "SELECT `users_id` FROM `users` WHERE `users_username` = :username;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("username", $username, PDO::PARAM_STR);
        $buildQuery->execute();
        $resultQuery = $buildQuery->fetch(PDO::FETCH_ASSOC);
        if(!empty($resultQuery)) {
            return $resultQuery;
        } else {
            return "Valide";
        }
    }

    public function deleteUser($id) {
        $query = "DELETE FROM `users` WHERE `users_id` = :id;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("id", $id, PDO::PARAM_INT);
        return $buildQuery->execute();       
         
    }
}