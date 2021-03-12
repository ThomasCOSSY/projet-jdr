<?php
require "../Controllers/sign-in-controller.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

    <h1 class="text-center">Bienvenue aventurier !</h1>
    <div class="d-flex justify-content-center align-items-center"><img class="img1 col-6" src="../assets/img/groupe-aventuriers.jpg" alt="groupe d'aventuriers"></div>

    <div class="container d-flex justify-content-around align-items-center col-6 mt-5">


        <?= isset($message) ? "<p style=\"color:white; background-color:red;\">" . $message . "</p>" : "" ?>
        <form action="sign-in.php" method="post">
            <div>
                <label for="firstname" class="white">Prénom : </label>
                <input type="text" name="firstname" required <?= isset($_POST["firstname"]) ? "value=\"" . $_POST['firstname'] . "\"" : "" ?>>
                <?= isset($arrayErrors["firstname"]) ? "<p style=\"color:white; background-color:red;\">" . $arrayErrors["firstname"] . "</p>" : "" ?>
            </div>
            <div>
                <label for="lastname" class="white">Nom : </label>
                <input type="text" name="lastname" required <?= isset($_POST["lastname"]) ? "value=\"" . $_POST['lastname'] . "\"" : "" ?>>
                <?= isset($arrayErrors["lastname"]) ? "<p style=\"color:white; background-color:red;\">" . $arrayErrors["lastname"] . "</p>" : "" ?>
            </div>
            <div>
                <label for="username" class="white">Nom d'utilisateur : </label>
                <input id="username" type="text" name="username" required <?= isset($_POST["username"]) ? "value=\"" . $_POST['username'] . "\"" : "" ?>>
                <p id="validationUsername"></p>
                <?= isset($arrayErrors["username"]) ? "<p style=\"color:white; background-color:red;\">" . $arrayErrors["username"] . "</p>" : "" ?>
            </div>
            <div>
                <label for="password" class="white">Mot de passe : </label>
                <input type="password" name="password" id="password" required>
                <button type="button" id="revealPassword"><img src="../assets/img/oeil.jpg" alt="oeil" height="20px"></button>
            </div>
            <div>
                <label for="confirmPassword" class="white">Confirmer le mot de passe : </label>
                <input type="password" name="confirmPassword" required>
                <?= isset($arrayErrors["password"]) ? "<p style=\"color:white; background-color:red;\">" . $arrayErrors["password"] . "</p>" : "" ?>
            </div>
            <div>
                <label for="mail" class="white">Adresse mail : </label>
                <input type="email" name="mail" required <?= isset($_POST["mail"]) ? "value=\"" . $_POST['mail'] . "\"" : "" ?>>
                <?= isset($arrayErrors["mail"]) ? "<p style=\"color:white; background-color:red;\">" . $arrayErrors["mail"] . "</p>" : "" ?>
            </div>
            <button type="submit" name="addUser">Inscription</button>
        </form>
        


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