<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="styles/mystyle.css">
  <title>Document</title>
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
          <li class="nav-item">
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
          <li class="nav-item  active">
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
              <form>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input class="form-control" type="text" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input class="form-control" type="password" placeholder="Password">
                </div>
              </form>
            </div>
            <div class="modal-footer justify-content-center">
              <a class="btn btn-warning" href="signup.php" role="button">Sign Up</a>
              <button class="btn btn-success">Login</button>
            <!--  <button class="btn btn-danger" data-dismiss="modal">Close</button> -->
            </div>
          </div>
        </div>
      </div>
     </div>
    </nav>
  </div>
</header>



<div style="margin-top:50px"></div>
<script src="../js/jquery-slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
