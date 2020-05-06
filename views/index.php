<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="styles/mystyle.css">
  <title>Auto Service</title>
</head>
<body>
  <header>
    <div class="mynav">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand mb-2" href="../index.php">Auto Solution</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Our Services
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Car Service</a>
              <a class="dropdown-item" href="#">Dent Paint</a>
              <a class="dropdown-item" href="#">Cleaning</a>
              <a class="dropdown-item" href="#">Wheel Care</a>
              <a class="dropdown-item" href="#">AC Service</a>
              <a class="dropdown-item" href="#">Nano Coating</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Request a quote</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="request_quote.php">Request a quote</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="our_products.php">Our Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact_us.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about_us.php">About Us</a>
          </li>
        </ul>

        <div class="nav-form">
          <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>

      <!--MODALS LOGIN-->

      <button class="btn btn-success my-sm-2 ml-lg-2" data-toggle="modal" data-target="#loginModal">Login</button>

      <div class="modal fade" id="loginModal">
        <div class="modal-dialog modal-dialog-centered-sm modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">User Login</h5>
              <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form action="../controllers/login_controller.php" method="post">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input class="form-control" name="username" type="text" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input class="form-control" name="password" type="password"  placeholder="Password">

                  <?php
                      if(@$_GET['Empty']==true)
                      {
                  ?>
                      <div class="alert-light text-danger text-center py-3" ><?php echo $_GET['Empty'] ?></div>
                  <?php
                      }
                  ?>

                  <?php
                      if(@$_GET['Invalid']==true)
                      {
                  ?>
                      <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>
                  <?php
                      }
                  ?>

                </div>

                <div class="modal-footer justify-content-center">
                  <a class="btn btn-warning" href="signup.php" role="button">Sign Up</a>
                  <button class="btn btn-success" name="signin" type="submit">Login</button>
                <!--  <button class="btn btn-danger" data-dismiss="modal">Close</button> -->
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
     </div>
    </nav>
  </div>
</header>



<!--CAROUSEL-->

      <div id="slider1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li class="active" data-target="#slider1" data-slide-to="0"></li>
          <li data-target="#slider1" data-slide-to="1"></li>
          <li data-target="#slider1" data-slide-to="2"></li>
          <li data-target="#slider1" data-slide-to="3"></li>
          <li data-target="#slider1" data-slide-to="4"></li>
          <li data-target="#slider1" data-slide-to="5"></li>
          <li data-target="#slider1" data-slide-to="6"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/1.JPG" class="d-block img-fluid align-center" alt="First Slide">
            <div class="carousel-caption">
              <h3>Engine & Gearbox Repair</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/2.JPG" class="d-block img-fluid" alt="Second Slide">
            <div class="carousel-caption">
              <h3>Regular Maintence</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/3.JPG" class="d-block img-fluid" alt="Third Slide">
            <div class="carousel-caption">
              <h3 class="text-light">AC Service & Refrigerant Refill</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/4.JPG" class="d-block img-fluid" alt="Fourth Slide">
            <div class="carousel-caption">
              <h3>Brake Caliper & Piston Replacement</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/5.JPG" class="d-block img-fluid" alt="Fifth Slide">
            <div class="carousel-caption">
              <h3>Dent & Paint</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/6.JPG" class="d-block img-fluid" alt="Sixth Slide">
            <div class="carousel-caption">
              <h3>Cleaning & Detailing</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/7.JPG" class="d-block img-fluid" alt="Seventh Slide">
            <div class="carousel-caption">
              <h3>Wheel alignment</h3>
            </div>
          </div>
        </div>
        <a href="#slider1" class="carousel-control-prev" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider1" class="carousel-control-next" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>

      <!--GRID-->

      <div class="container">
        <h4 class="display-4 text-center mt-4">Our Services</h4>
        <p class="lead text-center mt-2">Get Best Car Services</p>
        <br>
        <div class="row">
        <div class="col-4">
          <div class="media">
          <img class="d-flex mr-3 align-self-start" src="../img/icon/service.png" alt="">
          <div class="media-body">
            <h5>CAR SERVICE</h5>
            <p class="lead">Affordable car service near you at the best car service centers by experienced mechanics using genuine OEM parts & manufacturer recommended guidelines</p>
          </div>
        </div>
        </div>
        <div class="col-4">
          <div class="media">
          <img class="d-flex mr-3 align-self-start" src="../img/icon/ac.png" alt="">
          <div class="media-body">
            <h5>AC REPAIR & SERVICE</h5>
            <p class="lead">Keep your car’s ac in a perfect condition. Our ac service packages includes ac gas refilling, blower cleaning, cooling coil cleaning, Condenser cleaning & much more</p>
          </div>
        </div>
        </div>
        <div class="col-4">
          <div class="media">
          <img class="d-flex mr-3 align-self-start" src="../img/icon/clean.png" alt="">
          <div class="media-body">
            <h5>CAR CLEANING</h5>
            <p class="lead">Choose from variety of car cleaning services such as Car Wash, Rubbing Polishing, Car Dry Clean & Teflon Coating, so your car shines like brand new</p>
          </div>
        </div>
        </div>
        <div class="col-4">
          <div class="media">
          <img class="d-flex mr-3 align-self-start" src="../img/icon/paint.png" alt="">
          <div class="media-body">
            <h5>DENTING & PAINTING</h5>
            <p class="lead">Never worry about car dents & scratches. Our car repair workshops are equipped with state of the art paint booths & best in class tools for dent paint services</p>
          </div>
        </div>
        </div>
        <div class="col">
          <div class="media">
          <img class="d-flex mr-3 align-self-start" src="../img/icon/repair.png" alt="">
          <div class="media-body">
            <h5>CAR REPAIRS</h5>
            <p class="lead">Brakes, Suspension, transmission, clutch or engine repair. Gaadizo provides repair services for every mechanical, electrical or technical issues of your car</p>
          </div>
        </div>
        </div>
        <div class="col order-1">
          <div class="media">
          <img class="d-flex mr-3 align-self-start" src="../img/icon/tire.png" alt="">
          <div class="media-body">
            <h5>WHEEL CARE</h5>
            <p class="lead">Whether you need new tyres or wheel alignment & balancing, we provide everything. Increase the life of car's tyres with our wheel care packages</p>
          </div>
        </div>
      </div>


      </div>

  <div style="margin-top:50px"></div>
  <script src="../js/jquery-slim.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

  <script>
    $('.carousel').carousel({
      interval : 3000,
    //  pause: 'hover',
      wrap: true,
      keyboard: true;
    })
  </script>

</body>
</html>
