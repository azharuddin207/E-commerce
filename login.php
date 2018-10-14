<?php
include 'includes/common.php';
#echo $_SESSION['color'];
echo '<center>';
if(isset($_SESSION['error'])){
  echo '<p style="color:red">'.$_SESSION['error'].'</p>';
}
echo ' </center>';
?>


<!DOCTYPE html>
<html>
    <head>
        <title>login page</title>
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



         <style>



    .wrapper {
    font-size: 14px;
    font-family: sans-serif;
    margin-left: 10px;
    }
    .important_text {
    font-size: 16px;
    font-weight: bold;
    }

    .container-decor{
        background-color:#000;
    }

    .column_style{
        border:1px solid #000;
    }
    img-responsive{
        display:block;
        max-width:100%;
        height:auto;

    }







    </style>
    </head>
    <body>


       <?php
       require 'includes/header.php';
       ?>


        <div class="container">
            <div class="row">
            <div class="col-xs-4 col-xs-offset-4 sign">
             <div class="panel panel-primary">

            <div class="panel-heading"><h4>LOGIN</h4></div>
          <div class="panel-body">  <p class="text-warning">login to make a purchase</p>



      <form method="POST" action="login_submit.php">



  <div class="form-group">

    <input type="email" class="form-control" id="exampleInputEmail1"
           placeholder="Email" name='email'>
  </div>


  <div class="form-group">
      <input type="password" class="form-control" id="exampleInputPassword1"
           placeholder="Password" name='password'>
  </div>

    <button type="submit" class="btn btn-primary btn-md"> <h5> Login</h5> </button>




</form>




      </div>
   <div class="panel-footer">don't have an account?

                  <a href="signup.php"> Register</a>
    </div>


           </div>
                     </div>


                </div>









         <?php
    require 'includes/footer.php';

    ?>



    </body>
</html>
