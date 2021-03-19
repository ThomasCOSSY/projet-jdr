<?php

class Have_skills extends Database
{

    private $have_skills_skills_effect;
    private $have_skills_player;


    /**
     * Get the value of have_skills_skills_effect
     */ 
    public function getHave_skills_skills_effect()
    {
        return $this->have_skills_skills_effect;
    }

    /**
     * Set the value of have_skills_skills_effect
     *
     * @return  self
     */ 
    public function setHave_skills_skills_effect($have_skills_skills_effect)
    {
        $this->have_skills_skills_effect = $have_skills_skills_effect;

        return $this;
    }

    /**
     * Get the value of have_skills_player
     */ 
    public function getHave_skills_player()
    {
        return $this->have_skills_player;
    }

    /**
     * Set the value of have_skills_player
     *
     * @return  self
     */ 
    public function setHave_skills_player($have_skills_player)
    {
        $this->have_skills_player = $have_skills_player;

        return $this;
    }

    public function __construct()
    {
        parent::__construct();
    }
}