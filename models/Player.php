<?php

class Player extends Database
{

    private $player_id;
    private $player_firstname;
    private $player_lastname;
    private $player_age;
    private $player_pv;
    private $player_pvmax;
    private $player_pm;
    private $player_pmmax;
    private $player_intervention;
    private $player_action;
    private $player_px;
    private $player_gold;
    private $player_for;
    private $player_int;
    private $player_dex;
    private $player_race;
    private $player_sex;
    private $player_divinity;
    private $player_character;
    private $player_phobia;
    private $player_user;





    /**
     * Get the value of player_id
     */
    public function getPlayer_id()
    {
        return $this->player_id;
    }

    /**
     * Set the value of player_id
     *
     * @return  self
     */
    public function setPlayer_id($player_id)
    {
        $this->player_id = $player_id;

        return $this;
    }

    /**
     * Get the value of player_firstname
     */
    public function getPlayer_firstname()
    {
        return $this->player_firstname;
    }

    /**
     * Set the value of player_firstname
     *
     * @return  self
     */
    public function setPlayer_firstname($player_firstname)
    {
        $this->player_firstname = $player_firstname;

        return $this;
    }

    /**
     * Get the value of player_lastname
     */
    public function getPlayer_lastname()
    {
        return $this->player_lastname;
    }

    /**
     * Set the value of player_lastname
     *
     * @return  self
     */
    public function setPlayer_lastname($player_lastname)
    {
        $this->player_lastname = $player_lastname;

        return $this;
    }

    /**
     * Get the value of player_age
     */
    public function getPlayer_age()
    {
        return $this->player_age;
    }

    /**
     * Set the value of player_age
     *
     * @return  self
     */
    public function setPlayer_age($player_age)
    {
        $this->player_age = $player_age;

        return $this;
    }

    /**
     * Get the value of player_pv
     */
    public function getPlayer_pv()
    {
        return $this->player_pv;
    }

    /**
     * Set the value of player_pv
     *
     * @return  self
     */
    public function setPlayer_pv($player_pv)
    {
        $this->player_pv = $player_pv;

        return $this;
    }

    /**
     * Get the value of player_pvmax
     */
    public function getPlayer_pvmax()
    {
        return $this->player_pvmax;
    }

    /**
     * Set the value of player_pvmax
     *
     * @return  self
     */
    public function setPlayer_pvmax($player_pvmax)
    {
        $this->player_pvmax = $player_pvmax;

        return $this;
    }

    /**
     * Get the value of player_pm
     */
    public function getPlayer_pm()
    {
        return $this->player_pm;
    }

    /**
     * Set the value of player_pm
     *
     * @return  self
     */
    public function setPlayer_pm($player_pm)
    {
        $this->player_pm = $player_pm;

        return $this;
    }

    /**
     * Get the value of player_pmmax
     */
    public function getPlayer_pmmax()
    {
        return $this->player_pmmax;
    }

    /**
     * Set the value of player_pmmax
     *
     * @return  self
     */
    public function setPlayer_pmmax($player_pmmax)
    {
        $this->player_pmmax = $player_pmmax;

        return $this;
    }

    /**
     * Get the value of player_intervention
     */
    public function getPlayer_intervention()
    {
        return $this->player_intervention;
    }

    /**
     * Set the value of player_intervention
     *
     * @return  self
     */
    public function setPlayer_intervention($player_intervention)
    {
        $this->player_intervention = $player_intervention;

        return $this;
    }

    /**
     * Get the value of player_action
     */
    public function getPlayer_action()
    {
        return $this->player_action;
    }

    /**
     * Set the value of player_action
     *
     * @return  self
     */
    public function setPlayer_action($player_action)
    {
        $this->player_action = $player_action;

        return $this;
    }

    /**
     * Get the value of player_px
     */
    public function getPlayer_px()
    {
        return $this->player_px;
    }

    /**
     * Set the value of player_px
     *
     * @return  self
     */
    public function setPlayer_px($player_px)
    {
        $this->player_px = $player_px;

        return $this;
    }

