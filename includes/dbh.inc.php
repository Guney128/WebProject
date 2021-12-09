<?php
//database handling, connection to db
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "index.php";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);


if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}