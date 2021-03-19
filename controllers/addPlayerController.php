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

if(isset($_POST["addPlayer"])) {

    $regexDivinity  = "/^[a-zA-Zéèàëïäû -']+$/";
    $regexUsername = "/^[a-zA-Zéèàëïä -]{3,20}$/";
    $regexNumber= "/^[0-9]+$/";
    $arrayErrors = [];
    $arrayParameters = [];

    
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
    if(preg_match($regexNumber, $_POST["playerRace"])) {
        $securedplayerRace = htmlspecialchars($_POST["playerRace"]);
        $arrayParameters["playerRace"] = $securedplayerRace;
    } else {
        $arrayErrors["playerRace"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexNumber, $_POST["playerSex"])) {
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
    if(preg_match($regexNumber, $_POST["playerDivinity"])) {
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
    
    $arrayParameters["usersId"] = $_SESSION["user"]["id"]; 

    if(empty($arrayErrors)) {
        $Player = new Player();
        if($Player->addPlayer($arrayParameters)) {
            $_SESSION["message"] = "Votre personnage a bien été créé !";
            header("Location: profile.php");
        } else {
            $message = "Il y a eu une erreur lors de la création du personnage.";
        }
    } else {
        $message = "Vérifiez les erreurs du formulaire.";
    }
}