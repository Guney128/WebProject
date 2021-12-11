<?php

if(isset($_POST["submit"])){

    $Salutation = $_POST["Salutation"];
    $fname = $_POST["fname"];
    $lname =  $_POST["lname"];
    $email =  $_POST["email"];
    $username =  $_POST["uid"];
    $pwd =  $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($Salutation, $fname, $lname, $email, $username, $pwd, $pwdrepeat) !== false){
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
    createUser($conn, $Salutation, $fname, $lname, $email, $username, $pwd);

}
else{
    header("location: ../register.php");
}