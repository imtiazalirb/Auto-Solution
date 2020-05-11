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
          <li class="nav-item">
            <a class="nav-link" href="admin_employee_management.php">Employees Management</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_customer_management.php">Customer Management</a>
          </li>
        </ul>

      <!--LOGOUT BUTTON-->

      <button class="btn btn-danger my-sm-2 ml-lg-2" data-toggle="modal" data-target="">Logout</button>
     </div>
    </nav>
  </div>
</header>

<!--SIGNUP FORM-->
<?php
include '../controllers/employee_signup_controller.php';
?>

<h3 class="display-5 text-center my-4">Employee Registration Form</h3>
<div class="container">

  <form class="needs-validation" method="post" action="../controllers/employee_signup_controller.php" enctype="multipart/form-data" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">First name</label>
      <input type="text" name="first_name" class="form-control" id="validationCustom01" placeholder="First name" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Last name</label>
      <input type="text" name="last_name" class="form-control" id="validationCustom02" placeholder="Last name" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>

  <div class="form-row ">
   <div class="col-md-4 mb-3">
    <label for="validationCustom03">Birth date</label>
    <input type="text" name="date" class="form-control" id="date"  placeholder="YYYY-DD-MM" required>
    <div class="invalid-feedback">
      Please provide birth date.
    </div>
   </div>
   <div class="col-md-4 mb-3">
       <label for="validationCustom04">Gender</label>
       <select name="gender" class="custom-select" id="validationCustom04" required>
         <option selected disabled value="">Choose</option>
         <option>Male</option>
         <option>Female</option>
         <option>Other</option>
       </select>
       <div class="invalid-feedback">
         Please select a valid state.
       </div>
     </div>
  </div>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Email</label>
      <input type="email" name="email" class="form-control" id="validationCustom01" placeholder="Email" required>
      <small id="phonedHelpInline" class="text-muted">
        Ex: abc@example.com
      </small>
      <div class="invalid-feedback">
        PLease provide a valid email
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Phone Number</label>
      <input type="tel" name="phone" class="form-control" id="validationCustom02" placeholder="Phne Number" pattern="[/+][0-9]{13,}" required>
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
      <input type="number" name="salary" class="form-control" id="validationCustom01" placeholder="Salary" required>
      <div class="invalid-feedback">
        PLease provide a valid salary
      </div>
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationCustom04">Designation</label>
        <select name="designation" class="custom-select" id="validationCustom04" required>
          <option selected disabled value="">Choose</option>
          <option>Manager</option>
          <option>Service Engineer</option>
          <option>Mechanic</option>
          <option>Other</option>
        </select>
        <div class="invalid-feedback">
          Please select a valid state.
        </div>
      </div>
  </div>


  <div class="form-row">
    <div class="col-md-10 mb-3">
      <label for="validationCustom03">Street Address</label>
      <input type="text" name="street" class="form-control" id="validationCustom03" placeholder="Street Address" required>
      <div class="invalid-feedback">
        Please provide a valid street address.
      </div>
    </div>
  </div>


  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom03">City</label>
      <input type="text" name="city" class="form-control" id="validationCustom03" placeholder="City" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom03">State</label>
      <input type="text" name="state" class="form-control" id="validationCustom03" placeholder="State" required>
      <div class="invalid-feedback">
        Please provide a valid State.
      </div>
    </div>
    <div class="col-md-2 mb-3">
      <label for="validationCustom05">Zip</label>
      <input type="text" name="zip" class="form-control" id="validationCustom05" placeholder="Zip" pattern="[0-9]{3,}" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom05">Username</label>
      <input type="text" name="username" class="form-control" id="validationCustom05" placeholder="Username" required>
      <div class="invalid-feedback">
        Please provide a valid username.
      </div>
    </div>
    <div class="col-md-4 mb-3">
   <label for="inputPassword6">Password</label>
   <input type="password" name="password" id="inputPassword6" class="form-control" placeholder="Password" aria-describedby="passwordHelpInline" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
   <small id="passwordHelpInline" class="text-muted">
     Must be 8-20 characters long and contain one upprecase.
   </small>
 </div>
  </div>


  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" name="add_employee_detail" type="submit">Submit</button>
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
