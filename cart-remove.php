<?php

require 'common.php';



$item_id=$_GET['id'];
$user_id=$_SESSION['user_id'];

$sql="DELETE  FROM users_items WHERE   items_id='$item_id' and users_id='$user_id'";

if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}

header('location:cart.php');



?>
