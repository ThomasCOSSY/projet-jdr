<?php
session_start();

 
require "../Models/Database.php";
require "../Models/Users_role.php";
require "../Models/Users.php";

$users = new Users();

//  pour l avatar

    if(!empty($_POST)){
        extract($_POST); // On extrait toutes les informations
        $valid = true;
        
 
        if (isset($_POST['avatar'])){   // On se positionne sur le bon formulaire
            $_SESSION['user']['avatar'] = $_POST['avatar'];
            
            if (isset($_FILES['file']) and !empty($_FILES['file']['name'])) { // On vérifie qu'il y a bien un fichier
               
                $filename = $_FILES['file']['tmp_name']; // On récupère le nom du fichier
                list($width_orig, $height_orig) = getimagesize($filename); // On récupère la taille de notre fichier (l'image)
                
                if($width_orig >= 250 && $height_orig >= 250 && $width_orig <= 6000 && $height_orig <= 6000){ // On vérifie que la taille de l'image et correcte
                    
                    $ListeExtension = array('jpg' => 'image/jpeg', 'jpeg'=>'image/jpeg', 'png' => 'image/png', 'gif' => 'image/gif');
                    $ListeExtensionIE = array('jpg' => 'image/pjpg', 'jpeg'=>'image/pjpeg');
                    $tailleMax = 5242880; // Taille maximum 5 Mo
                    // 2mo  = 2097152
                    // 3mo  = 3145728
                    // 4mo  = 4194304
                    // 5mo  = 5242880
                    // 7mo  = 7340032
                    // 10mo = 10485760
                    // 12mo = 12582912
                    $extensionsValides = array('jpg','jpeg', 'png'); // Format accepté
 
                    if ($_FILES['file']['size'] <= $tailleMax){ // Si le fichier et bien de taille inférieur ou égal à 5 Mo
                        
                        $extensionUpload = strtolower(substr(strrchr($_FILES['file']['name'], '.'), 1)); // Prend l'extension après le point, soit "jpg, jpeg ou png"
 
                        if (in_array($extensionUpload, $extensionsValides)){ // Vérifie que l'extension est correct
                            
                            $dossier = "../assets/img/avatar/" . $_SESSION['user']['id'] . "/"; // On se place dans le dossier de la personne 
 
                            if (!is_dir($dossier)){ // Si le nom de dossier n'existe pas alors on le crée
                                mkdir($dossier);
                                
                            }else{
                                
                                if(file_exists("../assets/img/avatar/". $_SESSION['user']['id'] . "/" . $_SESSION['user']['avatar']) && isset($_SESSION['user']['avatar'])){
                                    unlink("../assets/img/avatar/". $_SESSION['user']['id'] . "/" . $_SESSION['user']['avatar']);
                                   
                                }
                            }
 
                            $nom = md5(uniqid(rand(), true)); // Permet de générer un nom unique à la photo
                            $chemin = "../assets/img/avatar/" . $_SESSION['user']['id'] . "/" . $nom . "." . $extensionUpload; // Chemin pour placer la photo
                            $resultat = move_uploaded_file($_FILES['file']['tmp_name'], $chemin); // On fini par mettre la photo dans le dossier
                            $id = $_SESSION['user']['id'];
 
                            if($resultat) {
                                $users->updateAvatar($chemin, $id);
                                $_SESSION['user']['avatar'] = $chemin;
                            }
 
                        }else
                            $_SESSION['flash']['warning'] = "Votre photo doit être au format jpg.";
 
                    }else
                        $_SESSION['flash']['warning'] = "Votre photo de profil ne doit pas dépasser 5 Mo !";
                }else
                    $_SESSION['flash']['warning'] = "Dimension de l'image minimum 400 x 400 et maximum 6000 x 6000 !";
            }else
                $_SESSION['flash']['warning'] = "Veuillez mettre une image !";       
        }
    }
?>