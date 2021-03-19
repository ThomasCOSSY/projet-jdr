<?php

class Skills_name extends Database
{
    private $skills_name_id;
    private $skills_name_name;


    /**
     * Get the value of skills_name_id
     */ 
    public function getSkills_name_id()
    {
        return $this->skills_name_id;
    }

    /**
     * Set the value of skills_name_id
     *
     * @return  self
     */ 
    public function setSkills_name_id($skills_name_id)
    {
        $this->skills_name_id = $skills_name_id;

        return $this;
    }

    /**
     * Get the value of skills_name_name
     */ 
    public function getSkills_name_name()
    {
        return $this->skills_name_name;
    }

    /**
     * Set the value of skills_name_name
     *
     * @return  self
     */ 
    public function setSkills_name_name($skills_name_name)
    {
        $this->skills_name_name = $skills_name_name;

        return $this;
    }

    public function __construct() {
        parent::__construct();
    }

    
}