<?php
session_start();

if(isset($_POST['update'])){
    $newTtile = $_POST["title"];
    $newFname = $_POST["fname"];
    $newLname =  $_POST["lname"];
    $newEmail =  $_POST["email"];
    $newUsername =  $_POST["uid"];

    if(!empty($newTtile) && !empty($$newFname) && !empty($newLname) && !empty($newEmail) && !empty($newUsername)){

    }else{
        header("Location: ../profile.php?error=emptyData");
    }
    
    print_r($newTtile);
    print_r($newFname);
    print_r($newLname);
    print_r($newEmail);
    print_r($newUsername);
}