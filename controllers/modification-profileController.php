<?php
session_start();
require "../Models/Database.php";
require "../Models/Users.php";


$users = new Users();

// Si on arrive sur la page modif Users avec un id provenant du profil Users en méthode POST,
// Alors on va vérifier cet id, le valider, et le stocker dans une variable qui nous servira à récupérer toutes les informations actuelles d'un Users
// Ce qui nous permettra de préremplir les champs du formulaire grâce aux données récupérées
if (isset($_SESSION["user"]["id"]) && !empty($_SESSION["user"]["id"])) {
    $regexId = "/^[0-9]+$/";


    $id = htmlspecialchars($_SESSION["user"]["id"]);
    if (preg_match($regexId, $id)) {
        $securedId = (int)$id;
        $usersInformations = $users->getOneUsersInformations($securedId);
    } else {
        $errorMessage = "Arrête de toucher à mes POST";
    }
}

// Si le POST de modification est présent alors on va effectuer la modification avec toutes les validations de champs, comme fait précédemment dans l'ajout de Users
if (isset($_POST["submitModifUsers"])) {

    $regexName = "/^[a-zA-Zéèàëïä -]+$/";    
    $regexUsername = "/^[a-zA-Zéèàëïä -]{3,20}$/";
    $arrayErrors = [];
    $arrayParameters = [];

    if (preg_match($regexName, $_POST["firstname"])) {
        $securedFirstname = htmlspecialchars($_POST["firstname"]);
        $arrayParameters["firstname"] = $securedFirstname;
    } else {
        $arrayErrors["firstname"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if (preg_match($regexName, $_POST["lastname"])) {
        $securedLastname = htmlspecialchars($_POST["lastname"]);
        $arrayParameters["lastname"] = $securedLastname;
    } else {
        $arrayErrors["lastname"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if (preg_match($regexUsername, $_POST["username"])) {
        $securedUsername = htmlspecialchars($_POST["username"]);
        $arrayParameters["username"] = $securedUsername;
    } else {
        $arrayErrors["username"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    if (filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
        $securedMail = htmlspecialchars($_POST["mail"]);
        $arrayParameters["mail"] = $securedMail;
    } else {
        $arrayErrors["mail"] = "Veuillez renseigner une valeur valide pour ce champ.";
    }
    



    if (empty($arrayErrors)) {

        // On fera bien attention ici à rajouter l'id du Users concerné par la modification dans le tableau de paramètres à envoyer à la méthode de modification
        $arrayParameters = [
            "lastname" => $securedLastname,
            "firstname" => $securedFirstname,
            "username" => $securedUsername,            
            "mail" => $securedMail,
            "id" => $securedId
        ];

        // Si la méthode de modification renvoie true, alors on stockera un message de succès en session et on redirigera sur la page profil Users avec l'id du Users en paramètre d'URL
        if ($users->updateUsers($arrayParameters)) {
            $_SESSION["successMessage"] = "Le profile a bien été modifié";
            $_SESSION["user"]["lastname"] = $securedLastname;
            $_SESSION["user"]["firstname"] = $securedFirstname;
            $_SESSION["user"]["username"] = $securedUsername;
            $_SESSION["user"]["mail"] = $securedMail;
            header("Location: profile.php");
        } else {
            $message = "Il y a eu une erreur lors de la modification du profile";
        }
    }
}
