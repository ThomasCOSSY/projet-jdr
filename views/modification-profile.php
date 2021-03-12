<?php
require "../Controllers/modification-profileController.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

    <h1 class="text-center">Bienvenue <?= $_SESSION["user"]["username"] ?> !</h1>
    <div class="d-flex justify-content-center align-items-center"><img class="img1 col-6" src="../assets/img/groupe-aventuriers.jpg" alt="groupe d'aventuriers"></div>

    <div class="container d-flex justify-content-around align-items-center col-6 mt-5">


        <?= isset($message) ? "<p style=\"color:white; background-color:red;\">" . $message . "</p>" : "" ?>
        <form action="modification-profile.php" method="post">
            <div>
                <label for="firstname" class="white">Prénom : </label>
                <input type="text" name="firstname" required <?= isset($_SESSION["user"]["firstname"]) ? "value=\"" . $_SESSION["user"]["firstname"] . "\"" : "" ?>>
                <?= isset($arrayErrors["firstname"]) ? "<p style=\"color:white; background-color:red;\">" . $arrayErrors["firstname"] . "</p>" : "" ?>
            </div>
            <div>
                <label for="lastname" class="white">Nom : </label>
                <input type="text" name="lastname" required <?= isset($_SESSION["user"]["lastname"]) ? "value=\"" . $_SESSION["user"]["lastname"] . "\"" : "" ?>>
                <?= isset($arrayErrors["lastname"]) ? "<p style=\"color:white; background-color:red;\">" . $arrayErrors["lastname"] . "</p>" : "" ?>
            </div>
            <div>
                <label for="username" class="white">Nom d'utilisateur : </label>
                <input type="text" name="username" required <?= isset($_SESSION["user"]["username"]) ? "value=\"" . $_SESSION["user"]["username"] . "\"" : "" ?>>
                <?= isset($arrayErrors["username"]) ? "<p style=\"color:white; background-color:red;\">" . $arrayErrors["username"] . "</p>" : "" ?>
            </div>            
            <div>
                <label for="mail" class="white">Adresse mail : </label>
                <input type="email" name="mail" required <?= isset($_SESSION["user"]["mail"]) ? "value=\"" . $_SESSION["user"]["mail"] . "\"" : "" ?>>
                <?= isset($arrayErrors["mail"]) ? "<p style=\"color:white; background-color:red;\">" . $arrayErrors["mail"] . "</p>" : "" ?>
            </div>
            <button type="submit" name="submitModifUsers">Modifier</button>

            

        </form>
        
        <form method="post" action="profile.php"><input type="submit" name="valider" value="Annuler" /></form>

    </div>

    <footer class="bg-light text-center align-items-center justify-content-center p-4 mt-5">
        <p class="text-center">The Eclipse Company © 2021 Tous les droits réserves </p>
    </footer>


    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/cleave.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>