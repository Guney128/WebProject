<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial scale=1.0">
        <title>Hotel website</title>
        /*man muss ./css/style.css, weil unser Ordner heißt css und das "./" darf nicht fehlen, sonst gibt es kein styling*/
        <link rel="stylesheet" href="./css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <section class="header">
            <nav>
                <a href="index.html"><img src="./img/logo1clear.png"></a>
                <div class= "nav-links" id="navLinks"> 
                    <i class="fa fa-times" onclick="hideMenu()"> </i>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="">ABOUT</a></li>
                        <li><a href="">NEWS</a></li>
                        <?php
                            if(isset($_SESSION["userid"])){
                                echo "<li><a href='profile.php'>PROFILE PAGE</a></li>";
                                echo "<li><a href='includes/logout.inc.php'>LOG OUT</a></li>";
                            }
                            else{
                                echo "<li><a href='Register.php'>SIGN UP</a></li>";
                                echo "<li><a href='login.php'>LOGIN</a></li>";
                            }
                        ?>
                        <li><a href="">BLOG</a></li>
                        <li><a href="">CONTACT</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>