<?php
//db comnection
require_once("connection.php"); 

//collecting form values
if(isset($_POST)){
$fullname=$_POST["fullname"];
$email=$_POST["email"];
$phonenumber=$_POST["phonenumber"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
//variable holding query statement
$sql="INSERT INTO `contact_us` (`id`, `fullname`, `email`, `phonenumber`, `password`, `cpassword`) VALUES (NULL, '$fullname', '$email', '$phonenumber', '$password', '$cpassword')";
//query execution
// first argument needs to establish connection for query
//second argument holds statement to be queried
$insert=mysqli_query($conn, $sql);
if($insert){
    ?>
    <script>
        window.alert("Thank you for contacting us");
        window.location.href="/projects/schoolwebsite_tr/pages/contact.html";
    </script> 
    <?php
}else{
    ?>
    
    <script>
        window.alert("Oops!....something wrong happened");
        window.location.href="/projects/schoolwebsite_tr/pages/contact.html";
    </script>
    
    <?php 
}
}
?>