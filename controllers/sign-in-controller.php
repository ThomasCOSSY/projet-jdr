<?php
session_start();
require "../Models/Database.php";
require "../Models/Users.php";

if(isset($_POST["addUser"])) {

    $regexName = "/^[a-zA-Zéèàëïä -]+$/";
    $regexPassword = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/";
    $regexUsername = "/^[a-zA-Zéèàëïä -]{3,20}$/";
    $arrayErrors = [];
    $arrayParameters = [];

    if(preg_match($regexName, $_POST["firstname"])) {
        $securedFirstname = htmlspecialchars($_POST["firstname"]);
        $arrayParameters["firstname"] = $securedFirstname;
    } else {
        $arrayErrors["firstname"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexName, $_POST["lastname"])) {
        $securedLastname = htmlspecialchars($_POST["lastname"]);
        $arrayParameters["lastname"] = $securedLastname;
    } else {
        $arrayErrors["lastname"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(preg_match($regexUsername, $_POST["username"])) {
        $securedUsername = htmlspecialchars($_POST["username"]);
        $arrayParameters["username"] = $securedUsername;
    } else {
        $arrayErrors["username"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if(filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
        $securedMail = htmlspecialchars($_POST["mail"]);
        $arrayParameters["mail"] = $securedMail;
    } else {
        $arrayErrors["mail"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if($_POST["password"] === $_POST["confirmPassword"]) {
        if(preg_match($regexPassword, $_POST["password"])) {
            $securedPassword = password_hash($_POST["password"], PASSWORD_BCRYPT);
            $arrayParameters["password"] = $securedPassword;
        } else {
            $arrayErrors["password"] = "Veuillez renseigner un mot de passe contenant au moins : \n
            - une lettre majuscule \n
            - une lettre minuscule \n
            - un chiffre \n
            - un caractère spécial.";
        }
    } else {
        $arrayErrors["password"] = "Les 2 mots de passes ne sont pas identiques.";
    }

    if(empty($arrayErrors)) {
        $User = new Users();
        if($User->addUser($arrayParameters)) {
            $_SESSION["message"] = "Vous êtes bien inscrit sur le site, essayez de vous connecter !";
            header("Location: connection.php");
        } else {
            $message = "Il y a eu une erreur lors de l'inscription.";
        }
    } else {
        $message = "Vérifiez les erreurs du formulaire.";
    }
}