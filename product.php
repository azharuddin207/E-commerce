<?php
require 'includes/common.php';
echo '<center>';
if(isset($_SESSION['success'])){
  echo '<p style="color:green">'.$_SESSION['success'].'</p>';
  unset($_SESSION['success']);
}
echo '</center>';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

  <head>
    <title>product</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> </script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      #product{
  /* position:; */
  /* height:80vh;  */
  }
</style>

  </head>

  <body>
    <?php
require 'includes/header.php';
require 'check-if-added.php';
?>
<!--
    <form method="POST" action="search.php">
      <center>
        <div class="form-group">
          <input type="text" placeholder="Enter product name" name="search"></input>
          <input type="submit" value="search" class="btn btn-primary btn-md"></input>
        </div>
          </center>
    </form>
  -->

    <div class=" container">
      <div class="jumbotron">
        <h1>Welcome to our Lifestyle Store!</h1>
        <p> We have the best cameras, watches and shirts for you,
          No need to hunt
          around, we have all in one place.</p>
      </div>

    </div>








    <row class="text-center ">
      <div class="col-md-3 col-sm-6 ">
        <div class="thumbnail">
          <a href="#" class="thumbnail">

            <img src="img/camera.jpg" alt="responsive image"></a>

          <div class="caption">
            <h3>cannon EOS</h3>
            <p>price:Rs.36000</p>







            <?php if (!isset($_SESSION['email'])) {
    ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                Now</a></p>
            <?php
} else {
        if (check_if_added_to_cart(1)) {
            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
        } else {
            ?>
            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
            <?php
        }
    }

?>


          </div>
        </div>
      </div>









      <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
          <a href="#" class="thumbnail">

            <img src="img/camera.jpg" alt="responsive image"></a>

          <div class="caption">
            <h3>Sony DSLR</h3>
            <p>price:Rs.46000</p>

            <?php if (!isset($_SESSION['email'])) {
    ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                Now</a></p>
            <?php
} else {
        //We have created a function to check whether this particular product is added
#to cart or not.
if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart !=
#0)
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
    ?>
            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
            <?php
}
    }

  ?>
          </div>
        </div>
      </div>




      <div class="col-md-3 col-sm-6">
        <div class="thumbnail">
          <a href="#" class="thumbnail">

            <img src="img/camera.jpg" alt="responsive image"></a>

          <div class="caption">
            <h3>Sony DSLR</h3>
            <p>price:Rs.40000</p>

            <?php if (!isset($_SESSION['email'])) {
      ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                Now</a></p>
            <?php
  } else {
      //We have created a function to check whether this particular product is added
#to cart or not.
if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart !=
#0)
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
    ?>
            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
            <?php
}
  }

  ?>
          </div>
        </div>
      </div>







      <div class="col-md-3 col-sm-6 ">
        <div class="thumbnail">
          <a href="#" class="thumbnail">

            <img src="img/camera.jpg" alt="responsive image"></a>

          <div class="caption">
            <h3>Olympus DSLR</h3>
            <p>price:Rs.80000</p>

            <?php if (!isset($_SESSION['email'])) {
      ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                Now</a></p>
            <?php
  } else {
      //We have created a function to check whether this particular product is added
#to cart or not.
if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart !=
#0)
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
    ?>
            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
            <?php
}
  }

  ?>

          </div>
        </div>
      </div>
    </row>










    <row class="text-center sign">
      <div class="col-md-3 col-sm-6 ">
        <div class="thumbnail">
          <a href="#" class="thumbnail">

            <img src="img/watch.jpg" alt="responsive image"></a>

          <div class="caption">
            <h3>Titan Model#301</h3>
            <p>price:Rs.36000</p>

            <?php if (!isset($_SESSION['email'])) {
      ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                Now</a></p>
            <?php
  } else {
      //We have created a function to check whether this particular product is added
#to cart or not.
if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart !=
#0)
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
    ?>
            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
            <?php
}
  }

  ?>
          </div>
        </div>
      </div>





      <div class="col-md-3 col-sm-6 ">
        <div class="thumbnail">
          <a href="#" class="thumbnail">

            <img src="img/watch.jpg" alt="responsive image"></a>

          <div class="caption">
            <h3>Titan Model#201</h3>
            <p>price:Rs.136000</p>

            <?php if (!isset($_SESSION['email'])) {
      ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                Now</a></p>
            <?php
  } else {
      //We have created a function to check whether this particular product is added
#to cart or not.
if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart !=
#0)
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
    ?>
            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
            <?php
}
  }
