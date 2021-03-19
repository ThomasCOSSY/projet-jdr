<?php

class Sexe extends Database {

    private $player_sex_id;
    private $player_sex_type;    

    /**
     * Get the value of player_sex_id
     */ 
    public function getPlayer_sex_id()
    {
        return $this->player_sex_id;
    }

    /**
     * Set the value of player_sex_id
     *
     * @return  self
     */ 
    public function setPlayer_sex_id($player_sex_id)
    {
        $this->player_sex_id = $player_sex_id;

        return $this;
    }

    /**
     * Get the value of player_sex_type
     */ 
    public function getPlayer_sex_type()
    {
        return $this->player_sex_type;
    }

    /**
     * Set the value of player_sex_type
     *
     * @return  self
     */ 
    public function setPlayer_sex_type($player_sex_type)
    {
        $this->player_sex_type = $player_sex_type;

        return $this;
    }
    
    public function __construct() {
        parent::__construct();
}

public function getAllSexe()
    {               
        $query = "SELECT * FROM `player_sex`;";
        $queryGetAllRace = parent::getDb()->prepare($query);        
        $queryGetAllRace->execute();
        $resultsQuery = $queryGetAllRace->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }
}

