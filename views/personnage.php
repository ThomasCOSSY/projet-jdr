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


    <div class=" d-none d-xl-block d-lg-block d-md-block">
        <ul class="nav nav-tabs bg-white">
            <li class="nav-item">
                <a class="nav-link active" href="../index.php">Accueil</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Navigation</a>
                <div class="dropdown-menu">
                    <a class="nav-link" href="../views/history.php">Histoire du monde</a>
                    <a class="nav-link" href="../views/rules.php">règles de jeux</a>
                    <a class="nav-link" href="../views/divinity.php">Divinités</a>
                    <a class="nav-link" href="../views/skills.php">Compétences</a>
                    <a class="nav-link" href="../views/shop.php">Magasin</a>

                </div>
            </li>
            <a class="nav-link" href="../views/connection.php">se connecter</a>
            </li>

        </ul>
    </div>

    <form action="personnage.php" method="post">

        <Div class="col-12 d-flex flex-column justify-content-center align-items-center mt-5">
            <!-- les infos joueurs -->
            <div class=" d-flex justify-content-center align-items-center mt-5 white">
                <h3>Le personnage</h3>
            </div>
            <div class="bg-white col-12 text-center row justify-content-around" style="height: 20em;">

                <div class="row">

                    <div class="m-3">
                        <h4>Identitée</h4>

                        <div class="d-flex justify-content-between">
                            <label for="player" class="m-1">joueur : </label>
                            <input type="text" name="player" <?= isset($_SESSION["user"]["username"]) ? "value=\"" . $_SESSION["user"]["username"] . "\"" : "" ?> disabled>
                        </div>
                        <div class="d-flex justify-content-between">
                            <label for="playerLastname" class="m-1">Nom du personnage : </label>
                            <input type="text" name="playerLastname" value="<?= $playerInformation['player_lastname'] ?>">
                        </div>
                        <div class="d-flex justify-content-between">
                            <label for="playerFirstname" class="m-1">Prénom du personnage : </label>
                            <input type="text" name="playerFirstname" value="<?= $playerInformation['player_firstname'] ?>">
                        </div>                      
                        <div class="d-flex justify-content-between">
                            <label for="playerRace" class="m-1">Race : </label>
                            <select name="playerRace" id="playerRace">
                                <option value="<?= $playerInformation['player_race_id'] ?>"><?= $playerInformation['player_race_type'] ?></option>
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
                        <div class="d-flex justify-content-between">
                            <label for="playerSex" class="m-1">sexe : </label>
                            <select name="playerSex" id="playerSex">
                                <option value="<?= $playerInformation['player_sex_id'] ?>"><?= $playerInformation['player_sex_type'] ?></option>
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
                            <input type="text" name="playerAge" value="<?= $playerInformation['player_age'] ?>">
                        </div>                        
                        <div class="d-flex justify-content-between">
                            <label for="playerDivinity" class="m-1">Divinitée : </label>
                            <select name="playerDivinity" id="playerDivinity">
                                <option value="<?= $playerInformation['divinity_id'] ?>"><?= $playerInformation['divinity_name'] ?></option>
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
                            <input type="text" name="playerCharacter" value="<?= $playerInformation['player_character'] ?>">
                        </div>
                        <div class="d-flex justify-content-between">
                            <label for="playerPhobia" class="m-1">Phobie : </label>
                            <input type="text" name="playerPhobia" value="<?= $playerInformation['player_phobia'] ?>">
                        </div>

                    </div>
                    <div class="m-3">
                        <h4>Statistiques</h4>
                        <div class="d-flex justify-content-between">
                            <label for="playerPv" class="m-1">Point de vie actuel : </label>
                            <input type="number" name="playerPv" value="<?= $playerInformation['player_pv'] ?>">
                        </div>
                        <div class="d-flex justify-content-between">
                            <label for="playerPvMax" class="m-1">Point de vie max : </label>
                            <input type="number" name="playerPvMax" value="<?= $playerInformation['player_pvmax'] ?>">
                        </div>
                        <div class="d-flex justify-content-between">
                            <label for="playerPm" class="m-1">Point de mana actuel : </label>
                            <input type="number" name="playerPm" value="<?= $playerInformation['player_pm'] ?>">
                        </div>
                        <div class="d-flex justify-content-between">
                            <label for="playerPmMax" class="m-1">Point de mana max : </label>
                            <input type="number" name="playerPmMax" value="<?= $playerInformation['player_pmmax'] ?>">
                        </div>
                        <div class="d-flex justify-content-between">
                            <label for="playerIntervention" class="m-1">Intervention Divine : </label>
                            <div>
                                <input type="checkbox" name="intervention1" value="1" <?php if ($playerInformation['player_intervention'] >= 1) {
                                                                                            echo "checked";
                                                                                        } ?>>
                                <input type="checkbox" name="intervention2" value="1" <?php if ($playerInformation['player_intervention'] >= 2) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <label for="playerAction" class="m-1">Action par tour: </label>
                            <div>
                                <input type="checkbox" name="action1" value="1" <?php if ($playerInformation['player_action'] >= 1) {
                                                                                    echo "checked";
                                                                                } ?>>
                                <input type="checkbox" name="action2" value="1" <?php if ($playerInformation['player_action'] >= 2) {
                                                                                    echo "checked";
                                                                                } ?>>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <label for="playerPx" class="m-1">Point d'expériences </label>
                            <input type="text" name="playerPx" value="<?= $playerInformation['player_px'] ?>">
                        </div>
                        <div class="d-flex justify-content-between">
                            <label for="playerGold" class="m-1">Or : </label>
                            <input type="text" name="playerGold" value="<?= $playerInformation['player_gold'] ?>">
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
                        <input type="text" name="playerCa" value="<?= $playerInformation['player_bonus_ca'] ?>">
                    </div>
                    <div class="d-flex justify-content-between">
                        <label for="playerDamage" class="m-1">Dégats : </label>
                        <input type="text" name="playerDamage" value="<?= $playerInformation['player_bonus_damage'] ?>">
                    </div>
                    <div class="d-flex justify-content-between">
                        <label for="playerCritical" class="m-1">Critique : </label>
                        <input type="text" name="playerCritical" value="<?= $playerInformation['player_bonus_critical'] ?>">
                    </div>
                </div>

                <div class="m-3">
                    <div class="d-flex justify-content-between">
                        <label for="playerAoe" class="m-1">Cible AOE : </label>
                        <input type="text" name="playerAoe" value="<?= $playerInformation['player_bonus_aoe'] ?>">
                    </div>
                    <div class="d-flex justify-content-between">
                        <label for="playerChain" class="m-1">Chaine : </label>
                        <input type="text" name="playerChain" value="<?= $playerInformation['player_bonus_chain'] ?>">
                    </div>
                    <div class="d-flex justify-content-between">
                        <label for="playerHot" class="m-1">HOT : </label>
                        <input type="text" name="playerHot" value="<?= $playerInformation['player_bonus_hot'] ?>">
                    </div>
                    <div class="d-flex justify-content-between">
                        <label for="playerHeal" class="m-1">Soin : </label>
                        <input type="text" name="playerHeal" value="<?= $playerInformation['player_bonus_heal'] ?>">
                    </div>
                </div>

                <div class="m-3">
                    <div class="d-flex justify-content-between">
                        <label for="playerAffliction" class="m-1">Affliction : </label>
                        <input type="text" name="playerAffliction" value="<?= $playerInformation['player_bonus_affliction'] ?>">
                    </div>
                    <div class="d-flex justify-content-between">
                        <label for="playerFrenesie" class="m-1">Frénésie : </label>
                        <input type="text" name="playerFrenesie" value="<?= $playerInformation['player_bonus_frenesie'] ?>">
                    </div>
                    <div class="d-flex justify-content-between">
                        <label for="playerImpact" class="m-1">Impact : </label>
                        <input type="text" name="playerImpact" value="<?= $playerInformation['player_bonus_impact'] ?>">
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
                        <input type="text" name="playerFor" value="<?= $playerInformation['player_for'] ?>">
                    </div>
                    <div class="d-flex justify-content-between">
                        <label for="playerForBonus" class="m-1">Bonus de Force : </label>
                        <input type="text" name="playerForBonus" value="<?= $playerInformation['player_bonus_for'] ?>">
                    </div>
                </div>

                <div class="m-3">
                    <div class="d-flex justify-content-between">
                        <label for="playerInt" class="m-1">Intélligence : </label>
                        <input type="text" name="playerInt" value="<?= $playerInformation['player_int'] ?>">
                    </div>
                    <div class="d-flex justify-content-between">
                        <label for="playerIntBonus" class="m-1">Bonus d'intélligence : </label>
                        <input type="text" name="playerIntBonus" value="<?= $playerInformation['player_bonus_int'] ?>">
                    </div>
                </div>

                <div class="m-3">
                    <div class="d-flex justify-content-between">
                        <label for="playerDex" class="m-1">Dextérité: </label>
                        <input type="text" name="playerDex" value="<?= $playerInformation['player_dex'] ?>">
                    </div>
                    <div class="d-flex justify-content-between">
                        <label for="playerDexBonus" class="m-1">Bonus de dextérité : </label>
                        <input type="text" name="playerDexBonus" value="<?= $playerInformation['player_bonus_dex'] ?>">
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
                            <input type="text" name="playerSkill1" class="m-1" value="<?= $playerInformation['player_skill1'] ?>">
                        </div>
                        <div class="d-flex justify-content-end">
                            <input type="checkbox" name="skill1Level1" class="m-1" value="1" <?php if ($playerInformation['player_skill1_level'] >= 1) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill1Level2" class="m-1" value="1" <?php if ($playerInformation['player_skill1_level'] >= 2) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill1Level3" class="m-1" value="1" <?php if ($playerInformation['player_skill1_level'] >= 3) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill1Level4" class="m-1" value="1" <?php if ($playerInformation['player_skill1_level'] >= 4) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill1Level5" class="m-1" value="1" <?php if ($playerInformation['player_skill1_level'] >= 5) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill1Level6" class="m-1" value="1" <?php if ($playerInformation['player_skill1_level'] >= 6) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill1Level7" class="m-1" value="1" <?php if ($playerInformation['player_skill1_level'] >= 7) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill1Level8" class="m-1" value="1" <?php if ($playerInformation['player_skill1_level'] >= 8) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill1Level9" class="m-1" value="1" <?php if ($playerInformation['player_skill1_level'] >= 9) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill1Level10" class="m-1" value="1" <?php if ($playerInformation['player_skill1_level'] >= 10) {
                                                                                            echo "checked";
                                                                                        } ?>>
                        </div>
                    </div>

                    <div class="m-3">
                        <div class="d-flex justify-content-between">
                            <label for="playerSkill2" class="m-1">Domaine : </label>
                            <input type="text" name="playerSkill2" class="m-1" value="<?= $playerInformation['player_skill2'] ?>">
                        </div>
                        <div class="d-flex justify-content-end">
                        <input type="checkbox" name="skill2Level1" class="m-1" value="1" <?php if ($playerInformation['player_skill2_level'] >= 1) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill2Level2" class="m-1" value="1" <?php if ($playerInformation['player_skill2_level'] >= 2) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill2Level3" class="m-1" value="1" <?php if ($playerInformation['player_skill2_level'] >= 3) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill2Level4" class="m-1" value="1" <?php if ($playerInformation['player_skill2_level'] >= 4) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill2Level5" class="m-1" value="1" <?php if ($playerInformation['player_skill2_level'] >= 5) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill2Level6" class="m-1" value="1" <?php if ($playerInformation['player_skill2_level'] >= 6) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill2Level7" class="m-1" value="1" <?php if ($playerInformation['player_skill2_level'] >= 7) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill2Level8" class="m-1" value="1" <?php if ($playerInformation['player_skill2_level'] >= 8) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill2Level9" class="m-1" value="1" <?php if ($playerInformation['player_skill2_level'] >= 9) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill2Level10" class="m-1" value="1" <?php if ($playerInformation['player_skill2_level'] >= 10) {
                                                                                            echo "checked";
                                                                                        } ?>>
                        </div>
                    </div>

                    <div class="m-3">
                        <div class="d-flex justify-content-between">
                            <label for="playerSkill3" class="m-1">Domaine : </label>
                            <input type="text" name="playerSkill3" class="m-1" value="<?= $playerInformation['player_skill3'] ?>">
                        </div>
                        <div class="d-flex justify-content-end">
                        <input type="checkbox" name="skill3Level1" class="m-1" value="1" <?php if ($playerInformation['player_skill3_level'] >= 1) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill3Level2" class="m-1" value="1" <?php if ($playerInformation['player_skill3_level'] >= 2) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill3Level3" class="m-1" value="1" <?php if ($playerInformation['player_skill3_level'] >= 3) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill3Level4" class="m-1" value="1" <?php if ($playerInformation['player_skill3_level'] >= 4) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill3Level5" class="m-1" value="1" <?php if ($playerInformation['player_skill3_level'] >= 5) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill3Level6" class="m-1" value="1" <?php if ($playerInformation['player_skill3_level'] >= 6) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill3Level7" class="m-1" value="1" <?php if ($playerInformation['player_skill3_level'] >= 7) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill3Level8" class="m-1" value="1" <?php if ($playerInformation['player_skill3_level'] >= 8) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill3Level9" class="m-1" value="1" <?php if ($playerInformation['player_skill3_level'] >= 9) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill3Level10" class="m-1" value="1" <?php if ($playerInformation['player_skill3_level'] >= 10) {
                                                                                            echo "checked";
                                                                                        } ?>>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="m-3">
                        <div class="d-flex justify-content-between">
                            <label for="playerSkill4" class="m-1">Domaine : </label>
                            <input type="text" name="playerSkill4" class="m-1" value="<?= $playerInformation['player_skill4'] ?>">
                        </div>
                        <div class="d-flex justify-content-end">
                        <input type="checkbox" name="skill4Level1" class="m-1" value="1" <?php if ($playerInformation['player_skill4_level'] >= 1) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill4Level2" class="m-1" value="1" <?php if ($playerInformation['player_skill4_level'] >= 2) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill4Level3" class="m-1" value="1" <?php if ($playerInformation['player_skill4_level'] >= 3) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill4Level4" class="m-1" value="1" <?php if ($playerInformation['player_skill4_level'] >= 4) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill4Level5" class="m-1" value="1" <?php if ($playerInformation['player_skill4_level'] >= 5) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill4Level6" class="m-1" value="1" <?php if ($playerInformation['player_skill4_level'] >= 6) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill4Level7" class="m-1" value="1" <?php if ($playerInformation['player_skill4_level'] >= 7) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill4Level8" class="m-1" value="1" <?php if ($playerInformation['player_skill4_level'] >= 8) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill4Level9" class="m-1" value="1" <?php if ($playerInformation['player_skill4_level'] >= 9) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill4Level10" class="m-1" value="1" <?php if ($playerInformation['player_skill4_level'] >= 10) {
                                                                                            echo "checked";
                                                                                        } ?>>
                        </div>
                    </div>

                    <div class="m-3">
                        <div class="d-flex justify-content-between">
                            <label for="playerSkill5" class="m-1">Domaine : </label>
                            <input type="text" name="playerSkill5" class="m-1" value="<?= $playerInformation['player_skill5'] ?>">
                        </div>
                        <div class="d-flex justify-content-end">
                        <input type="checkbox" name="skill5Level1" class="m-1" value="1" <?php if ($playerInformation['player_skill1_level'] >= 1) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill5Level2" class="m-1" value="1" <?php if ($playerInformation['player_skill5_level'] >= 2) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill5Level3" class="m-1" value="1" <?php if ($playerInformation['player_skill5_level'] >= 3) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill5Level4" class="m-1" value="1" <?php if ($playerInformation['player_skill5_level'] >= 4) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill5Level5" class="m-1" value="1" <?php if ($playerInformation['player_skill5_level'] >= 5) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill5Level6" class="m-1" value="1" <?php if ($playerInformation['player_skill5_level'] >= 6) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill5Level7" class="m-1" value="1" <?php if ($playerInformation['player_skill5_level'] >= 7) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill5Level8" class="m-1" value="1" <?php if ($playerInformation['player_skill5_level'] >= 8) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill5Level9" class="m-1" value="1" <?php if ($playerInformation['player_skill5_level'] >= 9) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill5Level10" class="m-1" value="1" <?php if ($playerInformation['player_skill5_level'] >= 10) {
                                                                                            echo "checked";
                                                                                        } ?>>
                        </div>
                    </div>

                    <div class="m-3">
                        <div class="d-flex justify-content-between">
                            <label for="playerSkill6" class="m-1">Domaine : </label>
                            <input type="text" name="playerSkill6" class="m-1" value="<?= $playerInformation['player_skill6'] ?>">
                        </div>
                        <div class="d-flex justify-content-end">
                            <input type="checkbox" name="skill6Level1" class="m-1" value="1" <?php if ($playerInformation['player_skill6_level'] >= 1) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill6Level2" class="m-1" value="1" <?php if ($playerInformation['player_skill6_level'] >= 2) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill6Level3" class="m-1" value="1" <?php if ($playerInformation['player_skill6_level'] >= 3) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill6Level4" class="m-1" value="1" <?php if ($playerInformation['player_skill6_level'] >= 4) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill6Level5" class="m-1" value="1" <?php if ($playerInformation['player_skill6_level'] >= 5) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill6Level6" class="m-1" value="1" <?php if ($playerInformation['player_skill6_level'] >= 6) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill6Level7" class="m-1" value="1" <?php if ($playerInformation['player_skill6_level'] >= 7) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill6Level8" class="m-1" value="1" <?php if ($playerInformation['player_skill6_level'] >= 8) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill6Level9" class="m-1" value="1" <?php if ($playerInformation['player_skill6_level'] >= 9) {
                                                                                            echo "checked";
                                                                                        } ?>>
                            <input type="checkbox" name="skill6Level10" class="m-1" value="1" <?php if ($playerInformation['player_skill6_level'] >= 10) {
                                                                                            echo "checked";
                                                                                        } ?>>
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
                <textarea id="memo" name="memo" rows="5" cols="40" placeholder="Noter ici les sorts que vous utilisez le plus souvent."><?= $playerInformation['player_memo'] ?></textarea>
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

        <div class="m-1 d-flex flex-column justify-content-center align-items-center"> <button type="submit" name="updatePlayer" value="<?= $playerInformation['player_id'] ?> ">sauvegarder</button> </div>
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