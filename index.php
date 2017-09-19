
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Binteractive Co.</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
	  <script src="https://use.fontawesome.com/815eddff59.js"></script>  <!-- icons -->
                                                                        <!-- fonts -->
    <link rel="icon" type="image/png" href="images/favicon.png">        <!-- logo -->
  </head>
  <body>
    <header>

      <!-- header -->

        <nav class="navbar fixed">
          <span class="navbar-text">
          <i class="fa fa-phone" aria-hidden="true"> </i> +1 111 222 3333
          </span>


          <div class="social-icon">
            <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="social-button skype"><i class="fa fa-skype"></i></a>
          </div>


        </nav>



        <div id="carousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
              </ol>


              <div class="carousel-inner" id="carousel-size">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="images/pexels-photo-186076.jpeg" height="500px" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h3>Developer</h3>
                    <p>...</p>
                  </div>
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="images/lamborghini-brno-racing-car-automobiles-39501.jpeg" height="500px" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h3>Tester</h3>
                    <p>...</p>
                  </div>
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="images/light-car-inside-black.jpg"  height="500px" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h3>Designer</h3>
                    <p>...</p>
                  </div>
                </div>
              </div>

              <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>

        <?php
          include('include/navbar.php');
        ?>

	  </header>


<div class="services container">
  <div class="row">

    <section class="col-sm-6 col-lg-3">
      <a href="#" class="Development">
      <img src="images/download.svg" alt="Development" width="304" height="236" class="img-thumbnail">
      <h3>Development</h3>
      <p>We are having a good professional development team on our side to </p>
      </a>
    </section>
    <section class="col-sm-6 col-lg-3">
      <a href="#" class="Designing">
      <img src="images/download.svg" alt="Designing" width="304" height="236" class="img-thumbnail">
      <h3>Designing</h3>
      <p>We have teamed up with best Designers with good experiance over years</p>
      </a>
    </section>
    <section class="col-sm-6 col-lg-3">
      <a href="#" class="Backend Support">
      <img src="images/download.svg" alt="Backend Support" width="304" height="236" class="img-thumbnail">
      <h3>Backend Support</h3>
      <p>Providing a back end support is a peice of cake for our team</p>
      </a>
    </section>
    <section class="col-sm-6 col-lg-3">
      <a href="#" class="Testing">
      <img src="images/download.svg" alt="Testing"  width="304" height="236" class="img-thumbnail">
      <h3>Testing</h3>
      <p>we have best testing team you have ever seen to assist you</p>
      </a>
    </section>

  </div>
</div>




<?php
  include('include/footer.php');
?>
