<?php
session_start();
require "../Models/Database.php";
require "../Models/Users.php";
require "../Models/player.php";


$Player = new Player();

$id = htmlspecialchars($_POST["playerId"]);

if(isset($_POST["deleteButton"])) {
    $deleteId = $_POST["deleteButton"];   
$Player->deletePlayer($deleteId) ;
header("location: profile.php");
echo "<script>alert(\"Votre personnage a bien été supprimé\")</script>";
}