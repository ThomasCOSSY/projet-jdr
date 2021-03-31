<?php

require "../controllers/profileController.php";

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

   <h1>Bonjour <?= $_SESSION["user"]["username"] ?> !</h1>
<div class="d-flex justify-content-center align-items-center white"><?= isset($_SESSION["message"]) ? $_SESSION["message"] : "" ?></div>

   <div class="container col-12 d-flex">
      <div class="d-flex flex-column">
         <div class="col-12">
            <div class="d-flex justify-content-center align-items-center">
               <?php
               if ($_SESSION["user"]["avatar"] != null) {
               ?>
                  <img src="<?= $_SESSION['user']['avatar'] ?>" width="120" style="width: 100%" />
               <?php
               } else {
               ?>
                  <img src="../assets/img/avatar/defaults/default.png" width="120" style="width: 100%" />
               <?php
               }
               ?>
            </div>
         </div>

         <div class="row d-flex justify-content-center align-items-center">

            <div class="col-sm-12 col-md-8 col-lg-10">
               <form method="post" enctype="multipart/form-data">
                  <label for="file" style="margin-bottom: 0; margin-top: 5px; display: inline-flex">
                     <input id="file" type="file" name="file" class="hide-upload" required />
                     <i class="fa fa-plus image-plus"></i>
                     <input class="btn btn-success"  type="submit" name="avatar" value="Envoyer">
                  </label>
               </form>
            </div>
         </div>

      </div>

      <div class="col-8 d-flex justify-content-center align-items-center">
         <!-- tableau récapitulatif des infos -->
         <main class="bg-white m-5 p-2 d-flex justify-content-center align-items-center">
            <div class="row">
               <section class="col-12">
                  <h2>Utilisateur : </h2>
                  <table class="table">
                     <thead>
                        <th>Nom :</th>
                        <th>Prénom :</th>
                        <th>Pseudo :</th>
                        <th>Mail :</th>
                     </thead>
                     <tbody>


                        <tr>
                           <td><?= $_SESSION["user"]["lastname"] ?></td>
                           <td><?= $_SESSION["user"]["firstname"] ?></td>
                           <td><?= $_SESSION["user"]["username"] ?></td>
                           <td><?= $_SESSION["user"]["mail"] ?></td>
                           <td>
                              <form method="post" action="modification-profile.php"><input class="btn btn-info"  type="submit" name="modifyUsersId" value="modifier les informations" /></form>
                           </td>
                           <td>
                              <form method="post" action="suppression.php"><input class="btn btn-danger"  type="submit" name="valider" value="Supprimer" /></form>
                           </td>
                        </tr>

                     </tbody>

                     <tfoot>

                        <div>
                           <button class="btn btn-info" onclick="window.location.href = 'deconnect.php';">Se déconnecter</button>
                        </div>

                     </tfoot>
                  </table>
               </section>
            </div>
         </main>
      </div>
   </div>


   <main class="bg-white m-5 p-2 d-flex justify-content-center align-items-center">
      <div class="row">
         <section class="col-12">
            <h2>Vos personnages : </h2>
            <?php
            $playerList = $player->getAllPlayerName($id);
            if (isset($playerList) && $playerList != false) {
               foreach ($playerList as $key => $value) {
            ?>
                  <div class="row ">
                     <div class="m-2"><p>Personnage : <?= $value['player_firstname'] . " " . $value['player_lastname'] ?> <br></p></div>

                     <div class="m-2"><form  method="post" action="personnage.php"><button class="btn btn-info" type="submit" name="playerId" value="<?= $value['player_id'] ?>">Fiche du personnage</button></form></div>
                     
                     <div class="m-2"><form  method="post" action="deleteplayer.php"><button class="btn btn-danger" type="submit" name="playerId" value="<?= $value['player_id'] ?>">Supprimer</button></form></div>

                  </div>
            <?php
               };
            }
            ?>

            <form class="mt-5" method="post" action="addplayer.php"><input class="btn btn-success" type="submit" name="" value="Nouveau personnage" /></form>

         </section>
      </div>
   </main>






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