<?php

class Users_role extends Database {

    private $users_role_id;
    private $users_role_role;
    

    /**
     * Get the value of users_role_id
     */ 
    public function getUsers_role_id()
    {
        return $this->users_role_id;
    }

    /**
     * Set the value of users_role_id
     *
     * @return  self
     */ 
    public function setUsers_role_id($users_role_id)
    {
        $this->users_role_id = $users_role_id;

        return $this;
    }

    /**
     * Get the value of users_role_role
     */ 
    public function getUsers_role_role()
    {
        return $this->users_role_role;
    }

    /**
     * Set the value of users_role_role
     *
     * @return  self
     */ 
    public function setUsers_role_role($users_role_role)
    {
        $this->users_role_role = $users_role_role;

        return $this;
    }

    public function __construct() {
        parent::__construct();
    }

    public function verifyUserPresence($username) {
        $query = "SELECT `users_id`, `users_firstname`, `users_lastname`, `users_username`, `users_mail`, `users_password`, `avatar`, `users_role_role` 
        FROM `users_role` 
        INNER JOIN `users` 
        ON `users_role`.`users_role_id` = `users`.`users_role_id`
        WHERE `users`.`users_username` = :username;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("username", $username);
        $buildQuery->execute();
        $resultQuery = $buildQuery->fetch(PDO::FETCH_ASSOC);
        if(!empty($resultQuery)) {
            return $resultQuery;
        } else {
            return false;
        }
    }
}