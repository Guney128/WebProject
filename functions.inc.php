<?php

function emptyInputSignup($title, $fname, $lname, $email, $username, $pwd, $pwdRepeat){
    $result = "";
    if (empty($title) ||empty($fname) || empty($lname) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUid($username){
    $result = "";
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result = "";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat){
    $result = "";
    if ($pwd !== $pwdRepeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../register.php?error=stmtfailed1");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function   createUser($conn, $title, $fname, $lname, $email, $username, $pwd){
    $sql = "INSERT INTO users (usersTitle, usersFname, usersLname, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../register.php?error=stmtfailed2");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssss", $title, $fname, $lname, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../register.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd){
    $result = "";
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);

    if($uidExists === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    $pwdHashed = $uidExists["usersPwd"];
    $checkpwd = password_verify($pwd, $pwdHashed);

    if($checkpwd === false){
        header("login: ../login.php?error=wronglogin");
        exit();
    }
    if(uidActive($conn, $username) == 0){
        header("location: ../login.php?error=userNotActive");
        exit();
    }
    
    else if($checkpwd === true){
        session_start();
        $_SESSION["userid"]= $uidExists["usersId"];
        $_SESSION["useruid"]=$uidExists["usersUid"];
        header("location: ../welcome.php");
        exit();
    }
}

function uidActive($conn, $username)
{ //Schaut ob Benutzername oder Email bereits existiert.
    $sql = "SELECT Status FROM users WHERE usersUid = ?"; //? als Placeholder //Daten werden nicht sofort an Datenbank geschickt -> sonst anfällig für Sql injections.
    $stmt = mysqli_stmt_init($conn); //Führe connection aus

    if (!mysqli_stmt_prepare($stmt, $sql)) { //Wenn es nicht funktioniert, dann wird der User zu Startseite mit einer Error Message geschickt.
        header("location: ../index.php?error=stmtfailed3");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username); //2S- also Strings weil oben 2 Werte sind. Gleiche Reihenfolge wie oben nötig. Die vom User eingegebenen Parameter werden in der Datenbank angezeigt.
    mysqli_stmt_execute($stmt); //Die Informationen vom User werden nun in der Datenbank gespeichert.

    $resultData = mysqli_stmt_get_result($stmt); //Gibt die Ergebnisse der obigen Zeile aus.

    if ($row = mysqli_fetch_assoc($resultData)) { //Wenn ich Daten aus der Datenbank bekommen dann zählt das als "True"
        return reset($row); // returning alle daten wenn der user in der datenbank existiert
    } else {
        return 0;
    }
    mysqli_stmt_close($stmt);
}