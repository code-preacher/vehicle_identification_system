<?php 
ob_start();
session_start();
include '../inc/checklogin.php';
checkLogin();
$id=$_GET['id'];
?>

<?php
include '../inc/config.php';
$j=mysqli_query($con,"delete from car_data where id='$id'");
 if ($j) {
  $_SESSION['fmsg']= '<span style="color:#5cb85c;">'."Data was successfully deleted".'</span>';
 header("location:view-car.php");
 } else {
  $_SESSION['fmsg']= '<span style="color:#d9534f;">'."Data was not successfully deleted".'</span>';
 header("location:view-car.php");
 }
 


?>