    /**
     * Get the value of player_gold
     */
    public function getPlayer_gold()
    {
        return $this->player_gold;
    }

    /**
     * Set the value of player_gold
     *
     * @return  self
     */
    public function setPlayer_gold($player_gold)
    {
        $this->player_gold = $player_gold;

        return $this;
    }

    /**
     * Get the value of player_for
     */
    public function getPlayer_for()
    {
        return $this->player_for;
    }

    /**
     * Set the value of player_for
     *
     * @return  self
     */
    public function setPlayer_for($player_for)
    {
        $this->player_for = $player_for;

        return $this;
    }

    /**
     * Get the value of player_int
     */
    public function getPlayer_int()
    {
        return $this->player_int;
    }

    /**
     * Set the value of player_int
     *
     * @return  self
     */
    public function setPlayer_int($player_int)
    {
        $this->player_int = $player_int;

        return $this;
    }

    /**
     * Get the value of player_dex
     */
    public function getPlayer_dex()
    {
        return $this->player_dex;
    }

    /**
     * Set the value of player_dex
     *
     * @return  self
     */
    public function setPlayer_dex($player_dex)
    {
        $this->player_dex = $player_dex;

        return $this;
    }

    /**
     * Get the value of player_race
     */
    public function getPlayer_race()
    {
        return $this->player_race;
    }

    /**
     * Set the value of player_race
     *
     * @return  self
     */
    public function setPlayer_race($player_race)
    {
        $this->player_race = $player_race;

        return $this;
    }

    /**
     * Get the value of player_sex
     */
    public function getPlayer_sex()
    {
        return $this->player_sex;
    }

    /**
     * Set the value of player_sex
     *
     * @return  self
     */
    public function setPlayer_sex($player_sex)
    {
        $this->player_sex = $player_sex;

        return $this;
    }

    /**
     * Get the value of player_divinity
     */
    public function getPlayer_divinity()
    {
        return $this->player_divinity;
    }

    /**
     * Set the value of player_divinity
     *
     * @return  self
     */
    public function setPlayer_divinity($player_divinity)
    {
        $this->player_divinity = $player_divinity;

        return $this;
    }

    /**
     * Get the value of player_user
     */
    public function getPlayer_user()
    {
        return $this->player_user;
    }

    /**
     * Set the value of player_user
     *
     * @return  self
     */
    public function setPlayer_user($player_user)
    {
        $this->player_user = $player_user;

        return $this;
    }

    /**
     * Get the value of player_character
     */
    public function getPlayer_character()
    {
        return $this->player_character;
    }

    /**
     * Set the value of player_character
     *
     * @return  self
     */
    public function setPlayer_character($player_character)
    {
        $this->player_character = $player_character;

        return $this;
    }

    /**
     * Get the value of player_phobia
     */
    public function getPlayer_phobia()
    {
        return $this->player_phobia;
    }

