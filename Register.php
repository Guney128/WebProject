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
            <input type="submit" class="btn" value="Sign Up" name="submit"></button><br><a href="login.php"><small>Already member? Log in!</small></a>
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
        else if($_GET["error"]=="pwdsdontmatch"){
          echo "<p>Paaswords don't match up!</p>";
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