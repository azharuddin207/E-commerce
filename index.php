<?php
include 'includes/common.php';

if (isset($_SESSION['email'])) {
header('location: product.php');
}

?>



<!DOCTYPE html>
<html>
    <head>
        <title>index page</title>
          <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"
              type="text/css">

        <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"> </script>

        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
                      <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <link rel="stylesheet"
              type="text/css" href="style.css">

    </head>
    <body>

<?php
include 'includes/header.php';

?>





        <div class="container">
        <div id="banner_image">
                    <div class="container">


            <div id="banner_content">
                 <img src="img/intro-bg_1.jpg" alt="responsive image" width="100%" height="50%" >

              <div class="center">
           <a href="product.php">
                              <button class = "btn btn-danger
                              btn-lg active" >Shop Now  </button> </a>
                              </div>


            </div>
        </div>
         </div>
        </div>







        <div class="visible-lg">
        <div class=" container">

           <div class="row">
           <div class="col-sm-4">


                    <div class="thumbnail">

                        <a href="#" class="thumbnail">
                            <img src="img/shirt.jpg" alt="responsive image"></a>
                    <div class="caption">
                         <h3>shirts</h3>
                        <p>here best shirts available</p>

                    </div>
                    </div>
                     </div>







                <div class="col-sm-4">

                        <div class="thumbnail">
                     <a href="#" class="thumbnail">
                         <img src="img/watch.jpg" alt="responsive image"></a>

                   <div class="caption">
                         <h3>watch</h3>
                        <p>here best watch available</p>
                         </div>
                        </div>
                       </div>






                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="#" class="thumbnail"> <img src="img/camera.jpg" alt="responsive image"></a>

                    <div class="caption">
                         <h3>cameras</h3>
                        <p>here best cameras available</p>
                    </div>
                    </div>
                    </div>

        </div>
        </div>
        </div>









   <?php
    require_once 'includes/footer.php';

       ?>
</body>

</html>
