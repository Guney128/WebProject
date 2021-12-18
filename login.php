<?php
    include_once 'header.php';
?>
    <section class="login-form">
      <div class="container">
        <form action="includes/login.inc.php" method="post">
        <h1>Login</h1>
          <div class="form-group">
            <br><label for="uid">Username</label>
            <br><input type="text" name="uid" class="form-control">
          </div>
          <div class="form-group">
            <br><label for="password">Password</label>
            <br><input type="password" name="pwd" class="form-control">
          </div>
            <input type="submit" class="btn" name="submit" value="Login"></button><br><a href="Register.php"><small>Not registered yet? Sign up!</small</a>
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