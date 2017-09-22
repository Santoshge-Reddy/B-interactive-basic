<?php
  include('include/header.php');
?>

        <div id="carousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
              </ol>


              <div class="carousel-inner" id="carousel-size">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="image/slideshow/slideshow1.jpg" height="500px" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h3>Developer</h3>
                    <p>...</p>
                  </div>
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="image/slideshow/slideshow2.jpg" height="500px" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h3>Tester</h3>
                    <p>...</p>
                  </div>
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="image/slideshow/slideshow3.jpg"  height="500px" alt="Third slide">
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
      <img src="image/svg/development.svg" id="development" alt="Development" width="304" height="236" class="img-thumbnail">
      <h3>Development</h3>
      <p>We are having a good professional development team on our side to </p>
      </a>
    </section>
    <section class="col-sm-6 col-lg-3">
      <a href="#" class="Designing">
      <img src="image/svg/design.svg" id="design" alt="Designing" width="304" height="236" class="img-thumbnail">
      <h3>Designing</h3>
      <p>We have teamed up with best Designers with good experiance over years</p>
      </a>
    </section>
    <section class="col-sm-6 col-lg-3">
      <a href="#" class="Backend Support">
      <img src="image/svg/backendsupport.svg" id="backend"alt="Backend Support" width="304" height="236" class="img-thumbnail">
      <h3>Backend Support</h3>
      <p>Providing a back end support is a peice of cake for our team</p>
      </a>
    </section>
    <section class="col-sm-6 col-lg-3">
      <a href="#" class="Testing">
      <img src="image/svg/testing.svg" id="testing" alt="Testing"  width="304" height="236" class="img-thumbnail">
      <h3>Testing</h3>
      <p>we have best testing team you have ever seen to assist you</p>
      </a>
    </section>

  </div>
</div>




<?php
  include('include/footer.php');
?>
