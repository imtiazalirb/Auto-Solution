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
include '../controllers/employee_signup_controller.php';
$eid = $_GET["id"];
$employee=getEmployee($eid);
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

 <!--EDIT FORM-->


 <h3 class="display-5 text-center my-4">Employee Information</h3>
 <div class="container">

   <form class="needs-validation" method="post" action="../controllers/employee_signup_controller.php" enctype="multipart/form-data" novalidate>
   <div class="form-row">
     <div class="col-md-4 mb-3">
       <fieldset disabled>
       <label for="validationCustom01">First name</label>
       <input type="text" name="first_name" value="<?php echo $employee["first_name"]?>" class="form-control" id="validationCustom01" placeholder="First name" required>
       <div class="valid-feedback">
         Looks good!
       </div>
     </div>
     <div class="col-md-4 mb-3">
       <fieldset disabled>
       <label for="validationCustom02">Last name</label>
       <input type="text" name="last_name" value="<?php echo $employee["last_name"]?>" class="form-control" id="validationCustom02" placeholder="Last name" required>
       <div class="valid-feedback">
         Looks good!
       </div>
     </div>
   </div>

   <div class="form-row">
     <div class="col-md-4 mb-3">
       <label for="validationCustom01">Email</label>
       <input type="email" name="email" value="<?php echo $employee["email"]?>" class="form-control" id="validationCustom01" placeholder="Email" required>
       <small id="phonedHelpInline" class="text-muted">
         Ex: abc@example.com
       </small>
       <div class="invalid-feedback">
         PLease provide a valid email
       </div>
     </div>
     <div class="col-md-4 mb-3">
       <label for="validationCustom02">Phone Number</label>
       <input type="tel" name="phone" value="<?php echo $employee["phone"]?>" class="form-control" id="validationCustom02" placeholder="Phne Number" pattern="[/+][0-9]{13,}" required>
       <small id="phonedHelpInline" class="text-muted">
         Ex: +8801710000000
       </small>
       <div class="invalid-feedback">
         Please provide a valid phone number
       </div>
     </div>
   </div>

   <div class="form-row">
     <div class="col-md-4 mb-3">
       <label for="validationCustom01">Salary</label>
       <input type="number" value="<?php echo $employee["salary"]?>" name="salary" class="form-control" id="validationCustom01" placeholder="Salary" required>
       <div class="invalid-feedback">
         PLease provide a valid salary
       </div>
     </div>
   </div>


   <div class="form-row">
     <div class="col-md-10 mb-3">
       <label for="validationCustom03">Street Address</label>
       <input type="text" value="<?php echo $employee["street"]?>" name="street" class="form-control" id="validationCustom03" placeholder="Street Address" required>
       <div class="invalid-feedback">
         Please provide a valid street address.
       </div>
     </div>
   </div>


   <div class="form-row">
     <div class="col-md-4 mb-3">
       <label for="validationCustom03">City</label>
       <input type="text" name="city" value="<?php echo $employee["city"]?>" class="form-control" id="validationCustom03" placeholder="City" required>
       <div class="invalid-feedback">
         Please provide a valid city.
       </div>
     </div>
     <div class="col-md-4 mb-3">
       <label for="validationCustom03">State</label>
       <input type="text" value="<?php echo $employee["state"]?>" name="state" class="form-control" id="validationCustom03" placeholder="State" required>
       <div class="invalid-feedback">
         Please provide a valid State.
       </div>
     </div>
     <div class="col-md-2 mb-3">
       <label for="validationCustom05">Zip</label>
       <input type="text" name="zip" value="<?php echo $employee["zip"]?>" class="form-control" id="validationCustom05" placeholder="Zip" pattern="[0-9]{3,}" required>
       <div class="invalid-feedback">
         Please provide a valid zip.
       </div>
     </div>
   </div>
   <div class="form-row">
     <div class="col-md-4 mb-3">
       <fieldset disabled>
       <label for="validationCustom05">Username</label>
       <input type="text" name="username" value="<?php echo $employee["username"]?>" class="form-control" id="validationCustom05" placeholder="Username" required>
       <div class="invalid-feedback">
         Please provide a valid username.
       </div>
     </div>
   </div>
   <input type="hidden" name="id" value="<?php echo $employee["id"]?>" >


   <div class="form-group">
     <div class="form-check">
       <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
       <label class="form-check-label" for="invalidCheck">
         Confirm
       </label>
       <div class="invalid-feedback">
         You must agree before submitting.
       </div>
     </div>
   </div>
   <button class="btn btn-success" name="edit_employee_detail" type="submit">Save Changes</button>
	 <button class="btn btn-danger" name="delete_employee_detail" type="submit">Delete Employee</button>
   <a class="btn btn-warning" href="../views/admin_dashboard.php" role="button">Cancel</a>
 </form>

 <script>
 // Example starter JavaScript for disabling form submissions if there are invalid fields
 (function() {
   'use strict';
   window.addEventListener('load', function() {
     // Fetch all the forms we want to apply custom Bootstrap validation styles to
     var forms = document.getElementsByClassName('needs-validation');
     // Loop over them and prevent submission
     var validation = Array.prototype.filter.call(forms, function(form) {
       form.addEventListener('submit', function(event) {
         if (form.checkValidity() === false) {
           event.preventDefault();
           event.stopPropagation();
         }
         form.classList.add('was-validated');
       }, false);
     });
   }, false);
 })();
 </script>
 </div>
   <div style="margin-top:50px"></div>
   <script src="../js/jquery-slim.min.js"></script>
   <script src="../js/popper.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   <script src="../js/bootstrap-datepicker.min.js"></script>
   <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
 </body>
 </html>
