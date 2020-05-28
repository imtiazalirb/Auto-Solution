<?php
session_start();
if(isset($_SESSION['type']))
{
	if($_SESSION['type'] != 'employee')
	{
		if($_SESSION['type'] == 'user')
		{
			header('location:../views/user_dashboard.php');
		}
		if($_SESSION['type'] == 'admin')
		{
			header('location:../views/admin_dashboard.php');
		}
	}
}
else
{
  header('location:../views/index.php');
}
?>
<?php
require_once ("../controllers/service_request_controller.php");
$rows = getAllUnderService();
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
          <li class="nav-item active">
            <a class="nav-link" href="user_service_car.php">My Service History</a>
          </li>
        </ul>

      <!--LOGOUT BUTTON-->

      <h5 class="my-sm-2 mr-lg-2">Welcome, <?php echo $_SESSION['username'];?></h5>

      <a class="btn btn-danger my-sm-2 ml-lg-2 "href="../controllers/logout.php">Logout</a>
     </div>
    </nav>
  </div>
</header>

<!--TABLE-->

<div class="container">
<div class = "btn-group col-md-12 " style="align-center;">


<a class="btn btn-outline-info active" href="employee_service_requests.php">Service Awaiting</a>
<a class="btn btn-outline-info" href="employee_service_history.php">My servicing History</a>

	 </div>
	</div>


<div class="table-responsive">
<table class="table table-sm table-striped my-3" id="service_request_data">
    <thead>
      <tr>
        <th>Car Detail</th>
        <th>Body Type</th>
        <th>Year</th>
        <th>Color</th>
        <th>Drivetrain</th>
        <th>Engine type</th>
        <th>Fuel Type</th>
        <th>Engine No</th>
        <th>Service Needed</th>
        <th>Message</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
   <?php
       foreach($rows as $row)
       {
         echo "<tr>";
           echo "<td>".$row["car_detail"]."</th>";
           echo "<td>".$row["body_type"]."</td>";
           echo "<td>".$row["year"]."</td>";
           echo "<td>".$row["color"]."</td>";
           echo "<td>".$row["drivetrain"]."</td>";
           echo "<td>".$row["engine_type"]."</td>";
           echo "<td>".$row["fuel_type"]."</td>";
           echo "<td>".$row["engine_no"]."</td>";
           echo "<td>".$row["service_needed"]."</td>";
           echo "<td>".$row["message"]."</td>"; ?>
           <td><a class="btn btn-info btn-sm" name="service_confirm" href="employee_service_confirm.php?service_request_id=<?php echo $row['service_request_id'];?>">Confirm service</a></td>
       <?php
       	echo "</tr>";
       }
     ?>
   </tbody>
  </table>
</div>

<div style="margin-top:50px"></div>
<script src="../js/jquery-slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
