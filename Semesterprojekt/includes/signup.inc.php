<?php

if(isset($_POST["submit"])){

    $fname = $_POST["fname"];
    $lname =  $_POST["lname"];
    $email =  $_POST["email"];
    $username =  $_POST["uid"];
    $pwd =  $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($fname, $lname, $email, $username, $pwd) !== false){
        header("location: ../register.php?error=emptyinput");
        exit();
    }
    if(invalidUid($username) !== false){
        header("location: ../register.php?error=invalidUid");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../register.php?error=invalidemail");
        exit();
    }
    if(uidExists($conn, $username, $email) !== false){
        header("location: ../register.php?error=usernametaken");
        exit();
    }
    createUser($conn, $fname, $lname, $email, $username, $pwd);

}
else{
    header("location: ../register.php");
}