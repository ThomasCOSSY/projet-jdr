<?php
session_start();
require "../Models/Database.php";
require "../Models/Users_role.php";
require "../Models/Users.php";

if(isset($_POST["connectUser"])) {

    $regexUsername = "/^[a-zA-Zéèàëïä -]{3,20}$/";
    $regexPassword = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$/";


    if(preg_match($regexUsername, $_POST["username"])) {
        $securedUsername = htmlspecialchars($_POST["username"]);
    } else {
        $arrayErrors["username"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }

    if(preg_match($regexPassword, $_POST["password"])) {
        $securedPassword = $_POST["password"];
    } else {
        $arrayErrors["password"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }

    $UserRole = new Users_role();
    $resultQuery = $UserRole->verifyUserPresence($securedUsername);

    if(!empty($resultQuery)) {
        if(password_verify($securedPassword, $resultQuery["users_password"])) {
            $user = [];
            $user["id"] = $resultQuery["users_id"];
            $user["firstname"] = $resultQuery["users_firstname"];
            $user["lastname"] = $resultQuery["users_lastname"];
            $user["username"] = $resultQuery["users_username"];
            $user["mail"] = $resultQuery["users_mail"];
            $user["password"] = $resultQuery["users_password"];
            $user["avatar"] = $resultQuery["avatar"];
            $user["role"] = $resultQuery["users_role_role"];
            $_SESSION["user"] = $user;
            header("Location: profile.php");
        }
    } else {
        $message = "Vérifiez vos informations de connexion.";
    }
}