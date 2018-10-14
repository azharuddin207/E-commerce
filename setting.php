<?php
 require 'includes/common.php';?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>setting page</title>


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
    </head>
    <body>


      <?php
      require 'header.php';
      ?>









        <div class="container sign">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">



                    <h3>Change Password</h3>
                    <form method="GET" action="setting_script.php">

  <div class="form-group">
      <input type="password" class="form-control" id="exampleInputPassword1" name="currentpassword"
           placeholder="Old Password">
  </div>


  <div class="form-group">
      <input type="password" class="form-control" id="exampleInputPassword1" name="newpassword"
           placeholder="New Password">
  </div>



  <div class="form-group">
      <input type="password" class="form-control" id="exampleInputPassword1" name="confirmpassword"
           placeholder="Re-type New Password">
  </div>







        <div>
             <button type="submit" class="btn btn-primary btn-md"> <h5>Change</h5> </button>
	</div>

         </form>

</div>
</div>
</div>














         <?php
 require 'includes/footer.php';?>        








    </body>




</html>
