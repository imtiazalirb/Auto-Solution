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
            <a class="nav-link" href="user_dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user_cars.php">My Cars</a>
          </li>
          <li class="nav-item">
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

      <h5 class="my-sm-2 mr-lg-2">Welcome, <?php echo $_SESSION['username'];?></h5>

      <a class="btn btn-danger my-sm-2 ml-lg-2 "href="../controllers/logout.php">Logout</a>
     </div>
    </nav>
  </div>
</header>

<div style="margin-top:50px"></div>
<script src="../js/jquery-slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<!--SIGNUP FORM-->
<?php
include '../controllers/employee_signup_controller.php';
?>

<h3 class="display-5 text-center my-4">Add your car</h3>
<div class="container">

  <form class="needs-validation" method="post" action="../controllers/employee_signup_controller.php" enctype="multipart/form-data" novalidate>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Brand</label>
      <input type="text" name="first_name" class="form-control" id="validationCustom01" placeholder="Brand" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Model</label>
      <input type="text" name="last_name" class="form-control" id="validationCustom02" placeholder="Model" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>

  <div class="form-row ">
    <div class="col-md-4 mb-3">
      <label for="validationCustom3">Engine Number</label>
      <input type="text" name="last_name" class="form-control" id="validationCustom02" placeholder="Engine Number" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom4">Chassis Number</label>
      <input type="text" name="last_name" class="form-control" id="validationCustom02" placeholder="Chassis Number" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>

  <div class="form-row ">
    <div class="col-md-4 mb-3">
      <label for="validationCustom3">Color</label>
      <input type="text" name="last_name" class="form-control" id="validationCustom02" placeholder="Color" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Registration Number</label>
      <input type="tel" name="phone" class="form-control" id="validationCustom02" placeholder="Registration Number" required>
      <small id="phonedHelpInline" class="text-muted">
        Ex: DHAKA METRO KH-XX-XXXX
      </small>
      <div class="invalid-feedback">
        Please provide a valid phone number
      </div>
    </div>
  </div>


  <button class="btn btn-primary" name="add_employee_detail" type="submit">Add</button>
  <a class="btn btn-danger" href="../views/admin_dashboard.php" role="button">Cancel</a>
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
  <script>
  $(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
      startDate: "1900-01-01",
      endDate: "2020-12-31",
		})
	})
  </script>

</body>
</html>
