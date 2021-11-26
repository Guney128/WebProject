<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial scale=1.0">
<title>Hotel website</title>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    </head>
    <body>
        <section class="header">
            <nav>
                <a href="index.html"><img src="images/logo1clear.png"></a>
                <div class= "nav-links" id="navLinks"> 
                    <i class="fa fa-times" onclick="hideMenu()"> </i>
                    <ul>
                        <li><a href="">HOME</a></li>
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
                        <li><a href="Register.php">SIGN UP</a></li>
                        <li><a href="login.php">LOGIN</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>