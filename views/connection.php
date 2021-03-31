<?php

require "../controllers/connectionController.php";
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

<!-- grand ecran -->

<div class=" d-none d-xl-block d-lg-block d-md-block">
        <ul class="nav nav-tabs bg-white">
        <li class="">
        <img src="../assets/img/logo.png" alt="logo eclipse" width="50em" class="">
        </li>
            <li class="nav-item">
                <a class="nav-link active" href="../index.php">Accueil</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Navigation</a>
                <div class="dropdown-menu">
                    <a class="nav-link" href="history.php">Histoire du monde</a>
                    <a class="nav-link" href="rules.php">règles de jeux</a>
                    <a class="nav-link" href="divinity.php">Divinités</a>
                    <a class="nav-link" href="skills.php">Compétences</a>
                    <a class="nav-link" href="shop.php">Magasin</a>

                </div>
            </li>
            <li>
                <a class="nav-link" href="connection.php">se connecter</a>
            </li>

        </ul>
    </div>   

    <!-- petit ecran -->

    <div class="Nav-fluid justify-content-center d-block d-md-none d-lg-none d-xl-none">
        <div class="fixed-top " style="width: max-content;">
            <nav class="navbar navbar-dark">
                <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="p-4">
                    <ul class="navbar-nav text-center col-12 m-auto">
                        <li class="nav-item w-100 border border-dark m-1">
                            <a class="nav-link" href="history.php">Histoire du monde</a>
                        </li>
                        <li class="nav-item w-100 border border-dark m-1">
                            <a class="nav-link" href="rules.php">règles de jeux</a>
                        </li>
                        <li class="nav-item w-100 border border-dark m-1">
                            <a class="nav-link" href="divinity.php">Divinités</a>
                        </li>
                        <li class="nav-item w-100 border border-dark m-1">
                            <a class="nav-link" href="skills.php">Compétences</a>
                        </li>
                        <li class="nav-item w-100 border border-dark m-1">
                            <a class="nav-link" href="shop.php">Magasin</a>
                        </li>
                        <li class="nav-item w-100 border border-dark m-1">
                            <a class="nav-link" href="connection.php">se connecter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <h1 class="text-center">Bienvenue aventurier !</h1>
    <div class="d-flex justify-content-center align-items-center"><img class="img1 col-6" src="../assets/img/groupe-aventuriers.jpg"
            alt="groupe d'aventuriers"></div>


<div class="container d-flex justify-content-center align-items-center col-6 mt-5">
    <?php
    if (isset($_SESSION["message"])) {
    ?>
        <p style="background-color:green;color:white;"><?= $_SESSION["message"] ?></p>
    <?php
        unset($_SESSION["message"]);
    }
    //si la personne est admin
    if (isset($_SESSION["user"]["role"]) && $_SESSION["user"]["role"] == "admin") {
    ?>
    <div class="d-flex justify-content-around w-100">
            <div>
                <button class="btn btn-info"  onclick="window.location.href = 'adminDashboard.php';">Le coin admin</button>
            </div>
            <div>
                <button class="btn btn-info" onclick="window.location.href = 'deconnect.php';">Se déconnecter</button>
            </div>
        </div>
        
    <?php
        //si la personne est un utilisateur
    } else if (isset($_SESSION["user"]["role"]) && $_SESSION["user"]["role"] == "user") {
    ?>
    <div class="d-flex justify-content-around w-100">
            <div>
                <button class="btn btn-info" onclick="window.location.href = 'profile.php';">Votre profile</button>
            </div>
            <div>
                <button class="btn btn-info" onclick="window.location.href = 'deconnect.php';">Se déconnecter</button>
            </div>
        </div>
       
    <?php
    } else {
    ?>
    <!-- si la personne n'est pas connectée -->
    <div class="d-flex justify-content-around w-100">
            <div>
                <button class="btn btn-info" onclick="window.location.href = 'sign-in.php';">Pas encore inscrit ?</button>
            </div>
            <div>
                <button class="btn btn-info" onclick="window.location.href = 'login.php';">Se connecter</button>
            </div>
        </div>
    <?php
    }
    ?>
</div>


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