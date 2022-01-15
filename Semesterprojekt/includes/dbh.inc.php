<?php
//database handling, connection to db
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "index.php";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

try{
    $mysql = new PDO("mysql:host=$serverName; dbname=$dBName", $dBUsername, $dBPassword);
} catch (PDOException $e){
    echo "SQL Error: ".$e->getMessage();

}
$query= "select * from users";
$connect= mysqli_query($conn, $query);
$data=mysqli_fetch_assoc($connect);
$num=mysqli_num_rows($connect);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}