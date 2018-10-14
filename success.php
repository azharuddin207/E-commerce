

 <?php

require 'includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
#$ids = explode(",", $_GET['id'])); //with explode you can get splits the ids
parse_str($_GET['id']);
$user_id=$_SESSION['user_id'];
for($i=0; $i<count($ids); $i++){
  $item_id = $ids[$i];

$sql="UPDATE `users_items` SET `status`='confirmed' WHERE users_id='$user_id' AND items_id='$item_id'" ;

 $result=mysqli_query($con,$sql);
 }

echo '<center>';
echo '<p style="color:green">Your order is confirmed. </br>Thank you for shopping with us.'.'</br></p>';
       echo   " <a href=\"product.php\">click here</a>";

           echo '    to purchase any other item.';
echo 'center';
?>
