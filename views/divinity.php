<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divinités</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
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

        <h1 class="text-center mt-2 title">Les divinitées</h1>

<div class="d-flex justify-content-center align-items-center m-auto col-8"><img class="img1 col-10"
    src="../assets/img/divinity.jpg" alt="divinitées"></div>

    <article class="white m-5 text-center">
        <h3>Que sont elles ?</h3>
        <p>Les divinitées ou esprits représentent les élements que l'ont trouve à travers le monde. Leur puissance est phénoménal, rares sont ceux qui ont été béni par un esprit. <br>Sous certaines conditions, certain serait même capable de les invoquer sur un champs de bataille pouvant renverser une situation qui semble critique</p>
    <h3>Comment un joueur peut utiliser cette aptitude ?</h3>
    <p>Un joueur choisie sa divinitée, ou est choisie par elle, il gagnera un passif lié à cette divinité.<br> Lorsqu'un joueur fait un 20 sur un dé à 20 face, son action est critique, il va doubler ses dégats/soins, il gagne également une intervention divine qu'il pourra utiliser quand il le souhaite, l'intervention varie selon la divinité !</p>
    </article>

    <div id="products" class="row col-8 m-auto">

        <!-- ici nos produits via notre catalog en js -->

    </div>


    <footer class="bg-light text-center align-items-center justify-content-center p-4">
        <p class="text-center">The Eclipse Company © 2021 Tous les droits réserves </p>
    </footer>


    <script src="../assets/js/cleave.js"></script>
    <script src="../assets/js/divinity.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>

</html>