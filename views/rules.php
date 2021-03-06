<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Règles du jeu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/rules.css">
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

    <h1 class="text-center mt-2 title mb-5">Règles du jeu</h1>

    <div class="d-flex justify-content-center align-items-center m-auto col-8">
        <img class="img1 col-4" src="../assets/img/des.png" alt="Set de dés">
    </div>

    <div class="mt-5  text-left m-auto col-10 ">
        <pre>
            <article>
                <div class="backgroundWhite p-3">
                    <h3 class="text-center ">Les types de dégâts</h3>

 
<p class=" m-3">Classique : attaque de base sans effet
AOE : attaque de zone pouvant blesser les alliés
Chaine d’effet : attaque qui rebondit de cible en cible faisant des dégâts moindre à chaque rebond
Affliction : attaque qui inflige des dégâts chaque tour
Soin : rend des PV à la cible
HOT : soin sur la durée
Frénésie : gagne des attaques supplémentaires au détriment des chances de toucher
Impact : attaque puissante qui peut faire baisser la CA de la cible
Affaiblit : attaque qui fait perdre des caractéristiques à la cible
Diminution : empêche la cible d’agir

Astuce : n'hésitez pas à monter la CA de vos adversaires, cela donne un vrai role aux débuffeurs qui casseront la CA adverse.</p>
</div>

<div class="backgroundWhite p-3">
<h3 class="text-center ">les statistiques</h3>

<p class="m-3">il y a 5 statistiques que l'on peut augmenter :

Les points de vie (ou PV), influence le nombre de dégâts qu'un personnage peut encaisser avant de tomber.
Les points magique (ou PM), chaque sorts ou techniques utilise des PM pour être lancé, en avoir beaucoup permet de les enchainer.
La force (ou FOR), chaque point de force augmente les dégats au corp à corp de 1.
L'intélligence (ou INT), chaque point d'intélligence augmente les dégats ou soin de type magique de 1.
La dextérité (ou DEX), augmente les chances de toucher et augmente les dégats à distance de 1.

un joueur sans DEX doit faire un 10 sur un D20 pour toucher sa cible</p>
</div>

 <div class="backgroundWhite p-3">
<h3 class="text-center ">Le coût de dépense de l'expérience (ou px)</h3>

<p class="m-3">+ 1 PM  20 PX
+ 1 PV   10 PX
+ 1 action par tour 50 PX
+ 1 pts de stat DEX INT FOR 20 PX
 
 Pour les compétences, il s'agit du niveau voulu x 10
 Ainsi pour prendre une nouvelle compétence, il vous faut dépenser 10 px, puis 20 pour le niveau 2. (il est impossible de sauter un niveau)</p>
 </div>
 
 <div class="backgroundWhite p-3">
  <h3 class="text-center ">Rôles</h3><p class=" mt-5">Les rôles sont un petit plus optionnel qui influencera la facon de jouer un personnage</p>
  <div class="m-auto">
  <div class="text-left ">L’amoureux	   	        Le personnage va tomber éperdument amoureux d'un joueur ou personnage non joueur, il ne pourra rien lui refuser.<br>Le noble                        Le personnage est un noble, les portes lui seront plus facilement ouvertes.<br>Le joli cœur                    Le personnage est si charismatique que les gens auront t'endance à le croire ou lui faire plaisir.<br>Ingénieur                       Le personnage peut construire des gadgets ou autres inventions de son cru.<br>Le dragonnier                   Le personnage connait tout sur les dragons, il aura des bonus contre eux et pourra en dresser un.<br>Le Forgeron                     Le personnage pourra forger lui même les équipements pour moitier prix.<br>L’avare/marchand                Le personnage sait marchander, il aura + 10% en cas de vente d'objet et une ristourne équivalent pour les achats.<br>Le tacticien                    Le personnage sait gérer les hommes en cas de guerre d'envergure, il pourra donner des ordres complexes.<br>Le malchanceux                  Le personnage est malchanceux, quand il fait un jet sur un D20, en cas de 1, il rate, et aura des répercussions sur lui ou le groupe.<br>Le docteur                      Le personnage peut soigner sans magie quand il est dans un endroit calme.<br>Le Berserker                    Le personnage ne peut pas changer de cible pendant les combats, et il ne recule jamais.<br>Le Chanceux                     Le personnage chanceux est l'inverse du malchanceux, un 1 sur un D20 sera une réussite critique.<br>Ame soeur                       Le personnage a une ame soeur, quand ils combattent ensemble, leurs dégats se cumulent au lieu de faire chacun les leurs.<br>erudit                          Le personnage érudit aura des infos que la plupart des autres joueurs n'auront pas.<br>Le chevalier                    Le personnage ne peut rester indifférent face à la misère des gens.<br>Le jumeau maléfique             Le personnage développe une double personnalitée.<br></div>
</div>
 </div>

<div class="backgroundWhite p-3">
<h3 class="text-center ">Armes</h3>
<p class="m-3">D'autres armes peuvent voir le jour, voici une sélection :

Fouet 1D4						        Pugilat 1D6
Lame 1D8 ou 1D12 à deux mains			Main nue 1D4
Hache 1D8 ou 1D12 à deux mains			Glaive 1D6
Gun 1D6						            Fusil 1D10 à deux mains
Lance 1D8 ou 1D12 à deux mains			Double lames 1d12 à deux mains
Bâton 1D6 à deux mains                  Gunblade 2D6 (dont 1D6 à distance) à deux mains
Arc 1D6 à deux mains
Marteau 1D8 ou 1D12 à deux mains</p>
</div>

<div class="backgroundWhite p-3">
<h3 class="text-center ">Armures</h3>

<p class="m-3">Les CA sont des réductions de dégâts, ainsi une personne ayant 2 en CA vera ses dégats subits diminué de 2.

Bouclier +1 CA

Légère 0 CA mais donne un bonus de 1 en DEX

Intermédiaire +1CA pas de bonus

Lourde  +2CA malus de 1 en DEX</p></article>
        </pre>
        <pre><article>

        <div class="backgroundWhite p-3">
            <h3 class="text-center ">Système de race</h3>

<p class="m-3">Le choix d’une race est un élément important dans la création de personnage


Humain est la race la plus équilibré et neutre

10 PV 5 PM

5 FOR 5 INT 5 DEX

Orc basé sur la force et leur condition physique

16 PV 2 PM

8 FOR 3 INT 4 DEX

Elf basé sur leur affinité avec la magie

4 PV 8 PM

3 FOR 8 INT 4 DEX

Homme bête régis par leur instinct sauvage

12 PV 4 PM

4 FOR 3 INT 8 DEX

Hybride personnalisation de la race

PV et PM doivent faire 20 PX (1Pm = 2 PX)

FOR INT et DEX doivent faire 15 au max (max 10 mini 1 par stats)



Champion, unique et uni à une divinité

PV et PM doivent faire 30 PX (1Pm = 2 PX)

10 FOR 10 INT 10 DEX
une 7ème branche de compétence lié à l’élément de leur divinité augmentera dans l aventure
Un champion gagne l'immunité à lélément lié à sa divinité, il doit choisir un élément qui lui fera le double de dommage.

       </p> 
        </div>
    </article></pre>
    </div>


    <footer class="bg-light text-center align-items-center justify-content-center p-4">
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