    /**
     * Set the value of player_phobia
     *
     * @return  self
     */
    public function setPlayer_phobia($player_phobia)
    {
        $this->player_phobia = $player_phobia;

        return $this;
    }


    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Méthode qui permet d'ajouter un personnage en base de données
     * 
     * @param array
     * @return boolean
     */
    public function addPlayer(array $arrayParameters)
    {
        $query = "INSERT INTO `player` (`player_lastname`, `player_firstname`, `player_race_id`, `player_sex_id`, `player_age`, `divinity_id`, `player_character`, `player_phobia`, `users_id`) VALUES (:playerLastname, :playerFirstname, :playerRace, :playerSex, :playerAge, :playerDivinity, :playerCharacter, :playerPhobia, :usersId);";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("playerLastname", $arrayParameters["playerLastname"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerFirstname", $arrayParameters["playerFirstname"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerRace", $arrayParameters["playerRace"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerSex", $arrayParameters["playerSex"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerAge", $arrayParameters["playerAge"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerDivinity", $arrayParameters["playerDivinity"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerCharacter", $arrayParameters["playerCharacter"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerPhobia", $arrayParameters["playerPhobia"], PDO::PARAM_STR);
        $buildQuery->bindValue("usersId", $arrayParameters["usersId"], PDO::PARAM_STR);
        return $buildQuery->execute();
    }

    /**
     * Méthode qui permet de récupérer  tous les personnages d'un utilisateur
     * 
     * @return array|boolean
     */
    public function getAllPlayerName($id)
    {
        $query = "SELECT * FROM `player` INNER JOIN `users` ON `users`.`users_id` = `player`.`users_id` WHERE `player`.`users_id` = :id;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("id", $id, PDO::PARAM_INT);
        $buildQuery->execute();
        $resultQuery = $buildQuery->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($resultQuery)) {
            return $resultQuery;
        } else {
            return false;
        }
    }

    /**
     * Méthode qui permet de modifier un personnage existant
     * 
     * @param array
     * @return boolean
     */
    public function updatePlayer(array $arrayParameters)
    {
        $query = "UPDATE `player` SET `player_lastname` = :playerLastname, `player_firstname` = :playerFirstname, `player_race_id` = :playerRace, `player_sex_id` = :playerSex,
         `player_age` = :playerAge, `divinity_id` = :playerDivinity, `player_character` = :playerCharacter, `player_phobia` = :playerPhobia, `player_pv`= :playerPv,
          `player_pvmax` = :playerPvMax, `player_pm`= :playerPm, `player_pmmax` = :playerPmMax, `player_intervention` =  :playerIntervention, `player_action` = :playerAction,
       `player_px` = :playerPx, `player_gold` = :playerGold, `player_bonus_ca` = :playerCa, `player_bonus_damage` = :playerDamage, `player_bonus_critical` = :playerCritical,
            `player_bonus_aoe` = :playerAoe, `player_bonus_chain` = :playerChain, `player_bonus_hot` = :playerHot, `player_bonus_heal` = :playerHeal,
             `player_bonus_affliction` = :playerAffliction, `player_bonus_frenesie` = :playerFrenesie, `player_bonus_impact` = :playerImpact, `player_for` = :playerFor,
    `player_bonus_for` = :playerForBonus, `player_int` = :playerInt, `player_bonus_int` = :playerIntBonus, `player_dex` = :playerDex, `player_bonus_dex` = :playerDexBonus,
               `player_skill1` = :playerSkill1, `player_skill1_level` = :skill1Level, `player_skill2` = :playerSkill2, `player_skill2_level` = :skill2Level,
                `player_skill3` = :playerSkill3, `player_skill3_level` = :skill3Level, `player_skill4` = :playerSkill4, `player_skill4_level` = :skill4Level,
                 `player_skill5` = :playerSkill5, `player_skill5_level` = :skill5Level, `player_skill6` = :playerSkill6, `player_skill6_level` = :skill6Level,
                  `player_memo` = :memo WHERE `player_id` = :id;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("playerLastname", $arrayParameters["playerLastname"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerFirstname", $arrayParameters["playerFirstname"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerRace", $arrayParameters["playerRace"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerSex", $arrayParameters["playerSex"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerAge", $arrayParameters["playerAge"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerDivinity", $arrayParameters["playerDivinity"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerCharacter", $arrayParameters["playerCharacter"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerPhobia", $arrayParameters["playerPhobia"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerPv", $arrayParameters["playerPv"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerPvMax", $arrayParameters["playerPvMax"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerPm", $arrayParameters["playerPm"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerPmMax", $arrayParameters["playerPmMax"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerIntervention", $arrayParameters["playerIntervention"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerAction", $arrayParameters["playerAction"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerPx", $arrayParameters["playerPx"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerGold", $arrayParameters["playerGold"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerCa", $arrayParameters["playerCa"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerDamage", $arrayParameters["playerDamage"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerCritical", $arrayParameters["playerCritical"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerAoe", $arrayParameters["playerAoe"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerChain", $arrayParameters["playerChain"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerHot", $arrayParameters["playerHot"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerHeal", $arrayParameters["playerHeal"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerAffliction", $arrayParameters["playerAffliction"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerFrenesie", $arrayParameters["playerFrenesie"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerImpact", $arrayParameters["playerImpact"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerFor", $arrayParameters["playerFor"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerForBonus", $arrayParameters["playerForBonus"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerInt", $arrayParameters["playerInt"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerIntBonus", $arrayParameters["playerIntBonus"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerDex", $arrayParameters["playerDex"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerDexBonus", $arrayParameters["playerDexBonus"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerSkill1", $arrayParameters["playerSkill1"], PDO::PARAM_STR);
        $buildQuery->bindValue("skill1Level", $arrayParameters["skill1Level"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerSkill2", $arrayParameters["playerSkill2"], PDO::PARAM_STR);
        $buildQuery->bindValue("skill2Level", $arrayParameters["skill2Level"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerSkill3", $arrayParameters["playerSkill3"], PDO::PARAM_STR);
        $buildQuery->bindValue("skill3Level", $arrayParameters["skill3Level"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerSkill4", $arrayParameters["playerSkill4"], PDO::PARAM_STR);
        $buildQuery->bindValue("skill4Level", $arrayParameters["skill4Level"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerSkill5", $arrayParameters["playerSkill5"], PDO::PARAM_STR);
        $buildQuery->bindValue("skill5Level", $arrayParameters["skill5Level"], PDO::PARAM_STR);
        $buildQuery->bindValue("playerSkill6", $arrayParameters["playerSkill6"], PDO::PARAM_STR);
        $buildQuery->bindValue("skill6Level", $arrayParameters["skill6Level"], PDO::PARAM_STR);
        $buildQuery->bindValue("memo", $arrayParameters["memo"], PDO::PARAM_STR);
        $buildQuery->bindValue("id", $arrayParameters["id"], PDO::PARAM_INT);
        return $buildQuery->execute();
    }

    public function getAllInformationPlayer($playerId)
    {
        // $query = "SELECT `player`.`player_id`, `player`.`player_lastname`, `player`.`player_firstname`, `player`.`player_age`, `player`.`player_pv`, `player`.`player_pvmax`, `player`.`player_pm`, `player`.`player_pmmax`, `player`.`player_intervention`, `player`.`player_action`, `player`.`player_px`, `player`.`player_gold`, `player`.`player_for`, `player`.`player_int`, `player`.`player_dex`, `player`.`player_character`, `player`.`player_phobia`, `player_race`.`player_race_type`, `player_sex`.`player_sex_type`, `users`.`users_username`, `divinity`.`divinity_name`, `player`.`player_memo`, `item`.`item_name`, `bonus`.`bonus_value`, `player`.`player_skill1`,`player`.`player_skill2`, `player`.`player_skill3`, `player`.`player_skill4`, `player`.`player_skill5`, `player`.`player_skill6`
        $query = "SELECT * FROM `player`
        INNER JOIN `users` ON `users`.`users_id` = `player`.`users_id`
        INNER JOIN `player_race` ON `player_race`.`player_race_id` = `player`.`player_race_id`
        INNER JOIN `player_sex` ON `player_sex`.`player_sex_id` = `player`.`player_sex_id`
        INNER JOIN `divinity` ON `divinity`.`divinity_id` = `player`.`divinity_id`
        WHERE `player`.`player_id` = :playerId;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("playerId", $playerId, PDO::PARAM_INT);
        $buildQuery->execute();
        $resultQuery = $buildQuery->fetch(PDO::FETCH_ASSOC);
        if (!empty($resultQuery)) {
            return $resultQuery;
        } else {
            return false;
        }
    }


    public function deletePlayer($id) {
        $query = "DELETE FROM `player` WHERE `player_id` = :id;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindValue("id", $id, PDO::PARAM_INT);
        return $buildQuery->execute();       
         
    }
}
