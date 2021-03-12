<?php
session_start();
if(isset($_POST["deconnectButton"])) {
    session_destroy();
    header("Location: ../index.php");
}