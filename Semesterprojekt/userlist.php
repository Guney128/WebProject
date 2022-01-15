<?php
include_once 'header.php';
?>

<div class="container">
<table border="1">
<tr>
    <th>&nbsp;ID&nbsp;</th>
    <th>&nbsp;Title&nbsp;</th>
    <th>&nbsp;First name&nbsp;</th>
    <th>&nbsp;Last name&nbsp;</th>
    <th>&nbsp;Email&nbsp;</th>
    <th>&nbsp;Uid&nbsp;</th>
    <th>&nbsp;Password&nbsp;</th>
    <th>&nbsp;Status&nbsp;</th>
    <th>&nbsp;Change status&nbsp;</th>
    <th>&nbsp;Edit&nbsp;</th>
</tr>


<?php
require 'includes/dbh.inc.php';

if(isset($_GET['del'])){
    if(!empty($_GET['del'])){
        $stmt = $mysql->prepare("DELETE FROM users WHERE usersId = :id");
        $stmt->execute(array(":id" => $_GET['del']));
        ?>
        <p>User deleted!</p>
        <?php
    }
}
$stmt = $mysql->prepare("SELECT * FROM users");
    $stmt->execute();
    while($row = $stmt->fetch()){
        ?>
    
     <tr>
     <td>&nbsp;<?php echo $row['usersId']?>&nbsp;</td>
     <td>&nbsp;<?php echo $row['usersTitle']?>&nbsp;</td>
     <td>&nbsp;<?php echo $row['usersFname']?>&nbsp;</td>
     <td>&nbsp;<?php echo $row['usersLname']?>&nbsp;</td>
     <td>&nbsp;<?php echo $row['usersEmail']?>&nbsp;</td>
     <td>&nbsp;<?php echo $row['usersUid']?>&nbsp;</td>
     <td>&nbsp;<?php echo $row['usersPwd']?>&nbsp;</td>
     <td>&nbsp;<?php if ($row['Status']==1)
     {
         echo "<p style=color:green>Active</p>";
     }else {
         echo "<p style=color:red>Inactive</p>";
     }
     ?>
     </td>
    
     <td>
          <?php 
          $status = $row['Status'];
          if($status==0) $strStatus="<a href=active.php?userID=".$row['usersId'].">Activate user</a>";
          if($status==1) $strStatus="<a href=inactive.php?userID=".$row['usersId'].">Deactivate user</a>";
          echo "$strStatus"

          ?>
    </td>
     

    
    <td>&nbsp;<a href="processdata.php?id=<?php echo $row["usersId"] ?>"><i class="fas fa-edit"></i></a><a href="userlist.php?del=<?php echo $row["usersId"] ?>"><i class="fas fa-user-minus"></i></a>&nbsp;
  <?php
     ?>
     </td>
         </tr>
 <?php
 
            }


?>


</table>
</div>

<?php
include_once 'footer.php';
?>