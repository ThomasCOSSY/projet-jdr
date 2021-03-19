<?php

class Have_bonus extends Database
{

    private $have_bonus_player;
    private $have_bonus_bonus;


    /**
     * Get the value of have_bonus_player
     */
    public function getHave_bonus_player()
    {
        return $this->have_bonus_player;
    }

    /**
     * Set the value of have_bonus_player
     *
     * @return  self
     */
    public function setHave_bonus_player($have_bonus_player)
    {
        $this->have_bonus_player = $have_bonus_player;

        return $this;
    }

    /**
     * Get the value of have_bonus_bonus
     */
    public function getHave_bonus_bonus()
    {
        return $this->have_bonus_bonus;
    }

    /**
     * Set the value of have_bonus_bonus
     *
     * @return  self
     */
    public function setHave_bonus_bonus($have_bonus_bonus)
    {
        $this->have_bonus_bonus = $have_bonus_bonus;

        return $this;
    }

    public function __construct()
    {
        parent::__construct();
    }
}
