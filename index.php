<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div class=" d-none d-xl-block d-lg-block d-md-block">
        <ul class="nav nav-tabs bg-white">
            <li class="nav-item">
                <a class="nav-link active" href="homePC.html">Accueil</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Navigation</a>
                <div class="dropdown-menu">
                    <a class="nav-link" href="views/history.php">Histoire du monde</a>
                    <a class="nav-link" href="views/rules.php">règles de jeux</a>
                    <a class="nav-link" href="views/divinity.php">Divinités</a>
                    <a class="nav-link" href="views/skills.php">Compétences</a>
                    <a class="nav-link" href="views/shop.php">Magasin</a>

                </div>
            </li>
            <li>
                <a class="nav-link" href="views/connection.php">se connecter</a>
            </li>

        </ul>
    </div>



    <h1 class="text-center mt-2 title">La tour céleste</h1>


    <!-- grand ecran -->
    <div class="d-none d-xl-block d-lg-block d-md-block">
        <div class="d-flex justify-content-center">
            <img src="assets/img/grimgar.jpg" alt="image d avanturiers" width="800px" class="m-5">
            <img src="assets/img/towercity2.jpg" class="m-5" width="800px" alt="image d'une ville" usemap="#map-1">
        </div>

        <map name="map-1">

            <area id="page-divinity" class="" shape="rect" coords="100, 230, 300, 500" href="views/divinity.php" alt="Temple des Divinités" />

            <area id="page-connection" class="" shape="rect" coords="400, 1, 650, 400" href="views/connection.php" alt="Partir à l'aventure !" />

            <area id="page-rules" class="" shape="poly" coords="350, 410, 350, 500, 790, 500, 790, 1, 660, 1, 660, 410" href="views/rules.php" alt="Règles du jeu" />

            <area id="page-history" class="" shape="rect" coords="10, 650, 180, 1100" href="views/history.php" alt="Histoire du monde" />

            <area id="page-shop" class="" shape="rect" coords="200, 650, 400, 1100" href="views/shop.php" alt="le marché" />

            <area id="page-skills" class="" shape="rect" coords="450, 550, 790, 1100" href="views/skills.php" alt="Compétences" />

        </map>

    </div>

    <article class="d-none d-xl-block d-lg-block d-md-block">
        <div class="text-center">
            <h2 class="white"> Infos</h2>
            <p class="white">Clic sur la ville pour naviguer sur le site !</p>
        </div>
    </article>


    <!-- petit ecran -->

    <div class="Nav-fluid justify-content-center d-block d-md-none d-lg-none d-xl-none">
        <div class="fixed-top " style="width: max-content;">
            <nav class="navbar navbar-dark">
                <button class="navbar-toggler custom-toggler mt-5" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="p-4">
                    <ul class="navbar-nav text-center col-12 m-auto">
                        <li class="nav-item w-100 border border-dark m-1">
                            <a class="nav-link" href="views/history.php">Histoire du monde</a>
                        </li>
                        <li class="nav-item w-100 border border-dark m-1">
                            <a class="nav-link" href="views/rules.php">règles de jeux</a>
                        </li>
                        <li class="nav-item w-100 border border-dark m-1">
                            <a class="nav-link" href="views/divinity.php">Divinités</a>
                        </li>
                        <li class="nav-item w-100 border border-dark m-1">
                            <a class="nav-link" href="views/skills.php">Compétences</a>
                        </li>
                        <li class="nav-item w-100 border border-dark m-1">
                            <a class="nav-link" href="views/shop.php">Magasin</a>
                        </li>
                        <li class="nav-item w-100 border border-dark m-1">
                            <a class="nav-link" href="views/connection.php">se connecter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <div class="d-block d-md-none d-lg-none d-xl-none">
        <div class="text-center"><img src="assets/img/towercity.jpg" class="mt-2" width="50%" alt="" usemap="#map-1">
        </div>


        <form class="d-flex justify-content-center align-items-center mt-5 mb-5" action="">
            <button type="submit">Se connecter</button>
        </form>



    </div>










    <footer class="bg-light text-center align-items-center justify-content-center p-4 ">
        <p class="text-center">The Eclipse Company © 2021 Tous les droits réserves </p>
    </footer>


    <script src="assets/js/cleave.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>

</html>