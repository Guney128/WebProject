<?php
    include_once 'header.php';
?>

<?php
   require_once 'includes/dbh.inc.php';
?>


   <section class="signup-form">
    <div class="container">
        <?php
            if(isset($_GET['error'])){
                ?>
                <small class="alert alert-danger">Data is required</small>
            <?php
            }

           $currentUser = $_SESSION['useruid'];
           $sql = "SELECT * FROM users WHERE usersUid = '$currentUser'";

           mysqli_query($conn,$sql);

           $gotResults = mysqli_query($conn,$sql);

           if($gotResults){
               if(mysqli_num_rows($gotResults)>0){
                   while($row = mysqli_fetch_array($gotResults)){
                       //print_r($row["useruid"]);
                    ?>
        <form action="includes/profile.inc.php" method="post">
        <h1>Update data</h1>
          <div class="form-group">
            <br><label for="title">Title</label>
            <br><input type="text" name="updateTitle" class="form-control" value="<?php echo $row["usersTitle"]; ?>">
          </div>
          <div class="form-group">
            <br><label for="fname">First name</label>
            <br><input type="text" name="updateFname" class="form-control"  value="<?php echo $row["usersFname"]; ?>">
          </div>
          <div class="form-group">
            <br><label for="lname">Last name</label>
            <br><input type="text" name="updateLname" class="form-control"  value="<?php echo $row["usersLname"]; ?>">
          </div>
          <div class="form-group">
            <br><label for="email">Email</label>
            <br><input type="text" name="updateEmail" class="form-control"  value="<?php echo $row["usersEmail"]; ?>">
          </div>
          <div class="form-group">
            <br><label for="uid">Username</label>
            <br><input type="text" name="updateUid" class="form-control"  value="<?php echo $row["useruid"]; ?>">
          </div>
          <div class="container">
            <input type="submit" class="btn" value="Update" name="update">
          </div>     
                <?php
                   }
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