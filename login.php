<?php
    include_once 'header.php';
?>
    <section class="signup-form">
      /*login register styling*/
        <div class="wrapper-main">
        <h2>Login</h2>
        <form action="includes/login.inc.php" method="post">
            <br><input type="text" name="uid" placeholder="Enter your email/username">
            <br><input type="password" name="password" placeholder="Enter your password">
            <br><button type="submit" name="submit">login</button><a href="Register.php"><small>Not registered yet? Sign up!</small</a>
        </form> 
        </div>
        <?php
      if(isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
          echo "<p>Fill in all fields!</p>";
        }
        else if($_GET["error"]=="wronglogin"){
          echo "<p>Incorrect login information!</p>";
        }
      }
    ?>
    </section>
<?php
    include_once 'footer.php';
?>