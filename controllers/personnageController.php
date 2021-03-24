<?php
session_start();
require "../Models/Database.php";
require "../Models/Users_role.php";
require "../Models/Users.php";
require "../Models/Player.php";
require "../Models/Player_race.php";
require "../Models/Player_sex.php";
require "../Models/Divinity.php";

$race = new Race();
$sexe = new Sexe();
$divinity = new Divinity();
$player = new Player();

if(isset($_POST["playerId"])) { 
    
    $playerId = $_POST["playerId"];
} 
if (isset($_POST["updatePlayer"])){
    
    $playerId = $_POST["updatePlayer"];
}



if(isset($_POST["updatePlayer"])) {

    $regexWord  = "/^[0-9a-zA-Zéèàëïäû -'.,;()]+$/";
    $regexUsername = "/^[a-zA-Zéèàëïä -]{3,20}$/";
    $regexNumber= "/^[0-9]+$/";
    $arrayErrors = [];
    $arrayParameters = [];

    
    $_POST["playerIntervention"] = (isset($_POST["intervention1"]) ? $_POST["intervention1"] : 0) + (isset($_POST["intervention2"]) ? $_POST["intervention2"] : 0);
    $_POST["playerAction"] = (isset($_POST["action1"]) ? $_POST["action1"] : 0) + (isset($_POST["action2"]) ? $_POST["action2"] : 0);
    $_POST["skill1Level"] = (isset($_POST["skill1Level1"]) ? $_POST["skill1Level1"] : 0) + (isset($_POST["skill1Level2"]) ? $_POST["skill1Level2"] : 0) + (isset($_POST["skill1Level3"]) ? $_POST["skill1Level3"] : 0) + (isset($_POST["skill1Level4"]) ? $_POST["skill1Level4"] : 0) + (isset($_POST["skill1Level5"]) ? $_POST["skill1Level5"] : 0) + (isset($_POST["skill1Level6"]) ? $_POST["skill1Level6"] : 0) + (isset($_POST["skill1Level7"]) ? $_POST["skill1Level7"] : 0) + (isset($_POST["skill1Level8"]) ? $_POST["skill1Level8"] : 0) + (isset($_POST["skill1Level9"]) ? $_POST["skill1Level9"] : 0) + (isset($_POST["skill1Level10"]) ? $_POST["skill1Level10"] : 0);
    $_POST["skill2Level"] = (isset($_POST["skill2Level1"]) ? $_POST["skill2Level1"] : 0) + (isset($_POST["skill2Level2"]) ? $_POST["skill2Level2"] : 0) + (isset($_POST["skill2Level3"]) ? $_POST["skill2Level3"] : 0) + (isset($_POST["skill2Level4"]) ? $_POST["skill2Level4"] : 0) + (isset($_POST["skill2Level5"]) ? $_POST["skill2Level5"] : 0) + (isset($_POST["skill2Level6"]) ? $_POST["skill2Level6"] : 0) + (isset($_POST["skill2Level7"]) ? $_POST["skill2Level7"] : 0) + (isset($_POST["skill2Level8"]) ? $_POST["skill2Level8"] : 0) + (isset($_POST["skill2Level9"]) ? $_POST["skill2Level9"] : 0) + (isset($_POST["skill2Level10"]) ? $_POST["skill2Level10"] : 0);
    $_POST["skill3Level"] = (isset($_POST["skill3Level1"]) ? $_POST["skill3Level1"] : 0) + (isset($_POST["skill3Level2"]) ? $_POST["skill3Level2"] : 0) + (isset($_POST["skill3Level3"]) ? $_POST["skill3Level3"] : 0) + (isset($_POST["skill3Level4"]) ? $_POST["skill3Level4"] : 0) + (isset($_POST["skill3Level5"]) ? $_POST["skill3Level5"] : 0) + (isset($_POST["skill3Level6"]) ? $_POST["skill3Level6"] : 0) + (isset($_POST["skill3Level7"]) ? $_POST["skill3Level7"] : 0) + (isset($_POST["skill3Level8"]) ? $_POST["skill3Level8"] : 0) + (isset($_POST["skill3Level9"]) ? $_POST["skill3Level9"] : 0) + (isset($_POST["skill3Level10"]) ? $_POST["skill3Level10"] : 0);
    $_POST["skill4Level"] = (isset($_POST["skill4Level1"]) ? $_POST["skill4Level1"] : 0) + (isset($_POST["skill4Level2"]) ? $_POST["skill4Level2"] : 0) + (isset($_POST["skill4Level3"]) ? $_POST["skill4Level3"] : 0) + (isset($_POST["skill4Level4"]) ? $_POST["skill4Level4"] : 0) + (isset($_POST["skill4Level5"]) ? $_POST["skill4Level5"] : 0) + (isset($_POST["skill4Level6"]) ? $_POST["skill4Level6"] : 0) + (isset($_POST["skill4Level7"]) ? $_POST["skill4Level7"] : 0) + (isset($_POST["skill4Level8"]) ? $_POST["skill4Level8"] : 0) + (isset($_POST["skill4Level9"]) ? $_POST["skill4Level9"] : 0) + (isset($_POST["skill4Level10"]) ? $_POST["skill4Level10"] : 0);
    $_POST["skill5Level"] = (isset($_POST["skill5Level1"]) ? $_POST["skill5Level1"] : 0) + (isset($_POST["skill5Level2"]) ? $_POST["skill5Level2"] : 0) + (isset($_POST["skill5Level3"]) ? $_POST["skill5Level3"] : 0) + (isset($_POST["skill5Level4"]) ? $_POST["skill5Level4"] : 0) + (isset($_POST["skill5Level5"]) ? $_POST["skill5Level5"] : 0) + (isset($_POST["skill5Level6"]) ? $_POST["skill5Level6"] : 0) + (isset($_POST["skill5Level7"]) ? $_POST["skill5Level7"] : 0) + (isset($_POST["skill5Level8"]) ? $_POST["skill5Level8"] : 0) + (isset($_POST["skill5Level9"]) ? $_POST["skill5Level9"] : 0) + (isset($_POST["skill5Level10"]) ? $_POST["skill5Level10"] : 0);
    $_POST["skill6Level"] = (isset($_POST["skill6Level1"]) ? $_POST["skill6Level1"] : 0) + (isset($_POST["skill6Level2"]) ? $_POST["skill6Level2"] : 0) + (isset($_POST["skill6Level3"]) ? $_POST["skill6Level3"] : 0) + (isset($_POST["skill6Level4"]) ? $_POST["skill6Level4"] : 0) + (isset($_POST["skill6Level5"]) ? $_POST["skill6Level5"] : 0) + (isset($_POST["skill6Level6"]) ? $_POST["skill6Level6"] : 0) + (isset($_POST["skill6Level7"]) ? $_POST["skill6Level7"] : 0) + (isset($_POST["skill6Level8"]) ? $_POST["skill6Level8"] : 0) + (isset($_POST["skill6Level9"]) ? $_POST["skill6Level9"] : 0) + (isset($_POST["skill6Level10"]) ? $_POST["skill6Level10"] : 0);


    
    if(preg_match($regexUsername, $_POST["playerLastname"])) {
        $securedplayerLastname = htmlspecialchars($_POST["playerLastname"]);
        $arrayParameters["playerLastname"] = $securedplayerLastname;
    } else {
        $arrayErrors["playerLastname"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexUsername, $_POST["playerFirstname"])) {
        $securedplayerFirstname = htmlspecialchars($_POST["playerFirstname"]);
        $arrayParameters["playerFirstname"] = $securedplayerFirstname;
    } else {
        $arrayErrors["playerFirstname"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexWord, $_POST["playerRace"])) {
        $securedplayerRace = htmlspecialchars($_POST["playerRace"]);
        $arrayParameters["playerRace"] = $securedplayerRace;
    } else {
        $arrayErrors["playerRace"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexWord, $_POST["playerSex"])) {
        $securedplayerSex = htmlspecialchars($_POST["playerSex"]);
        $arrayParameters["playerSex"] = $securedplayerSex;
    } else {
        $arrayErrors["playerSex"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerAge"])) {
        $securedplayerAge = htmlspecialchars($_POST["playerAge"]);
        $arrayParameters["playerAge"] = $securedplayerAge;
    } else {
        $arrayErrors["playerAge"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexWord, $_POST["playerDivinity"])) {
        $securedplayerDivinity = htmlspecialchars($_POST["playerDivinity"]);
        $arrayParameters["playerDivinity"] = $securedplayerDivinity;
    } else {
        $arrayErrors["playerDivinity"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexUsername, $_POST["playerCharacter"])) {
        $securedplayerCharacter = htmlspecialchars($_POST["playerCharacter"]);
        $arrayParameters["playerCharacter"] = $securedplayerCharacter;
    } else {
        $arrayErrors["playerCharacter"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexUsername, $_POST["playerPhobia"])) {
        $securedplayerPhobia = htmlspecialchars($_POST["playerPhobia"]);
        $arrayParameters["playerPhobia"] = $securedplayerPhobia;
    } else {
        $arrayErrors["playerPhobia"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerPv"])) {
        $securedplayerpv = htmlspecialchars($_POST["playerPv"]);
        $arrayParameters["playerPv"] = $securedplayerpv;
    } else {
        $arrayErrors["playerPv"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerPvMax"])) {
        $securedplayerpvmax = htmlspecialchars($_POST["playerPvMax"]);
        $arrayParameters["playerPvMax"] = $securedplayerpvmax;
    } else {
        $arrayErrors["playerPvMax"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerPm"])) {
        $securedplayerpm = htmlspecialchars($_POST["playerPm"]);
        $arrayParameters["playerPm"] = $securedplayerpm;
    } else {
        $arrayErrors["playerPm"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerPmMax"])) {
        $securedplayerpmmax = htmlspecialchars($_POST["playerPmMax"]);
        $arrayParameters["playerPmMax"] = $securedplayerpmmax;
    } else {
        $arrayErrors["playerPmMax"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerIntervention"])) {
        $securedplayerintervention = htmlspecialchars($_POST["playerIntervention"]);
        $arrayParameters["playerIntervention"] = $securedplayerintervention;
    } else {
        $arrayErrors["playerIntervention"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerAction"])) {
        $securedplayeraction = htmlspecialchars($_POST["playerAction"]);
        $arrayParameters["playerAction"] = $securedplayeraction;
    } else {
        $arrayErrors["playerAction"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerPx"])) {
        $securedplayerpx = htmlspecialchars($_POST["playerPx"]);
        $arrayParameters["playerPx"] = $securedplayerpx;
    } else {
        $arrayErrors["playerPx"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerGold"])) {
        $securedplayergold = htmlspecialchars($_POST["playerGold"]);
        $arrayParameters["playerGold"] = $securedplayergold;
    } else {
        $arrayErrors["playerGold"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerCa"])) {
        $securedplayerca = htmlspecialchars($_POST["playerCa"]);
        $arrayParameters["playerCa"] = $securedplayerca;
    } else {
        $arrayErrors["playerCa"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerDamage"])) {
        $securedplayerdamage = htmlspecialchars($_POST["playerDamage"]);
        $arrayParameters["playerDamage"] = $securedplayerdamage;
    } else {
        $arrayErrors["playerDamage"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerCritical"])) {
        $securedplayercritical = htmlspecialchars($_POST["playerCritical"]);
        $arrayParameters["playerCritical"] = $securedplayercritical;
    } else {
        $arrayErrors["playerCritical"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerAoe"])) {
        $securedplayeraoe = htmlspecialchars($_POST["playerAoe"]);
        $arrayParameters["playerAoe"] = $securedplayeraoe;
    } else {
        $arrayErrors["playerAoe"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerChain"])) {
        $securedplayerchain = htmlspecialchars($_POST["playerChain"]);
        $arrayParameters["playerChain"] = $securedplayerchain;
    } else {
        $arrayErrors["playerChain"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerHot"])) {
        $securedplayerhot = htmlspecialchars($_POST["playerHot"]);
        $arrayParameters["playerHot"] = $securedplayerhot;
    } else {
        $arrayErrors["playerHot"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerHeal"])) {
        $securedplayerheal = htmlspecialchars($_POST["playerHeal"]);
        $arrayParameters["playerHeal"] = $securedplayerheal;
    } else {
        $arrayErrors["playerHeal"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerAffliction"])) {
        $securedplayeraffliction = htmlspecialchars($_POST["playerAffliction"]);
        $arrayParameters["playerAffliction"] = $securedplayeraffliction;
    } else {
        $arrayErrors["playerAffliction"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerFrenesie"])) {
        $securedplayerfrenesie = htmlspecialchars($_POST["playerFrenesie"]);
        $arrayParameters["playerFrenesie"] = $securedplayerfrenesie;
    } else {
        $arrayErrors["playerFrenesie"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerImpact"])) {
        $securedplayerimpact = htmlspecialchars($_POST["playerImpact"]);
        $arrayParameters["playerImpact"] = $securedplayerimpact;
    } else {
        $arrayErrors["playerImpact"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerFor"])) {
        $securedplayerfor = htmlspecialchars($_POST["playerFor"]);
        $arrayParameters["playerFor"] = $securedplayerfor;
    } else {
        $arrayErrors["playerFor"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerForBonus"])) {
        $securedplayerforbonus = htmlspecialchars($_POST["playerForBonus"]);
        $arrayParameters["playerForBonus"] = $securedplayerforbonus;
    } else {
        $arrayErrors["playerForBonus"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerInt"])) {
        $securedplayerint = htmlspecialchars($_POST["playerInt"]);
        $arrayParameters["playerInt"] = $securedplayerint;
    } else {
        $arrayErrors["playerInt"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerIntBonus"])) {
        $securedplayerintbonus = htmlspecialchars($_POST["playerIntBonus"]);
        $arrayParameters["playerIntBonus"] = $securedplayerintbonus;
    } else {
        $arrayErrors["playerIntBonus"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerDex"])) {
        $securedplayerdex = htmlspecialchars($_POST["playerDex"]);
        $arrayParameters["playerDex"] = $securedplayerdex;
    } else {
        $arrayErrors["playerDex"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerDexBonus"])) {
        $securedplayerdexbonus = htmlspecialchars($_POST["playerDexBonus"]);
        $arrayParameters["playerDexBonus"] = $securedplayerdexbonus;
    } else {
        $arrayErrors["playerDexBonus"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexWord, $_POST["playerSkill1"])) {
        $securedplayerskill1 = htmlspecialchars($_POST["playerSkill1"]);
        $arrayParameters["playerSkill1"] = $securedplayerskill1;
    } else {
        $arrayErrors["playerSkill1"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["skill1Level"])) {
        $securedplayerskill1Level = htmlspecialchars($_POST["skill1Level"]);
        $arrayParameters["skill1Level"] = $securedplayerskill1Level;
    } else {
        $arrayErrors["skill1Level"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexWord, $_POST["playerSkill2"])) {
        $securedplayerskill2 = htmlspecialchars($_POST["playerSkill2"]);
        $arrayParameters["playerSkill2"] = $securedplayerskill2;
    } else {
        $arrayErrors["playerSkill2"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["skill2Level"])) {
        $securedplayerskill2level = htmlspecialchars($_POST["skill2Level"]);
        $arrayParameters["skill2Level"] = $securedplayerskill2level;
    } else {
        $arrayErrors["skill2Level"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexWord, $_POST["playerSkill3"])) {
        $securedplayerskill3 = htmlspecialchars($_POST["playerSkill3"]);
        $arrayParameters["playerSkill3"] = $securedplayerskill3;
    } else {
        $arrayErrors["playerSkill3"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["skill3Level"])) {
        $securedplayerskill3level = htmlspecialchars($_POST["skill3Level"]);
        $arrayParameters["skill3Level"] = $securedplayerskill3level;
    } else {
        $arrayErrors["skill3Level"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexWord, $_POST["playerSkill4"])) {
        $securedplayerskill4 = htmlspecialchars($_POST["playerSkill4"]);
        $arrayParameters["playerSkill4"] = $securedplayerskill4;
    } else {
        $arrayErrors["playerSkill4"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["skill4Level"])) {
        $securedplayerskill4bonus = htmlspecialchars($_POST["skill4Level"]);
        $arrayParameters["skill4Level"] = $securedplayerskill4bonus;
    } else {
        $arrayErrors["skill4Level"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexWord, $_POST["playerSkill5"])) {
        $securedplayerskill5 = htmlspecialchars($_POST["playerSkill5"]);
        $arrayParameters["playerSkill5"] = $securedplayerskill5;
    } else {
        $arrayErrors["playerSkill5"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["skill5Level"])) {
        $securedplayerskill5bonus = htmlspecialchars($_POST["skill5Level"]);
        $arrayParameters["skill5Level"] = $securedplayerskill5bonus;
    } else {
        $arrayErrors["skill5Level"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexWord, $_POST["playerSkill6"])) {
        $securedplayerskill6 = htmlspecialchars($_POST["playerSkill6"]);
        $arrayParameters["playerSkill6"] = $securedplayerskill6;
    } else {
        $arrayErrors["playerSkill6"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["skill6Level"])) {
        $securedplayerskill6level = htmlspecialchars($_POST["skill6Level"]);
        $arrayParameters["skill6Level"] = $securedplayerskill6level;
    } else {
        $arrayErrors["skill6Level"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexWord, $_POST["memo"])) {
        $securedplayermemo = htmlspecialchars($_POST["memo"]);
        $arrayParameters["memo"] = $securedplayermemo;
    } else {
        $arrayErrors["memo"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }


    
    $arrayParameters["id"] = $_POST["updatePlayer"]; 

    if(empty($arrayErrors)) {
        
        if($player->updatePlayer($arrayParameters)) {
            $_SESSION["message"] = "Votre personnage a bien été créé !";
            
        } else {
            $message = "Il y a eu une erreur lors de la création du personnage.";
        }
    } else {
        $message = "Vérifiez les erreurs du formulaire.";
    }
}


$playerInformation = $player->getAllInformationPlayer($playerId);


