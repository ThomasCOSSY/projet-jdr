<?php
require "../Controllers/personnageController.php";
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
            <h3>Le personnage</h3>
        </div>
        <div class="bg-white col-12 text-center row justify-content-around" style="height: 20em;">

            <div class="row">

                <div class="m-3">
                    <h4>Identitée</h4>
                    <form action="personnage.php" method="post">
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
                        <div class="d-flex justify-content-between">
                            <label for="playerRace" class="m-1">Race : </label>
                            <input type="text" name="playerRace" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <label for="playerSex" class="m-1">Sexe : </label>
                            <input type="text" name="playerSex" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <label for="playerAge" class="m-1">Age : </label>
                            <input type="text" name="playerAge" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <label for="playerDivinity" class="m-1">Divinitée : </label>
                            <input type="text" name="playerDivinity" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <label for="playerCharacter" class="m-1">trait de caractère : </label>
                            <input type="text" name="playerCharacter" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <label for="playerPhobia" class="m-1">Phobie : </label>
                            <input type="text" name="playerPhobia" required>
                        </div>
                        <div class="m-1"> <button type="submit" name="connectUser">modifier</button> </div>
                    </form>
                </div>
                <div class="m-3">
                    <h4>Statistiques</h4>
                    <div class="d-flex justify-content-between">
                        <label for="playerPv" class="m-1">Point de vie actuel : </label>
                        <input type="number" name="playerPv">
                    </div>
                    <div class="d-flex justify-content-between">
                        <label for="playerPvMax" class="m-1">Point de vie max : </label>
                        <input type="number" name="playerPvMax">
                    </div>
                    <div class="d-flex justify-content-between">
                        <label for="playerPm" class="m-1">Point de mana actuel : </label>
                        <input type="number" name="playerPm">
                    </div>
                    <div class="d-flex justify-content-between">
                        <label for="playerPmMax" class="m-1">Point de mana max : </label>
                        <input type="number" name="playerPmMax">
                    </div>
                    <div class="d-flex justify-content-between">
                        <label for="playerIntervention" class="m-1">Intervention Divine : </label>
                        <div>
                            <input type="checkbox" name="intervention1">
                            <input type="checkbox" name="intervention2">
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <label for="playerAction" class="m-1">Action par tour: </label>
                        <div>
                            <input type="checkbox" name="action1">
                            <input type="checkbox" name="action2">
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <label for="playerXp" class="m-1">Point d'expériences </label>
                        <input type="text" name="playerXp">
                    </div>
                    <div class="d-flex justify-content-between">
                        <label for="playerGold" class="m-1">Or : </label>
                        <input type="text" name="playerGold">
                    </div>

                </div>

            </div>
            <div class="col-3 d-flex justify-content-center align-items-center" style="height: 20em;">
                <img class="" style="height: 100%;" src="../assets/img/personnage/archere.png" alt="avatar du personnage">

            </div>

        </div>


        <!-- les bonus -->
        <div class=" d-flex justify-content-center align-items-center mt-5 white">
            <h3>Bonus</h3>
        </div>

        <div class="bg-white col-12 text-center row justify-content-around" style="height: 20em;">

            <div class="m-3">
                <div class="d-flex justify-content-between">
                    <label for="playerCa" class="m-1">CA : </label>
                    <input type="text" name="playerCa">
                </div>
                <div class="d-flex justify-content-between">
                    <label for="playerDamage" class="m-1">Dégats : </label>
                    <input type="text" name="playerDamage">
                </div>
                <div class="d-flex justify-content-between">
                    <label for="playerCritical" class="m-1">Critique : </label>
                    <input type="text" name="playerCritical">
                </div>
            </div>

            <div class="m-3">
                <div class="d-flex justify-content-between">
                    <label for="playerAoe" class="m-1">Cible AOE : </label>
                    <input type="text" name="playerAoe">
                </div>
                <div class="d-flex justify-content-between">
                    <label for="playerChain" class="m-1">Chaine : </label>
                    <input type="text" name="playerChain">
                </div>
                <div class="d-flex justify-content-between">
                    <label for="playerHot" class="m-1">HOT : </label>
                    <input type="text" name="playerHot">
                </div>
                <div class="d-flex justify-content-between">
                    <label for="playerHeal" class="m-1">Soin : </label>
                    <input type="text" name="playerHeal">
                </div>
            </div>

            <div class="m-3">
                <div class="d-flex justify-content-between">
                    <label for="playerAffliction" class="m-1">Affliction : </label>
                    <input type="text" name="playerAffliction">
                </div>
                <div class="d-flex justify-content-between">
                    <label for="playerFrenzy" class="m-1">Frénésie : </label>
                    <input type="text" name="playerFrenzy">
                </div>
                <div class="d-flex justify-content-between">
                    <label for="playerImpact" class="m-1">Impact : </label>
                    <input type="text" name="playerImpact">
                </div>
            </div>
        </div>

        <!-- les attributs -->
        <div class=" d-flex justify-content-center align-items-center mt-5 white">
            <h3>Attributs</h3>
        </div>

        <div class="bg-white col-12 text-center row justify-content-around" style="height: 20em;">

            <div class="m-3">
                <div class="d-flex justify-content-between">
                    <label for="playerFor" class="m-1">Force : </label>
                    <input type="text" name="playerFor">
                </div>
                <div class="d-flex justify-content-between">
                    <label for="playerForBonus" class="m-1">Bonus de Force : </label>
                    <input type="text" name="playerForBonus">
                </div>
            </div>

            <div class="m-3">
                <div class="d-flex justify-content-between">
                    <label for="playerInt" class="m-1">Intélligence : </label>
                    <input type="text" name="playerInt">
                </div>
                <div class="d-flex justify-content-between">
                    <label for="playerIntBonus" class="m-1">Bonus d'intélligence : </label>
                    <input type="text" name="playerIntBonus">
                </div>
            </div>

            <div class="m-3">
                <div class="d-flex justify-content-between">
                    <label for="playerDex" class="m-1">Dextérité: </label>
                    <input type="text" name="playerDex">
                </div>
                <div class="d-flex justify-content-between">
                    <label for="playerDexBonus" class="m-1">Bonus de dextérité : </label>
                    <input type="text" name="playerDexBonus">
                </div>
            </div>
        </div>



        <!-- les skills -->
        <div class=" d-flex justify-content-center align-items-center mt-5 white">
            <h3>Compétences</h3>
        </div>

        <div class="bg-white col-12 text-center d-flex flex-column justify-content-center align-items-center" style="height: 20em;">
            <div class="row d-flex justify-content-between">
                <div class="m-3">
                    <div class="d-flex justify-content-between">
                        <label for="playerSkill1" class="m-1">Domaine : </label>
                        <input type="text" name="playerSkill1" class="m-1">
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="checkbox" name="level1" class="m-1">
                        <input type="checkbox" name="level2" class="m-1">
                        <input type="checkbox" name="level3" class="m-1">
                        <input type="checkbox" name="level4" class="m-1">
                        <input type="checkbox" name="level5" class="m-1">
                        <input type="checkbox" name="level6" class="m-1">
                        <input type="checkbox" name="level7" class="m-1">
                        <input type="checkbox" name="level8" class="m-1">
                        <input type="checkbox" name="level9" class="m-1">
                        <input type="checkbox" name="level10" class="m-1">
                    </div>
                </div>

                <div class="m-3">
                    <div class="d-flex justify-content-between">
                        <label for="playerSkill2" class="m-1">Domaine : </label>
                        <input type="text" name="playerSkill2" class="m-1">
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="checkbox" name="level1" class="m-1">
                        <input type="checkbox" name="level2" class="m-1">
                        <input type="checkbox" name="level3" class="m-1">
                        <input type="checkbox" name="level4" class="m-1">
                        <input type="checkbox" name="level5" class="m-1">
                        <input type="checkbox" name="level6" class="m-1">
                        <input type="checkbox" name="level7" class="m-1">
                        <input type="checkbox" name="level8" class="m-1">
                        <input type="checkbox" name="level9" class="m-1">
                        <input type="checkbox" name="level10" class="m-1">
                    </div>
                </div>

                <div class="m-3">
                    <div class="d-flex justify-content-between">
                        <label for="playerSkill3" class="m-1">Domaine : </label>
                        <input type="text" name="playerSkill3" class="m-1">
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="checkbox" name="level1" class="m-1">
                        <input type="checkbox" name="level2" class="m-1">
                        <input type="checkbox" name="level3" class="m-1">
                        <input type="checkbox" name="level4" class="m-1">
                        <input type="checkbox" name="level5" class="m-1">
                        <input type="checkbox" name="level6" class="m-1">
                        <input type="checkbox" name="level7" class="m-1">
                        <input type="checkbox" name="level8" class="m-1">
                        <input type="checkbox" name="level9" class="m-1">
                        <input type="checkbox" name="level10" class="m-1">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="m-3">
                    <div class="d-flex justify-content-between">
                        <label for="playerSkill4" class="m-1">Domaine : </label>
                        <input type="text" name="playerSkill4" class="m-1">
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="checkbox" name="level1" class="m-1">
                        <input type="checkbox" name="level2" class="m-1">
                        <input type="checkbox" name="level3" class="m-1">
                        <input type="checkbox" name="level4" class="m-1">
                        <input type="checkbox" name="level5" class="m-1">
                        <input type="checkbox" name="level6" class="m-1">
                        <input type="checkbox" name="level7" class="m-1">
                        <input type="checkbox" name="level8" class="m-1">
                        <input type="checkbox" name="level9" class="m-1">
                        <input type="checkbox" name="level10" class="m-1">
                    </div>
                </div>

                <div class="m-3">
                    <div class="d-flex justify-content-between">
                        <label for="playerSkill5" class="m-1">Domaine : </label>
                        <input type="text" name="playerSkill5" class="m-1">
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="checkbox" name="level1" class="m-1">
                        <input type="checkbox" name="level2" class="m-1">
                        <input type="checkbox" name="level3" class="m-1">
                        <input type="checkbox" name="level4" class="m-1">
                        <input type="checkbox" name="level5" class="m-1">
                        <input type="checkbox" name="level6" class="m-1">
                        <input type="checkbox" name="level7" class="m-1">
                        <input type="checkbox" name="level8" class="m-1">
                        <input type="checkbox" name="level9" class="m-1">
                        <input type="checkbox" name="level10" class="m-1">
                    </div>
                </div>

                <div class="m-3">
                    <div class="d-flex justify-content-between">
                        <label for="playerSkill6" class="m-1">Domaine : </label>
                        <input type="text" name="playerSkill6" class="m-1">
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="checkbox" name="level1" class="m-1">
                        <input type="checkbox" name="level2" class="m-1">
                        <input type="checkbox" name="level3" class="m-1">
                        <input type="checkbox" name="level4" class="m-1">
                        <input type="checkbox" name="level5" class="m-1">
                        <input type="checkbox" name="level6" class="m-1">
                        <input type="checkbox" name="level7" class="m-1">
                        <input type="checkbox" name="level8" class="m-1">
                        <input type="checkbox" name="level9" class="m-1">
                        <input type="checkbox" name="level10" class="m-1">
                    </div>
                </div>
            </div>
        </div>


        <!-- les sorts -->
        <div class=" d-flex justify-content-center align-items-center mt-5 white">
            <h3>Techniques</h3>
        </div>
        <div class="bg-white col-12 text-center d-flex flex-column justify-content-center align-items-center p-3" style="height: 20em;">
            <label for="techniques">mémo des sorts utilisables</label>
            <textarea id="memo" name="memo" rows="5" cols="40" placeholder="Noter ici les sorts que vous utilisez le plus souvent."></textarea>
        </div>


        <!-- équipements et inventaire -->
        <div class=" d-flex justify-content-center align-items-center mt-5 white">
            <h3>Equipements et inventaire</h3>
        </div>
        <table class="table bg-white">
            <thead>
                <th>Nom :</th>
                <th>Quantité :</th>
                <th>Prix :</th>
                <th>Bonus</th>
                <th>Malus</th>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="number" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                </tr>
                <tr>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="number" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                </tr>
                <tr>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="number" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                </tr>
                <tr>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="number" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                </tr>
                <tr>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="number" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                </tr>
                <tr>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="number" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                </tr>
                <tr>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="number" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                </tr>
                <tr>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="number" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                </tr>
                <tr>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="number" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                </tr>
                <tr>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="number" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                    <td><input type="text" name="" class="m-1"></td>
                </tr>
            </tbody>
        </table>


    </Div>






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