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
require '../controllers/employee_signup_controller.php';
$employees = getAllEmployees();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
 	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
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
          <li class="nav-item">
            <a class="nav-link" href="admin_quotation_management.php">Quotation Requests</a>
          </li>
					<li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Employee Management
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="admin_all_employee.php">All Employee</a>
              <a class="dropdown-item" href="employee_signup.php">Assign Employee</a>
              <a class="dropdown-item" href="admin_edit_employee.php">Edit Employee Detail</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_all_userview.php">Customer Management</a>
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
<table class="table table-striped my-3" id="employee_data">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Birthdate</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Designation</th>
        <th>Salary</th>
        <th>Street</th>
        <th>City</th>
        <th>State</th>
				<th>Zip</th>
        <th>Username</th>
      </tr>
    </thead>
		<?php
				foreach($employees as $employee)
				{
					echo "<tr>";
						echo "<th>".$employee["id"]."</th>";
						echo "<th>".$employee["first_name"]." ".$employee["last_name"]."</th>";
						echo "<th>".$employee["birth_date"]."</th>";
						echo "<th>".$employee["gender"]."</th>";
						echo "<th>".$employee["email"]."</th>";
						echo "<th>".$employee["phone"]."</th>";
						echo "<th>".$employee["designation"]."</th>";
						echo "<th>".$employee["salary"]."</th>";
						echo "<th>".$employee["street"]."</th>";
						echo "<th>".$employee["city"]."</th>";
						echo "<th>".$employee["state"]."</th>";
						echo "<th>".$employee["zip"]."</th>";
						echo "<th>".$employee["username"]."</th>";
					echo "</tr>";
				}
			?>
  </table>

<div style="margin-top:50px"></div>
<script src="../js/jquery-slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
		 $('#employee_data').DataTable();
});
</script>
</body>
</html>
