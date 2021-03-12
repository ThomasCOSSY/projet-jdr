<?php
require "../Models/Database.php";
require "../Models/Users.php";
if(isset($_GET["username"])){
    $User = new Users();
    $result = $User->searchUsername($_GET["username"]);
    echo json_encode($result);
}