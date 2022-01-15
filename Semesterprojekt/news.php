<?php
    include_once 'header.php';
?>

<?php
    if(isset($_POST["upload"])){
        require('includes/dbh.inc.php');

        $file = $_FILES['img_dir'];

        $fileName = $_FILES['img_dir']['name'];
        $fileTmpName = $_FILES['img_dir']['tmp_name'];
        $fileSize = $_FILES['img_dir']['size'];
        $fileError = $_FILES['img_dir']['error'];
        $fileType = $_FILES['img_dir']['type'];

        $fileExt = explode('.', $fileName);

        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');

        if (in_array($fileActualExt, $allowed)){
          if ($fileError === 0){
            if ($fileSize < 500000){
              $fileNameNew = uniqid('', true). ".".$fileActualExt;
              $fileDestination = 'uploads/' .$fileNameNew;
              move_uploaded_file($fileTmpName, $fileDestination);

            } else {
                echo "Your file is too big!";
            }
          } else {
              echo "There was an error uploading your file!";
          }
        } else {
            echo "You are not allowed to upload files of this type!";
        }

        $stmt = $mysql->prepare("INSERT INTO news (heading, caption, img_dir, shared_at) VALUES (:heading, :caption, :img_dir, :time)");
        $stmt->bindParam(":heading", $_POST["heading"], PDO::PARAM_STR);
        $stmt->bindParam(":caption", $_POST["caption"], PDO::PARAM_STR);
        $stmt->bindParam(":img_dir", $_POST["img_dir"], PDO::PARAM_STR);
        $time = time();
        $stmt->bindParam(":time", $time, PDO::PARAM_STR);
        $stmt->execute();
    }
    ?>
    <div class="container">
        <form action="news.php" method="post" enctype="multipart/form-data">
        <h1>News upload</h1>
          <input type="text" name="heading" placeholder="Heading" required><br>
          <textarea name="caption" cols="78" rows="10"></textarea><br>
          <input type="file" name="img_dir" value="Image">
          <button type="submit" name="upload">Upload</button><br>
        </form>
    </div>




<?php
    include_once 'footer.php';
?>