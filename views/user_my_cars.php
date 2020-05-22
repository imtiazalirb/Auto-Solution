<?php
session_start();
if(isset($_SESSION['type']))
{
	if($_SESSION['type'] != 'user')
	{
		if($_SESSION['type'] == 'employee')
		{
			header('location:../views/employee_dashboard.php');
		}
		if($_SESSION['type'] == 'admin')
		{
			header('location:../views/admin_dashboard.php');
		}
	}
}
else
{
  header('location: ../views/index.php');
}
?>
<?php
require_once ("../controllers/car_controller.php");
$cars = getCar();
 ?>
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
<style>
.card{
	border:1px solid black;
	width:300px;
	height:50px;
	margin-left:10px;
	margin-right:10px;
	margin-top:10px;
	border-radius: 5px;
	text-align: center;
	background-color:black;
	padding:5px
}

.card-car{
	border:1px solid;
	width:200px;
	height:280px;
	margin-left:10px;
	margin-right:10px;
	margin-top:10px;
	border-radius: 5px;
	text-align: center;
	padding:5px;
}

.card-image{
	display: block;
margin-left: auto;
margin-right: auto;
width: 168px;
height: 200px;
	border-radius: 5px;
	object-fit: cover;
}
.card-text{
	text-align: bottom;

}

</style>
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
          <li class="nav-item active">
            <a class="nav-link" href="user_dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
          </li>
					<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Manage Cars
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="user_add_car.php">Add Cars</a>
              <a class="dropdown-item" href="user_my_cars.php">My Cars</a>
              <a class="dropdown-item" href="#">Manage Cars</a>
            </div>
          </li>
          <li cl
          <li class="nav-item">
            <a class="nav-link" href="user_service_history.php">Service History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user_profile.php">My Profile</a>
          </li>
        </ul>

        <!--LOGOUT BUTTON-->

        <h5 class="my-sm-2 mr-lg-2">Welcome, <?php echo $_SESSION['username'];?></h5>

        <a class="btn btn-danger my-sm-2 ml-lg-2 "href="../controllers/logout.php">Logout</a>
       </div>
      </nav>
    </div>
  </header>


	<h3 class="display-5 text-center my-4">My Cars</h3>
<div class="container">
	<div class=" card-deck col-md-12 justify-content-center">
		<?php
			foreach($cars as $car)
			{
		?>
		<div class="card-car col-md-2  ">

						<img class="card-image" src="<?php echo $car["image"];?>"></img>
						<span class="align-bottom"> <?php echo $car["car_make"];?></span>
					<span class="align-bottom"><?php echo $car["car_model"];?></span>
					<span class="align-bottom"><?php echo $car["trim"];?></span>
					<div class="text">	<?php echo $car["registration_no"];?>
					</div>
			</div>
<?php
			}
		?>

	</div>
</div>

<div style="margin-top:50px"></div>
<script src="../js/jquery-slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>
</html>
