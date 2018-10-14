<?php

require 'includes/common.php';
$name=$_GET['name'];
$email=$_GET['email'];
$password=$_GET['password'];
$contact=$_GET['contact'];
$address=$_GET['address'];
$city=$_GET['city'];
echo $email."</br>";
$select_query = "SELECT  id  FROM users WHERE email='$email' ";
$select_query_result = mysqli_query($con, $select_query)
        or die(mysqli_error($con));
$row = mysqli_fetch_array($select_query_result);
echo $row['id'];
$a=mysqli_num_rows($row);
echo $a;
if (mysqli_num_rows($row)>0){
    echo 'email already exist';
}
 else {


$user_registration_query = "insert into users(name,email, password, contact, address,city)"
        . " values ('$name', '$email', '$password', '$contact','$address','$city')";

$user_registration_submit = mysqli_query($con, $user_registration_query) or
       die(mysqli_error($con));
#echo "User successfully inserted";
 }


$id= mysqli_insert_id($con);
        $_SESSION['id']=$id;
       header('location: product.php');
?>
