<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial scale=1.0">
        <title>Hotel website</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <section class="header">
            <nav>
            
                <div class= "nav-links" id="navLinks"> 
                    <i class="fa fa-times" onclick="hideMenu()"> </i>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="news.php">NEWS</a></li>
                        <li><a href="imprint.php">IMPRINT</a></li>
                        <?php
                            if(isset($_SESSION["useruid"])){
                                echo "<li><a href='profile.php'>PROFILE PAGE</a></li>";
                                echo "<li><a href='includes/logout.inc.php'>LOG OUT</a></li>";
                            }
                            else{
                                echo "<li><a href='Register.php'>SIGN UP</a></li>";
                                echo "<li><a href='login.php'>LOGIN</a></li>";
                            }
                        ?>
                        <li><a href="contact.php">CONTACT</a></li>
                       <li> <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                        </a> </li>
                    </ul>
                </div>
                <script>
 function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
            </nav>