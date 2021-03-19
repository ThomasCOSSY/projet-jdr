<?php

class Divinity extends Database {

    private $divinity_id;
    private $divinity_name;
    private $divinity_passif;
    private $divinity_skill1;
    private $divinity_skill2;

    


    /**
     * Get the value of divinity_id
     */ 
    public function getDivinity_id()
    {
        return $this->divinity_id;
    }

    /**
     * Set the value of divinity_id
     *
     * @return  self
     */ 
    public function setDivinity_id($divinity_id)
    {
        $this->divinity_id = $divinity_id;

        return $this;
    }

    /**
     * Get the value of divinity_name
     */ 
    public function getDivinity_name()
    {
        return $this->divinity_name;
    }

    /**
     * Set the value of divinity_name
     *
     * @return  self
     */ 
    public function setDivinity_name($divinity_name)
    {
        $this->divinity_name = $divinity_name;

        return $this;
    }

    /**
     * Get the value of divinity_passif
     */ 
    public function getDivinity_passif()
    {
        return $this->divinity_passif;
    }

    /**
     * Set the value of divinity_passif
     *
     * @return  self
     */ 
    public function setDivinity_passif($divinity_passif)
    {
        $this->divinity_passif = $divinity_passif;

        return $this;
    }

    /**
     * Get the value of divinity_skill1
     */ 
    public function getDivinity_skill1()
    {
        return $this->divinity_skill1;
    }

    /**
     * Set the value of divinity_skill1
     *
     * @return  self
     */ 
    public function setDivinity_skill1($divinity_skill1)
    {
        $this->divinity_skill1 = $divinity_skill1;

        return $this;
    }

    /**
     * Get the value of divinity_skill2
     */ 
    public function getDivinity_skill2()
    {
        return $this->divinity_skill2;
    }

    /**
     * Set the value of divinity_skill2
     *
     * @return  self
     */ 
    public function setDivinity_skill2($divinity_skill2)
    {
        $this->divinity_skill2 = $divinity_skill2;

        return $this;
    }

    public function __construct() {
        parent::__construct();
    }

    public function getAllDivinity()
    {               
        $query = "SELECT * FROM `divinity`;";
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