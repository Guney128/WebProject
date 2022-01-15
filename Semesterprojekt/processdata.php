<?php
    include_once 'header.php';
?>

<?php
    require("includes/dbaccess.php");
    require("includes/functions.inc.php");

    if(isset($_GET["id"])){
        if(!empty($_GET["id"])){
            
           if(isset($_POST["submit"])){
           
            $hashedPassword = password_hash($_POST["password"], PASSWORD_DEFAULT);

            $stmt = $mysql->prepare("UPDATE users SET usersTitle= :title, usersFname= :fname, usersLname= :lname, usersEmail = :email, usersUid = :user, usersPwd= :pwd WHERE usersId = :id");
            $stmt->execute(array(":title" => $_POST["title"],":fname" => $_POST["fname"], ":lname" => $_POST["lname"], ":email" => $_POST["email"], ":user" => $_POST["username"], ":pwd" => $hashedPassword, ":id" => $_GET["id"]));
            ?>
                <p>User saved.</p>
                <?php
            }
            
            
            $stmt = $mysql->prepare("SELECT * FROM users WHERE usersId = :id");
            $stmt->execute(array(":id" => $_GET["id"]));
            $row = $stmt->fetch();

            
            ?>
            <h2>Update profile </h2>
            <form action="processdata.php?id=<?php echo $_GET["id"] ?>" method="post">
            <label>Title</label>
            <input type="text" name="title" value="<?php echo $row["usersTitle"] ?>" require><br>
            <label>First name</label>
            <input type="text" name="fname" value="<?php echo $row["usersFname"] ?>" require><br>
            <label>Last name</label>
                <input type="text" name="lname" value="<?php echo $row["usersLname"] ?>" require><br>
                <label>Uid</label>
                <input type="text" name="uid" value="<?php echo $row["usersUid"] ?>" require><br>
                <label>E-Mail-Adresse</label>
                <input type="email" name="email" value="<?php echo $row["usersEmail"] ?>" require><br>
               <label>Passwort</label>
                <input type="password" name="password" value="<?php echo $row["usersPwd"] ?>" require><br>
              

                <button name="submit" type="submit">Save</button>
            </form>
            <?php
        } else {
            ?>
            <p>No new user requested.</p>
            <?php
        }
    } else {
        ?>
        <p>No user requested.</p>
        <?php
    }
    ?>
<?php
    include_once 'footer.php';
?>