<?php
require "../Controllers/deleteplayerController.php";
var_dump($id);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression du personnage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

    <h1 class="text-center">Suppression du personnage</h1>

    <div class="d-flex justify-content-center align-items-center"><img class="img1 col-6" src="../assets/img/byebye.jpg" alt="aurevoir"></div>
 

    <div class="d-flex justify-content-center align-items-center m-5">
        <div class="m-5">
            <p class="white text-center">Êtes-vous sûr de vouloir supprimer votre personnage ? </br> L'effet sera définitif.</p>
        </div>
        <div class="m-5">
            <form action="deleteplayer.php" method="post">
                <button style="width:100px" type="submit" name="deleteButton" value="<?= $id ?>">Oui</button>
            </form>
            <a href="profile.php">
                <button style="width:100px" type="button">Non</button>
            </a>
        </div>
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