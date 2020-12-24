<?php
ob_start();
session_start();
 include('../inc/config.php');

if(isset($_POST['submit'])){
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];


$ql=mysqli_query($con,"update admin set name='$name',email='$email',password='$password' where email='".$_SESSION['email']."'");

if($ql){
$_SESSION['pmsg']='<span style="color:#5cb85c;">'."Data was successfully updated".'</span>';
$_SESSION['email']=$email;
}
else{
$_SESSION['pmsg']='<span style="color:#d9534f;">'."Data was not successfully updated".'</span>';    
}
}

header("location:profile.php");
?>