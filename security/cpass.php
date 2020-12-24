
<?php
ob_start();
session_start();
 include('../inc/config.php');

 if(isset($_POST['submit'])){
extract($_POST);
$date=date("d-m-y @ g:i A");


$da=mysqli_query($con,"update security set name='$name',email='$email',phoneno='$phoneno',password='$password' where email='".$_SESSION['email']."' ");
if ($da) {
$_SESSION['email']=$email;
$_SESSION['vmsg']='<span style="color:#5cb85c;">'." Data updated successfully....".'</span>';

} else {
  $_SESSION['vmsg']='<span style="color:#d9534f;">'."Error in updating Data....".'</span>';

}

}

header("location:profile.php");
?>