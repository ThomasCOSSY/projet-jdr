<?php
require "../Controllers/deconnect-controller.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déconnexion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <h1 class="white text-center mt-5">Déconnection</h1>

    <div class="d-flex justify-content-center align-items-center m-5">
        <div class="m-5">
            <p class="white text-center">Êtes-vous sûr de vouloir vous déconnecter ?</p>
        </div>
        <div class="m-5">
            <form action="deconnect.php" method="post">
                <button style="width:100px" type="submit" name="deconnectButton">Oui</button>
            </form>
            <a href="profile.php">
                <button style="width:100px" type="button">Non</button>
            </a>
        </div>
    </div>
</body>

</html>