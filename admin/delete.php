<?php
//connect to db
require_once("connection.php");
//collect variables
if(isset($_POST)){
    $id=$_POST['id'];
//sql statement
    $sql="DELETE FROM`contact_us`
     WHERE `contact_us`.`id` = $id ";
//sql statement execution
     $delete = mysqli_query($conn,$sql);
     if($delete){
        ?>
        <script>
         window.alert("Record deletion successful");
         window.location.href = "contact.php";
         </script>
      <?php
     }else{
      ?>
      <script>
         window.alert("Could not delete");
         window.location.href = "contact.php";
      </script>
      <?php
     }
}
?>