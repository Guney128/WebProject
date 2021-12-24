<?php
    include_once 'header.php';
?>
    <section class="signup-form">
    <div class="container">
        <form action="includes/signup.inc.php" method="post">
        <h1>Sign up</h1>
          <div class="form-group">
            <br><label for="title">Title</label>
            <br><input type="text" name="title" class="form-control">
          </div>
          <div class="form-group">
            <br><label for="fname">First name</label>
            <br><input type="text" name="fname" class="form-control">
          </div>
          <div class="form-group">
            <br><label for="lname">Last name</label>
            <br><input type="text" name="lname" class="form-control">
          </div>
          <div class="form-group">
            <br><label for="email">Email</label>
            <br><input type="text" name="email" class="form-control">
          </div>
          <div class="form-group">
            <br><label for="uid">Username</label>
            <br><input type="text" name="uid" class="form-control">
          </div>
          <div class="form-group">
            <br><label for="pwd">Password</label>
            <br><input type="password" name="pwd" class="form-control">
          </div>
          <div class="form-group">
            <br><label for="pwdrepeat">Repeat password</label>
            <br><input type="password" name="pwdrepeat" class="form-control">
          </div>
          <div class="container">
            <input type="submit" class="btn" value="Sign Up" name="submit">
          </div>
            <br>
            <a href="login.php"><small>Already member? Log in!</small></a><br>
            <?php
              if(isset($_GET["error"])){
              if($_GET["error"]=="emptyinput"){
                echo "<h3>Fill in all fields!</h3>";
              }
              else if($_GET["error"]=="invaliduid"){
                echo "<h3>Choose a proper  username!</h3>";
              }
              else if($_GET["error"]=="invalidemail"){
                echo "<h3>Choose a proper email!</h3>";
              }
              else if($_GET["error"]=="pwdsdontmatch"){
                echo "<h3>Paaswords don't match up!</h3>";
              }
              else if($_GET["error"]=="stmtfailed"){
                echo "<h3>Something went wrong, retry!</h3>";
              }
              else if($_GET["error"]=="usernametaken"){
                echo "<h3>Username already taken!</h3>";
              }
              else if($_GET["error"]=="none"){
                echo "<h3>CYou have signed up!</h3>";
              }
              }
              ?>
        </form>
    </div>
    </section>

<?php
    include_once 'footer.php';
?>