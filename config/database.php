<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "foodspot";
$con = mysqli_connect($host, $user, $pass, $db);
if (!$con) {
    die("gagal mengkoneksikan database: " . mysqli_connect_error());
}



?>