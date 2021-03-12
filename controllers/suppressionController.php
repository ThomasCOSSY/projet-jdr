<?php
session_start();
require "../Models/Database.php";
require "../Models/Users.php";
$User = new Users();
$id = htmlspecialchars($_SESSION["user"]["id"]);




if(isset($_POST["deleteButton"])) {
session_destroy();    
$User->deleteUser($id);
header("location: ../index.php");
echo "<script>alert(\"Votre compte a bien été supprimé\")</script>";
}