<?php
require 'includes/common.php';


$email =    mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
#echo $password;


$login_query="SELECT name,id, email FROM users WHERE email='$email' and password='$password' ";
$password=md5($password);
$login_result= mysqli_query($con, $login_query);
$num_of_users= mysqli_num_rows($login_result);
If ($num_of_users == 0){
   $_SESSION['error']= 'Please enter correct Email and Password';
   header("Location:login.php");
   return;
}
 else {

  $row= mysqli_fetch_array($login_result,MYSQLI_ASSOC);
  $_SESSION['email']=$row['email'];
  $_SESSION['user_id']=$row['id'];
  $_SESSION['success']='successfully logged in';
  header('location:product.php');
  return;
}

?>
