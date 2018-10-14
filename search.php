<?php 

    

    include('common.php');

    $product_name = 'product_name';
    $product_qua = 'product_qua';
    $product_price = 'product_price';
    $product_image = 'product_image';
    $product_des = 'product_des';


    if (isset($_POST['keyword'])) 
    {
        $search = $_POST['keyword'];

        if (!empty($search))
        {
            $query = "SELECT product_name FROM products WHERE product_name='$search'";
            $query_search = mysqli_query($query);

            echo mysqli_num_rows($query_search);

            if (mysql_num_rows($query_search) >=1)
            {
                echo 'Results found: <br>';

                while ($query_row = mysql_fetch_row($query_search)) 
                {
                    echo $query_row['name'];

                }
                while($rows = mysqli_fetch_array($query_search))
                { ?>
                    <table id='display'>
                    <tr><td><?php echo "<img src=$rows[$product_image] class='grow'>" ?></td></tr>

                    <tr>
                        <th></th>
                        <th><strong>Avalible</strong></th>
                        <th><strong>Price</strong></th>
                        <th><strong>Description</strong></th>
                    </tr>

                    <tr>
                    <td width='290px'><?php echo "$rows[$product_name]" ?></td>
                    <td width='290px'><?php echo "$rows[$product_qua]" ?></td>
                    <td width='290px'><?php echo "£ $rows[$product_price]" ?></td>
                    <td width='290px'><?php echo "$rows[$product_des]" ?></td>
                    </tr>
                    <tr>
                    <td><p>Please Login To purchase this item </p><br /><a href="login.php">Login</a></td>
                    </tr>
                    </table>

                <?php
                }

            } else {
              echo 'NO results found.';

            }

        }
    }

?>
