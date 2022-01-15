<?php
require_once 'dbh.inc.php';
session_start();

if(isset($_POST['update'])) {
    $userNewanrede= $_POST['updateTitle'];
    $userNewfname= $_POST['updateFname'];
    $userNewlname= $_POST['updateLname'];
    $userNewEmail= $_POST['updateEmail'];
    $userNewUid=  $_POST['updateUid'];


  
            $loggedInUser = $_SESSION['useruid'];

            $sql = "UPDATE users SET usersTitle='$_POST[updateTitle]', usersFname='$_POST[updateFname]', usersLname='$_POST[updateLname]',usersEmail='$_POST[updateEmail]', usersUid='$_POST[updateUid]' WHERE usersUid ='$loggedInUser'";
            $query_run =  mysqli_query($conn, $sql);

            header('location: ../profile.php?success=userupdated');
            exit;
         


  
    }else {
        header('location: ../profile.php?error=emptyfields');
        exit;
    }