<?php
session_start();
if(isset($_SESSION['type']))
{
	if($_SESSION['type'] != 'admin')
	{
		if($_SESSION['type'] == 'user')
		{
			header('location:../views/user_dashboard.php');
		}
		if($_SESSION['type'] == 'employee')
		{
			header('location:../views/employee_dashboard.php');
		}
	}
}
else
{
  header('location:../views/index.php');
}
?>
<?php
require_once ('../controllers/employee_signup_controller.php');
	$employee=count(getAllEmployees());
 ?>
 <?php
 require_once ('../controllers/customer_signup_controller.php');
 	$customer=count(getAllUser());
  ?>
	<?php
	require_once ('../controllers/quote_controller.php');
		$quote=count(getAllQuote());
	 ?>
	 <?php
	 require_once ('../controllers/car_controller.php');
		 $cars=count(getAllCar());
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
          <li class="nav-item active">
            <a class="nav-link" href="admin_dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_quotation_management.php">Quotation Requests</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Employee Management
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="admin_all_employee.php">All Employee</a>
              <a class="dropdown-item" href="admin_employee_signup.php">Assign Employee</a>
              <a class="dropdown-item" href="admin_edit_employee.php">Edit Employee Detail</a>
            </div>
          </li>
					<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Customer Service Management
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="admin_all_userview.php">All User</a>
              <a class="dropdown-item" href="admin_service_requests.php">Service State</a>
            </div>
          </li>
					<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Product Management
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="admin_all_product.php">All Product</a>
              <a class="dropdown-item" href="admin_add_product.php">Add Product</a>
              <a class="dropdown-item" href="admin_edit_product.php">Edit Product Detail</a>
            </div>
          </li>
        </ul>

      <!--LOGOUT BUTTON-->

      <h5 class="my-sm-2 mr-lg-2">Welcome, <?php echo $_SESSION['username'];?></h5>

        <a class="btn btn-danger my-sm-2 ml-lg-2 "href="../controllers/logout.php">Logout</a>
     </div>
    </nav>
  </div>
</header>

<br>
<div class="container">
	<div class="card-deck col-md-12 justify-content-center">
  <div class="card border-primary col-md-2">
    <div class="card-body">
      <h4 class="card-title text-primary text-center">Total Employee</h4>
      <p class="text-center text-primary"><?php echo $employee;?></p>
			<a class="btn btn-outline-primary btn-block" href="admin_all_employee.php" role="button">See All Employees</a>
    </div>
  </div>
  <div class="card border-success col-md-2">
    <div class="card-body">
      <h4 class="card-title text-success text-center">Users</h4>
      <p class="text-center text-success"><?php echo $customer;?></p>
			<a class="btn btn-outline-success btn-block" href="admin_all_userview.php" role="button">See All Users</a>
    </div>
  </div>
	<div class="card border-secondary col-md-2">
    <div class="card-body">
      <h4 class="card-title text-secondary text-center">Quote Reqs</h4>
      <p class="text-center text-secondary"><?php echo $quote;?></p>
			<a class="btn btn-outline-success btn-block" href="admin_quotation_management.php" role="button">See All Quotes</a>
    </div>
  </div>

  <div class="card border-info col-md-2">
    <div class="card-body">
      <h4 class="card-title text-info text-center">Registerd Cars</h4>
      <p class="text-center text-info"><?php echo "$cars"; ?></p>
    </div>
  </div>
	<div class="card border-warning col-md-2">
		<div class="card-body">
			<h4 class="card-title text-warning text-center">Service Done</h4>
			<p class="text-center text-warning"></p>
		</div>
	</div>
</div>
</div>


<div style="margin-top:50px"></div>
<script src="../js/jquery-slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
