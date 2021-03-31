<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le marché</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/shop.css">
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

    <h1 class="text-center mt-2 title white mb-5">Le marché</h1>

    <div class="d-flex justify-content-center align-items-center"><img class="img1 col-8" src="../assets/img/shop.jpg" alt="un marché remplit d'aventurier"></div>


    <div>
        <div class="container d-flex justify-content-center align-items-center col-6 mt-5 mb-5">

            <div class=" col">

                <button class="button d-flex justify-content-center align-items-center" type="submit" data-toggle="modal" data-target="#forgeModal">Forge</button>

            </div>

            <div class=" col">
                <button class="button d-flex justify-content-center align-items-center" type="submit" data-toggle="modal" data-target="#alchiModal">L'alchimiste</button>
            </div>

            <div class=" col">
                <button class="button d-flex justify-content-center align-items-center" type="submit" data-toggle="modal" data-target="#reliqueModal">Reliques</button>
            </div>

        </div>
        <div class="backgroundWhite col-7 m-auto mt-5">
            <article class="mt-5  m-auto">
                <p class="text-center">Endroit charmant où se mèle citadins et aventuriers. Vous trouverez ici tout ce dont vous aurez besoin pour votre aventure !<br>Besoin d'arme et armure de qualité ? Visitez notre forge célébre dans le monde entier !<br>Ne partez pas sans vos potions ! le danger rode partout en ces lieux, allez donc votre notre alchimiste qui vous préparera vos potions et vivres !<br>Dans une allée un peu plus loin, vous trouverez l'allé des reliques ! de puissants objets magiques vous y attendent ! Si vous avez de quoi les acheter... </p>
            </article>
        </div>

        <!-- Modal forge descriptif  -->
        <div class="modal fade" id="forgeModal" tabindex="-1" role="dialog" aria-labelledby="forgeModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header d-flex justify-content-center">
                        <h2 class="modal-title" id="forgeModalLabel">Forge</h2>
                    </div>

                    <div class="row modal-body d-flex justify-content-center">
                        <div class="col-10">
                            <img src="../assets/img/forgeron.jpg" width="100%">
                        </div>


                        <div class="col-10">
                            <p class="">Magasin<br><br>
                                Armes </br><br>
                                Fouet 1D4 100 Po <br>
                                Lame 1D8 ou 1D12 à deux mains 100 Po / 150 Po<br>
                                Hache 1D8 ou 1D12 à deux mains 100 Po / 150 Po<br>
                                Gun 1D6 100 Po<br>
                                Lance 1D8 ou 1D12 à deux mains 100 Po / 150 Po<br>
                                Bâton ou rapière 1D6 100 Po<br>
                                Arc 1D8 100 Po<br>
                                Marteau 1D8 ou 1D12 à deux mains 100 Po / 150 Po<br>
                                Pugilat 1D8 100 Po<br>
                                Double lame 1D12 150 Po<br>
                                Fusil 1D10 100 Po<br>
                                Glaives 1D6 100 Po</br><br>
                                Armures</br><br>
                                Bouclier +1 CA 100 Po<br>
                                Légère 0 CA + 1 DEX 50 Po mais t’as la classe<br>
                                Intermédiaire +1CA 150 Po<br>
                                Lourde +2CA -1 DEX 300 Po<br><br>
                                Relique effets aléatoires nombre max 3</br><br>
                                Forge</br><br>
                                Création d’arme exotique 500 Po<br>
                                Renforcement +1 aux dégâts 1 000 Po<br>
                                Renforcement +2 aux dégâts 5 000 Po<br>
                                Renforcement +3 aux dégâts 25 000 Po<br>
                                Renforcement +4 aux dégâts 100 000 Po<br>
                                Renforcement d’armure +1 CA 50 000 Po<br>
                                Renforcement d’armure +2 CA 100 000 Po</br>
                                x 2 pour 2 mains (prix)<br>
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <!-- <button type="button" class="btn btn-primary">Ajouter au panier</button> -->
                        <button type="button" class="btn2" data-dismiss="modal">fermer</button>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal potions descriptif  -->
        <div class="modal fade" id="alchiModal" tabindex="-1" role="dialog" aria-labelledby="alchiModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header d-flex justify-content-center">
                        <h2 class="modal-title" id="alchiModalLabel">L'alchimiste</h2>
                    </div>

                    <div class="row modal-body d-flex justify-content-center">
                        <div class="col-10">
                            <img src="../assets/img/potions.jpg" width="100%">
                        </div>
                    </div>

                    <div>
                        <p class="">Consommables<br><br>
                            Potion de soin PV 1D6 100 Po<br>
                            Potion de soin + PV 1D10 200 Po<br>
                            Super potion de soin PV 1D20 500 Po<br>
                            Potion de mana PM 1D4 200 Po<br>
                            Potion de mana + PM 1D8 500 Po<br>
                            Super potion de mana PM 1D12 1 000 Po<br>
                            Cristal de vie full PV 5 000 Po<br>
                            Cristal de mana full PM 10 000 Po<br>
                            Cristal de téléportation retour en ville 500 Po<br>
                            Cristal de résurrection ressuscite une cible 15 000 Po<br>
                            Vivres 2PV et 1PM / heure de repos 50 Po<br>
                        </p>
                    </div>

                    <div class="modal-footer">

                        <!-- <button type="button" class="btn btn-primary">Ajouter au panier</button> -->
                        <button type="button" class="btn2" data-dismiss="modal">fermer</button>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal reliques descriptif  -->
        <div class="modal fade" id="reliqueModal" tabindex="-1" role="dialog" aria-labelledby="reliqueModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header d-flex justify-content-center">
                        <h2 class="modal-title" id="reliqueModalLabel">Reliques</h2>
                    </div>

                    <div class="row modal-body d-flex justify-content-center">
                        <div class="col-10">
                            <img src="../assets/img/relique.jpg" width="100%">
                        </div>
                    </div>

                    <div class="p-1">
                        <pre><p class="">Reliques<br><br>Niv 1 coûte 50 000 Po  - Niv 2  100 000 Po  - Niv 3  150 000 Po<br><br>Effets :<br><br>+ 1 en force                               +2           +3<br>+ 1 en Intelligence                        +2           +3<br>+ 1 en Dextérité                           +2           +3<br>+ 1 en CA                                  +2           +3<br>+ 1 en critique                            +2           +3<br>+ 1 en impact                              +2           +3<br>+ 1 en réduction de CA de l impact         +5           +10<br>+ 1 cible pour les chaînes                 +2           +3<br>+ 1 cible pour les AOE                     +2           +3<br>+ 1 en dégâts frénésie                     +2           +3<br>+ 1 en dégâts en AOE                       +2           +3<br>+ 1 en dégâts en chaîne                    +2           +3<br>+ 1 en dégâts en affliction                +2           +3<br>+ 1 en durée de HOT                        +2           +3<br>+ 1 en durée en affliction                 +2           +3<br>+ 1 en soin                                +2           +3<br>+ 1 en technique de ciel                   +2           +3<br>+ 1 en technique de terre                  +2           +3<br>+ 1 en technique de mer                    +2           +3<br>+ 10 PV                                   +20 PV       +40 PV<br>+ 5 PM                                    +10 PM       +20 PM<br>
                        </p></pre>
                    </div>

                    <div class="modal-footer">

                        <!-- <button type="button" class="btn btn-primary">Ajouter au panier</button> -->
                        <button type="button" class="btn2" data-dismiss="modal">fermer</button>

                    </div>
                </div>
            </div>
        </div>



        <footer class="bg-light text-center align-items-center justify-content-center p-4">
            <p class="text-center">The Eclipse Company © 2021 Tous les droits réserves </p>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
        <script src="../assets/js/cleave.js"></script>
        <script src="../assets/js/main.js"></script>

</body>

</html>