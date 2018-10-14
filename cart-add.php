<?php
require 'common.php';


 

$user_id=$_SESSION['user_id'];


$item_id=$_GET['id'];


$sql ="INSERT INTO users_items( items_id, status, users_id) values ('$item_id', 'Added to cart','$user_id')";
   
$result= mysqli_query($con, $sql) or die(mysqli_error($con));
      
        

header('location:product.php');



?>

