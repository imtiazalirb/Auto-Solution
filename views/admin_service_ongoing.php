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
	 </nav><br>

	 <div class="container">
	 <div class = "btn-group col-md-12 " style="align-center;">

	 <a class="btn btn-outline-info" href="admin_service_requests.php">Requested Service</a>
	 <a class="btn btn-outline-info active" href="admin_service_ongoing.php">Service Ongoing</a>
	 <a class="btn btn-outline-info" href="user_service_ongoing.php">Serviced</a>

	 		</div>
	   </div>

	 <!--TABLE-->
<div class="table-responsive">
	 <table class="table table-sm table-striped my-3" id="service_request_data">
	     <thead>
	       <tr>
					 <th>Request Id</th>
	         <th>Name</th>
	         <th>Username</th>
	         <th>Street</th>
	         <th>City</th>
	         <th>Zip</th>
	         <th>Phone</th>
	         <th>Email</th>
	         <th>Car Detail</th>
	         <th>Body Type</th>
	         <th>Year</th>
	         <th>Color</th>
					 <th>Drivetrain</th>
	         <th>Engine type</th>
					 <th>Fuel Type</th>
					 <th>Engine No</th>
					 <th>Reg No</th>
					 <th>Vin</th>
					 <th>Service Needed</th>
					 <th>Message</th>
					 <th>Request Date</th>
					 <th>Last Serviced Item</th>
					 <th>Last Servicing Date</th>
					 <th>Last Service Odo</th>
					 <th>Action</th>
	       </tr>
	     </thead>
			 <tbody>
	 		<?php
	 				foreach($rows as $row)
	 				{
	 					echo "<tr>";
	 						echo "<td>".$row["service_request_id"]."</td>";
	 						echo "<td>".$row["name"]."</td>";
	 						echo "<td>".$row["username"]."</td>";
	 						echo "<td>".$row["street"]."</td>";
	 						echo "<td>".$row["city"]."</td>";
	 						echo "<td>".$row["zip"]."</td>";
	 						echo "<td>".$row["phone"]."</td>";
	 						echo "<td>".$row["email"]."</td>";
	 						echo "<td>".$row["car_detail"]."</th>";
	 						echo "<td>".$row["body_type"]."</td>";
	 						echo "<td>".$row["year"]."</td>";
	 						echo "<td>".$row["color"]."</td>";
	 						echo "<td>".$row["drivetrain"]."</td>";
							echo "<td>".$row["engine_type"]."</td>";
							echo "<td>".$row["fuel_type"]."</td>";
							echo "<td>".$row["engine_no"]."</td>";
							echo "<td>".$row["registration_no"]."</td>";
							echo "<td>".$row["vin_no"]."</td>";
							echo "<td>".$row["service_needed"]."</td>";
							echo "<td>".$row["message"]."</td>";
							echo "<td>".$row["request_service_date"]."</td>";
							echo "<td>".$row["last_serviced_item"]."</td>";
							echo "<td>".$row["last_serviced_date"]."</td>";
							echo "<td>".$row["last_serviced_odo"]."</td>"; ?>
							<td><a class="btn btn-success" onclick="return confirm('Are you sure you want to confirm?');" name="approve" href="../controllers/service_request_controller.php?approve=<?php echo $row["service_request_id"];?>">Approve</a></td>
	 				<?php		echo "</tr>";
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
