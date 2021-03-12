<?php
if(isset($_SESSION["user"]["role"])) {
    if($_SESSION["user"]["role"] != "admin") {
        header("Location: ../connection.php");
    }
} else {
    header("Location: ../connection.php");
}