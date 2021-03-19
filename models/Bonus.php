<?php

class Bonus extends Database
{
    private $bonus_id;
    private $bonus_value;
    private $bonus_type;



    /**
     * Get the value of bonus_id
     */
    public function getBonus_id()
    {
        return $this->bonus_id;
    }

    /**
     * Set the value of bonus_id
     *
     * @return  self
     */
    public function setBonus_id($bonus_id)
    {
        $this->bonus_id = $bonus_id;

        return $this;
    }

    /**
     * Get the value of bonus_value
     */
    public function getBonus_value()
    {
        return $this->bonus_value;
    }

    /**
     * Set the value of bonus_value
     *
     * @return  self
     */
    public function setBonus_value($bonus_value)
    {
        $this->bonus_value = $bonus_value;

        return $this;
    }    

    /**
     * Get the value of bonus_type
     */ 
    public function getBonus_type()
    {
        return $this->bonus_type;
    }

    /**
     * Set the value of bonus_type
     *
     * @return  self
     */ 
    public function setBonus_type($bonus_type)
    {
        $this->bonus_type = $bonus_type;

        return $this;
    }

    public function __construct()
    {
        parent::__construct();
    }
}
