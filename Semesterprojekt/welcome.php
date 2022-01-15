<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Hotel website</title>
    
    <style>
    a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    }

    a:hover, a:active {
    background-color: green;
    }

    body {
    background-image: url("./img/rooftop.jpg");
    height: 100%;
    }
    </style>

</head>
<body>
    <div class="loc">
    <div class="container">
    <div class="welcome">
        <?php
        if(isset($_SESSION["useruid"])) {
            echo "<h1> Welcome " . $_SESSION["useruid"] . "</h1>";
        }
        ?>
        <br>
        <a href="index.php">Click me to continue!</a>
    </div>
    </div>
    </div>
</html>
