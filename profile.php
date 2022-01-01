<?php
    include_once 'header.php'
?>

<?php
    include_once 'header.php';
?>
    <section class="signup-form">
    <div class="container">
        <form action="includes/signup.inc.php" method="post">
            <?php
                $currentUser = $_SESSION["useruid"];
                $sql = "SELECT * FROM users WHERE usersUid = 'currentUser'"
            
                //$getResults = mysqli_query($connection,$sql);

                //if($gotResults){}
            ?>
        <h1>Update data</h1>
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
            <input type="submit" class="btn" value="Update" name="Update">
          </div>
        </form>
    </div>
    </section>

<?php
    include_once 'footer.php';
?>

<?php
    include_once 'footer.php'
?>
