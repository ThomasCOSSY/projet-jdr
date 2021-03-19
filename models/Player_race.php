<?php

class Race extends Database {

    private $player_race_id;
    private $player_race_type;




    /**
     * Get the value of player_race_id
     */ 
    public function getPlayer_race_id()
    {
        return $this->player_race_id;
    }

    /**
     * Set the value of player_race_id
     *
     * @return  self
     */ 
    public function setPlayer_race_id($player_race_id)
    {
        $this->player_race_id = $player_race_id;

        return $this;
    }

    /**
     * Get the value of player_race_type
     */ 
    public function getPlayer_race_type()
    {
        return $this->player_race_type;
    }

    /**
     * Set the value of player_race_type
     *
     * @return  self
     */ 
    public function setPlayer_race_type($player_race_type)
    {
        $this->player_race_type = $player_race_type;

        return $this;
    }


    public function __construct() {
        parent::__construct();
}

public function getAllRace()
    {               
        $query = "SELECT * FROM `player_race`;";
        $queryGetAllRace = parent::getDb()->prepare($query);        
        $queryGetAllRace->execute();
        $resultsQuery = $queryGetAllRace->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($resultsQuery)) {
            return $resultsQuery;
        } else {
            return false;
        }
    }

    // public function updateDivinity(array $arrayParameters) {
    //     $query = "UPDATE `divinity` SET 



}


