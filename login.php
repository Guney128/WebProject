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
            <input type="submit" class="btn" name="submit" value="Login"><br>
            <a href="Register.php"><small>Not registered yet? Sign up!</small</a><br>
           <?php
              if(isset($_GET["error"])){
              if($_GET["error"]=="emptyinput"){
                echo "<h3>Fill in all fields!</h3>";
              }
              else if($_GET["error"]=="wronglogin"){
                echo "<h3>Incorrect login information!</h3>";
              }
            }
            ?>
        </form> 
      </div>
    </section>
<?php
    include_once 'footer.php';
?>