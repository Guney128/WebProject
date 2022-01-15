<?php
include 'includes/dbh.inc.php';
$id=$_GET['userID'];
$sql="UPDATE Users SET Status='0' WHERE usersId = '$id'";

if(mysqli_query($conn,$sql))
{
    echo "User deactivated";
}