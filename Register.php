<?php
    include_once 'header.php';
?>
    <section class="signup-form">
    /*login register styling*/
    <div class="wrapper-main">
        <h2>Sign up</h2>
        <form action="includes/signup.inc.php" method="post">
            <input name="Salutation" type="radio" value="Mr" /> Mr
            <input name="Salutation" type="radio" value="Mrs" /> Mrs
            <br><input type="text" name="fname" placeholder="Enter your first name">
            <br><input type="text" name="lname" placeholder="Enter your last name">
            <br><input type="text" name="email" placeholder="Enter your email">
            <br><input type="text" name="uid" placeholder="Enter your username">
            <br><input type="password" name="pwd" placeholder="Enter your password">
            <br><input type="password" name="pwdrepeat" placeholder="Repeat your password">
            <br><button type="submit" name="submit">Sign up</button><a href="login.php"><small>Already member? Log in!</small></a>
        </form>
    </div>
        <?php
      if(isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
          echo "<p>Fill in all fields!</p>";
        }
        else if($_GET["error"]=="invaliduid"){
          echo "<p>Choose a proper  username!</p>";
        }
        else if($_GET["error"]=="invalidemail"){
          echo "<p>Choose a proper email!</p>";
        }
        else if($_GET["error"]=="stmtfailed"){
          echo "<p>Something went wrong, retry!</p>";
        }
        else if($_GET["error"]=="usernametaken"){
          echo "<p>Username already taken!</p>";
        }
        else if($_GET["error"]=="none"){
          echo "<p>CYou have signed up!</p>";
        }
      }
    ?>
    </section>

<?php
    include_once 'footer.php';
?>