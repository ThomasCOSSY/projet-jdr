<?php

class Skills_effect extends Database
{
    private $skills_effect_id;
    private $skills_effect_lvl;
    private $skills_effect_descriptif;
    private $skills_name;


    /**
     * Get the value of skills_effect_id
     */ 
    public function getSkills_effect_id()
    {
        return $this->skills_effect_id;
    }

    /**
     * Set the value of skills_effect_id
     *
     * @return  self
     */ 
    public function setSkills_effect_id($skills_effect_id)
    {
        $this->skills_effect_id = $skills_effect_id;

        return $this;
    }

    /**
     * Get the value of skills_effect_lvl
     */ 
    public function getSkills_effect_lvl()
    {
        return $this->skills_effect_lvl;
    }

    /**
     * Set the value of skills_effect_lvl
     *
     * @return  self
     */ 
    public function setSkills_effect_lvl($skills_effect_lvl)
    {
        $this->skills_effect_lvl = $skills_effect_lvl;

        return $this;
    }

    /**
     * Get the value of skills_effect_descriptif
     */ 
    public function getSkills_effect_descriptif()
    {
        return $this->skills_effect_descriptif;
    }

    /**
     * Set the value of skills_effect_descriptif
     *
     * @return  self
     */ 
    public function setSkills_effect_descriptif($skills_effect_descriptif)
    {
        $this->skills_effect_descriptif = $skills_effect_descriptif;

        return $this;
    }

    /**
     * Get the value of skills_name
     */ 
    public function getSkills_name()
    {
        return $this->skills_name;
    }

    /**
     * Set the value of skills_name
     *
     * @return  self
     */ 
    public function setSkills_name($skills_name)
    {
        $this->skills_name = $skills_name;

        return $this;
    }

    public function __construct() {
        parent::__construct();
    }
}