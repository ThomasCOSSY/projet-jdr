<?php
require "../Controllers/login-controller.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

    <h1 class="text-center">Bienvenue aventurier !</h1>
    <div class="d-flex justify-content-center align-items-center"><img class="img1 col-6" src="../assets/img/groupe-aventuriers.jpg" alt="groupe d'aventuriers"></div>

    <div class="container d-flex justify-content-around align-items-center col-6 mt-5">
        <form action="login.php" method="post">
            <div>
                <label for="username" class="white">Nom d'utilisateur : </label>
                <input type="text" name="username" required>
            </div>
            <div>
                <label for="password" class="white">Mot de passe : </label>
                <input type="password" name="password" required>
            </div>
           <div class="d-flex justify-content-center align-items-center"> <button type="submit" name="connectUser">Connexion</button> </div>
        </form>

    </div>
    <div class="d-flex justify-content-center align-items-center mt-5">
        <form action="../index.php">
            <button type="submit">Retour à l'accueil</button>
        </form>
    </div>
    <p class="white text-center"><?= isset($message) ? $message : "" ?></p>



    <footer class="bg-light text-center align-items-center justify-content-center p-4 mt-5">
        <p class="text-center">The Eclipse Company © 2021 Tous les droits réserves </p>
    </footer>

    <script src="../assets/js/cleave.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>