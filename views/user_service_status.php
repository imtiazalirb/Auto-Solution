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
require_once ("../controllers/service_request_controller.php");
$servicerequests = getServiceRequests();
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
					<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Manage Cars
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="user_add_car.php">Add Cars</a>
              <a class="dropdown-item" href="user_my_cars.php">My Cars</a>
              <a class="dropdown-item" href="user_manage_car.php">Manage Cars</a>
            </div>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Servicing
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="user_service_status.php">Service Request Status</a>
              <a class="dropdown-item" href="user_service_record.php">Servicing Record</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user_profile.php">My Profile</a>
          </li>
        </ul>

      <!--LOGOUT BUTTON-->

      <h5 class="my-sm-2 mr-lg-2">Welcome, <?php echo $_SESSION['username'];?></h5>

      <a class="btn btn-danger my-sm-2 ml-lg-2 "href="../controllers/logout.php">Logout</a>
     </div>
	 </nav><br>
<div class="container">
<div class = "btn-group col-md-12 " style="align-center;">

<a class="btn btn-outline-info active" href="user_service_status.php">Requested Service</a>
<a class="btn btn-outline-info" href="user_service_ongoing.php">Service Ongoing</a>
<a class="btn btn-outline-info" href="user_service_ongoing.php">Serviced</a>

		</div>
  </div>
	</div>

<!--TABLE-->
<div class="container">
<div class="table-responsive">
<table class="table  table-hover table-striped table-sm  my-3" id="service_request_data">
    <thead>
      <tr>
        <th>Car</th>
				<th>Drivetrain</th>
				<th>Fuel Type</th>
				<th>Registration Number</th>
				<th>Service Needed</th>
				<th>Message</th>
				<th>Service Requested</th>
				<th>Last Serviced</th>
				<th>Last Serviced ODO Reading</th>
      </tr>
    </thead>
		<tbody>
		<?php
				foreach($servicerequests as $servicerequest)
				{
					echo "<tr>";
						echo "<td>".$servicerequest["car_detail"]."</td>";
						echo "<td>".$servicerequest["engine_type"]." ".$servicerequest["drivetrain"]."</td>";
						echo "<td>".$servicerequest["engine_no"]."</td>";
						echo "<td>".$servicerequest["registration_no"]."</td>";
						echo "<td>".$servicerequest["service_needed"]."</td>";
						echo "<td>".$servicerequest["message"]."</td>";
						echo "<td>".$servicerequest["request_service_date"]."</td>";
						echo "<td>".$servicerequest["last_serviced_date"]."</td>";
						echo "<td>".$servicerequest["last_serviced_odo"]."</td>";
					echo "</tr>";
				}
			?>
			</tbody>

</table>
</div>
</div>

<div style="margin-top:50px"></div>
<script src="../js/jquery-slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>
</html>
