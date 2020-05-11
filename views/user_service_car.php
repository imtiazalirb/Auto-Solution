<!DOCTYPE html>
<?php
include "../controllers/session.php";
 ?>
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
      <a class="navbar-brand mb-2" href="user_dashboard.php">Auto Solution</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="user_dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user_cars.php">My Cars</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="user_service_car.php">Service Car</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user_service_history.php">Service History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user_profile.php">My Profile</a>
          </li>
        </ul>

      <!--LOGOUT BUTTON-->

      <h5 class="my-sm-2 mr-lg-2">Welcome, <?php echo $username;  ?></h5>

      <button class="btn btn-danger my-sm-2 ml-lg-2" data-toggle="modal" data-target="">Logout</button>
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
