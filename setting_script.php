<?php


require 'common.php';
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}


	$user_id=$_SESSION['user_id'];
	 $sql="SELECT * FROM `users` WHERE id='$user_id'";
    	$result = mysqli_query($con, $sql);
  	 $row = mysqli_fetch_assoc($result);
    	  $p1=$row['password'];
 	 $p2=$_GET['currentpassword'] ;
  	 $p3=$_GET['newpassword'];
  	 $p4=$_GET['confirmpassword'];
  	 #echo $p3==$p4;
if($p3===$p4){
  if( $p1===$p2){
  	  echo $sql="UPDATE `users` SET `password`='$p3' WHERE id='$user_id'";
  	 
  	 if($res=mysqli_query($con, $sql)){
  	 echo  'Your Password has been  Changed';
      	header('location:logout.php');
  	 }
  	 else{
	die(mysqli_error());
	header('location:setting.php');
  	 }
  	 
  	 }
 else{

	echo 'incorrrect password, plese try again!' ;
	}

}	
 else{
 	echo 'password does not matches';
	 }
    
    

?>

