<?php
require 'includes/common.php';
#echo $_SESSION['user_id'];
?>

<!DOCTYPE html>

<html>
    <head>
        <title>cart</title>


         <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"
               type="text/css">

        <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>

        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> </script>
                      <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <link rel="stylesheet"
              type="text/css" href="style.css">


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">





    </head>


    <style>

    </style>




    <body>


       <?php
       require 'includes/header.php';


      $select_query='select items.id,items.name,items.price,users_items.users_id
      from users_items
      INNER JOIN items ON items.id=users_items.items_id' ;
      $result=mysqli_query($con, $select_query);


      ?>

        <div class="container sign">

      <table class="table table-bordered">
            <tbody>
                <tr>
                		<th>ITEM NUMBER </th>
                		 <th>ITEM NAME </th>
                		  <th>PRICE</th>
                		  <th>ACTION</th>

                </tr>

                <?php while($row=mysqli_fetch_assoc($result)){
                if($_SESSION['user_id']==$row['users_id']){
                 $sum+=$row['price']?>

        <tr>
            <td><?php
            $data[]=$row['id'];



             echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['price'] ?></td>

            <td><a href="cart-remove.php?id=<?php echo $row['id']; ?>"
				class='remove_item_link'> Remove</a></td>


          </tr>

     	<?php } }
     	 $query = http_build_query(array('ids' => $data));
     	#echo $data;
     	#echo $ids;
     	 $url=urlencode($query);
     	 # echo $url
     	 ?>


           <tr>
           <td></td>
            <td></td>
             <td>Total Rs <?php echo $sum?>\-</td>
           <td><a href="success.php?id=<?php echo $url ?>" class='btn btn-primary'>
            Confirm Order</a>
           </td>

           </tr>
            </tbody>
        </table>
       </div>







        <?php
       require 'footer.php';
        ?>





    </body>
</html>
