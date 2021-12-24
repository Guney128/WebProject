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
          <div class="container">
            <input type="submit" class="btn" name="submit" value="Login">
          </div>
            <br>
            <a href="Register.php"><small>Not registered yet? Sign up!</small></a><br>
          <div class="h2">
            <?php
              if(isset($_GET["error"])){
              if($_GET["error"]=="emptyinput"){
                echo "<h2>Fill in all fields!</h2>";
              }
              else if($_GET["error"]=="wronglogin"){
                echo "<h2>Incorrect login information!</h2>";
              }
            }
            ?>
          </div>
        </form> 
      </div>
    </section>
<?php
    include_once 'footer.php';
?>