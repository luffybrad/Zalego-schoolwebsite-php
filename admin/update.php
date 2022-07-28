<?php
//connect to db
require_once("connection.php");
//collect variables
if(isset($_POST)){
    $id=$_POST['id'];
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $password = $_POST['password'];
    $cpassword= $_POST['cpassword'];
//sql statement
    $sql="UPDATE `contact_us` SET 
    `fullname`='$fullname',
    `email`='$email', 
    `phonenumber`= '$phonenumber',
     `password` = '$password',
     `cpassword` = '$cpassword'
     WHERE `contact_us`.`id` = $id ";
//sql statement execution
     $update= mysqli_query($conn,$sql);
     if($update){
        ?>
        <script>
         window.alert("Update is successful");
         window.location.href = "contact.php";
         </script>
      <?php
     }else{
      ?>
      <script>
         window.alert("Could not update");
         window.location.href = "contact.php";
      </script>
      <?php
     }
}
?>