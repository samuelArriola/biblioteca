<?php

$servername = "localhost";
$database = "biblioteca";
$username = "root";
$password = "";

//  Create connection
$con = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($con,"utf8");
if (!$con) {
     return  "error";
}
?>
