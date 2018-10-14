
<?php


require 'includes/common.php';
if (isset($_SESSION['email'])) {
   header('location:product.php');
}
?>




<!DOCTYPE html>

<html>
    <head>
        <title>Sign Up</title>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"
              type="text/css"

        <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>

        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> </script>
                      <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <link rel="stylesheet"
              type="text/css" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
        .signup{

        }

        </style>




    </head>


    <body>



<?php
include 'includes/header.php';

?>


<div class="container">
     <div class="row">
         <div class="col-xs-4 col-xs-offset-4 sign">

       <form method="GET" action="signup_script.php">
              <h1>Sign Up</h1>
               <div class="form-group">


                   <input type="text" name="name" class="form-control input-lg" placeholder="Enter your name" required       >
                </div>

              <div class="form-group">

                                  <!--<input type="email" class="form-control"
                                           id="exampleInputEmail1"
                                           placeholder="Email" name="email"
                                           required = "true"

                                          pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">-->
                                           <input type="email" name="email" class="form-control input-lg"
                                           placeholder="Enter your email" required>
                 </div>
              <div class="form-group">
                                    <input type="password" class="form-control"
                                           id="exampleInputPassword1"


                                           name="password"  placeholder="Enter your Password"  required = "true"
                                           pattern=".{5,}">
                </div>


  		<div class ="form-group">
  		 <input type="text" name="address" class="form-control input-lg" placeholder="Enter your address">
  		</div>

  		<div class ="form-group">
  		 <input type="text" name="contact" class="form-control input-lg" placeholder="Enter your mobile number">
  		</div>
              <button type="submit" class="btn btn-primary"><h5>Submit</h5></button>
</form>


  </div>
 </div>
 </div>

      <?php

require 'includes/footer.php';
      ?>

    </body>
</html>
