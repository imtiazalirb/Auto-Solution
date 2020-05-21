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
require '../controllers/quote_controller.php';
$quotes = getAllQuote();
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
            <a class="nav-link" href="admin_dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin_quotation_management.php">Quotation Requests</a>
          </li>
					<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Employee Management
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="admin_all_employee.php">All Employee</a>
              <a class="dropdown-item" href="employee_signup.php">Assign Employee</a>
              <a class="dropdown-item" href="#">Edit Employee Detail</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_all_userview.php">Customer Management</a>
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

<!--TABLE-->

<table class="table table-striped my-3" id="quote_data">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Car Make</th>
        <th>Model</th>
        <th>Trim</th>
        <th>Year</th>
        <th>Reg</th>
        <th>Engine No</th>
				<th>Service Needed</th>
        <th>Message</th>
				<th>Selected Branch</th>
      </tr>
    </thead>
		<?php
				foreach($quotes as $quote)
				{
					echo "<tr>";
						echo "<th>".$quote["id"]."</th>";
						echo "<th>".$quote["first_name"]." ".$quote["last_name"]."</th>";
						echo "<th>".$quote["email"]."</th>";
						echo "<th>".$quote["phone"]."</th>";
						echo "<th>".$quote["car_make"]."</th>";
						echo "<th>".$quote["car_model"]."</th>";
						echo "<th>".$quote["trim"]."</th>";
						echo "<th>".$quote["year"]."</th>";
						echo "<th>".$quote["registration_no"]."</th>";
						echo "<th>".$quote["engine_no"]."</th>";
						echo "<th>".$quote["service_needed"]."</th>";
						echo "<th>".$quote["message"]."</th>";
						echo "<th>".$quote["branch"]."</th>";
					echo "</tr>";
				}
			?>
  </table>

<div style="margin-top:50px"></div>
<script src="../js/jquery-slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
