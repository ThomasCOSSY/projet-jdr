<?php

class Bonus_type extends Database
{
    private $bonus_type_id;
    private $bonus_type_type;


    /**
     * Get the value of bonus_type_id
     */ 
    public function getBonus_type_id()
    {
        return $this->bonus_type_id;
    }

    /**
     * Set the value of bonus_type_id
     *
     * @return  self
     */ 
    public function setBonus_type_id($bonus_type_id)
    {
        $this->bonus_type_id = $bonus_type_id;

        return $this;
    }

    /**
     * Get the value of bonus_type_type
     */ 
    public function getBonus_type_type()
    {
        return $this->bonus_type_type;
    }

    /**
     * Set the value of bonus_type_type
     *
     * @return  self
     */ 
    public function setBonus_type_type($bonus_type_type)
    {
        $this->bonus_type_type = $bonus_type_type;

        return $this;
    }

    public function __construct() {
        parent::__construct();
    }
}