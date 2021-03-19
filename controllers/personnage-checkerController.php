<?php
session_start();
require "../Models/Database.php";
require "../Models/Users_role.php";
require "../Models/Users.php";
require "../Models/Player.php";
require "../Models/Player_race.php";
require "../Models/Player_sex.php";
require "../Models/Divinity.php";


if(isset($_GET["playerLastname"])){
    $Player = new Player();
    $result = $Player->updatePlayer();
    echo json_encode($result);
}