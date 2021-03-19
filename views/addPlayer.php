<?php
require "../Controllers/addPlayerController.php";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche de personnage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

    <Div class="col-12 d-flex flex-column justify-content-center align-items-center mt-5">
        <!-- les infos joueurs -->
        <div class=" d-flex justify-content-center align-items-center mt-5 white">
            <h3>Création d'un personnage</h3>
        </div>
        <div class="bg-white col-12 text-center row justify-content-around" style="height: 20em;">

            <div class="row">

                <div class="m-3">
                    <h4>Identitée</h4>
                    <form action="addPlayer.php" method="post">
                        <div class="d-flex justify-content-between">
                            <label for="player" class="m-1">joueur : </label>
                            <input type="text" name="player" <?= isset($_SESSION["user"]["username"]) ? "value=\"" . $_SESSION["user"]["username"] . "\"" : "" ?>>
                        </div>
                        <div class="d-flex justify-content-between">
                            <label for="playerLastname" class="m-1">Nom du personnage : </label>
                            <input type="text" name="playerLastname" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <label for="playerFirstname" class="m-1">Prénom du personnage : </label>
                            <input type="text" name="playerFirstname" required>
                        </div>

                        <!-- race -->
                        <div class="d-flex justify-content-between">
                            <label for="playerRace" class="m-1">Race : </label>
                            <select name="playerRace" id="playerRace">
                                <option value="">Sélectionner une race</option>
                                <?php
                                $raceList = $race->getAllRace();
                                
                                foreach ($raceList as $key => $value) {
                                ?>
                                    <option value="<?= $value['player_race_id'] ?>"><?= $value['player_race_type'] ?> </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <!-- sexe -->
                        <div class="d-flex justify-content-between">
                            <label for="playerSex" class="m-1">sexe : </label>
                            <select name="playerSex" id="playerSex">
                                <option value="">Sélectionner un sexe</option>
                                <?php
                                $sexeList = $sexe->getAllSexe();
                                foreach ($sexeList as $key => $value) {
                                ?>
                                    <option value="<?= $value['player_sex_id'] ?>"><?= $value['player_sex_type'] ?> </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>


                        
                        <div class="d-flex justify-content-between">
                            <label for="playerAge" class="m-1">Age : </label>
                            <input type="text" name="playerAge" required>
                        </div>


                        <!-- divinitées -->
                        <div class="d-flex justify-content-between">
                            <label for="playerDivinity" class="m-1">Divinitée : </label>
                            <select name="playerDivinity" id="playerDivinity">
                                <option value="">Sélectionner une divinitée</option>
                                <?php
                                $divinityList = $divinity->getAllDivinity();
                                foreach ($divinityList as $key => $value) {
                                ?>
                                    <option value="<?= $value['divinity_id'] ?>"><?= $value['divinity_name'] ?> </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                       
                        <div class="d-flex justify-content-between">
                            <label for="playerCharacter" class="m-1">trait de caractère : </label>
                            <input type="text" name="playerCharacter" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <label for="playerPhobia" class="m-1">Phobie : </label>
                            <input type="text" name="playerPhobia" required>
                        </div>
                        <div class="m-1"> <button type="submit" name="addPlayer">Créer</button> </div>
                    </form>


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