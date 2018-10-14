<?php
 function check_if_added_to_cart($item_id) {
    
    require 'common.php';
  
$user_id=$_SESSION['user_id'];
 
$sql ="SELECT * FROM users_items WHERE items_id='$item_id' AND users_id ='$user_id' AND
status='Added to cart'";
        

  $result = mysqli_query($con, $sql);
  
   
    If( mysqli_num_rows($result) >= 1){
        return 1;
    }
    else {
        return 0;
    }
   
    
}
?>    
  
        
        
        