?>
          </div>
        </div>
      </div>



      <div class="col-md-3 col-sm-6 ">
        <div class="thumbnail">
          <a href="#" class="thumbnail">

            <img src="img/watch.jpg" alt="responsive image"></a>

          <div class="caption">
            <h3>HMT Milon</h3>
            <p>price:Rs.34000</p>

            <?php if (!isset($_SESSION['email'])) {
    ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                Now</a></p>
            <?php
} else {
        //We have created a function to check whether this particular product is added
#to cart or not.
if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart !=
#0)
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
    ?>
            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
            <?php
}
    }

  ?>

          </div>
        </div>
      </div>







      <div class="col-md-3 col-sm-6 sign">
        <div class="thumbnail">
          <a href="#" class="thumbnail">

            <img src="img/watch.jpg" alt="responsive image"></a>

          <div class="caption">
            <h3>Fabor Luba#111</h3>
            <p>price:Rs.36000</p>

            <?php if (!isset($_SESSION['email'])) {
      ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                Now</a></p>
            <?php
  } else {
      if (check_if_added_to_cart(9)) {
          echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
      } else {
          ?>
            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
            <?php
      }
  }

  ?>
          </div>
        </div>
      </div>


    </row>










    <row class="text-center sign">
      <div class="col-md-3 col-sm-6 sign">
        <div class="thumbnail">
          <a href="#" class="thumbnail">

            <img src="img/shirt.jpg" alt="responsive image"></a>

          <div class="caption">
            <h3>H&W</h3>
            <p>price:Rs.800</p>

            <?php if (!isset($_SESSION['email'])) {
      ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                Now</a></p>
            <?php
  } else {
      //We have created a function to check whether this particular product is added
#to cart or not.
if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart !=
#0)
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
    ?>
            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
            <?php
}
  }

  ?>
          </div>
        </div>
      </div>




      <div class="col-md-3 col-sm-6 sign">
        <div class="thumbnail">
          <a href="#" class="thumbnail">

            <img src="img/shirt.jpg" alt="responsive image"></a>

          <div class="caption">
            <h3>Luis phil</h3>
            <p>price:Rs.1000</p>

            <?php if (!isset($_SESSION['email'])) {
      ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                Now</a></p>
            <?php
  } else {
      //We have created a function to check whether this particular product is added
#to cart or not.
if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart !=
#0)
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
    ?>
            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
            <?php
}
  }

  ?>

          </div>
        </div>
      </div>



      <div class="col-md-3 col-sm-6 sign">
        <div class="thumbnail">
          <a href="#" class="thumbnail">

            <img src="img/shirt.jpg" alt="responsive image"></a>

          <div class="caption">
            <h3>John Zok</h3>
            <p>price:Rs.1500</p>

            <?php if (!isset($_SESSION['email'])) {
      ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                Now</a></p>
            <?php
  } else {
      //We have created a function to check whether this particular product is added
#to cart or not.
if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart !=
#0)
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
    ?>
            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
            <?php
}
  }

  ?>
          </div>
        </div>
      </div>


      <div class="col-md-3 col-sm-6 sign">
        <div class="thumbnail">
          <a href="#" class="thumbnail">

            <img src="img/shirt.jpg" alt="responsive image"></a>

          <div class="caption">
            <h3>jhalsani</h3>
            <p>price:Rs.1200</p>

            <?php if (!isset($_SESSION['email'])) {
      ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                Now</a></p>
            <?php
  } else {
      //We have created a function to check whether this particular product is added
#to cart or not.
if (check_if_added_to_cart(13)) { //This is same as if(check_if_added_to_cart !=
#0)
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
    ?>
            <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
            <?php
}
  }

  ?>
          </div>
        </div>
      </div>

    </row>










    <?php
        require 'includes/footer.php';
        ?>







  </body>

</html>
