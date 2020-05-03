<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/bootstrap-datepicker.min.js">
  <link rel="stylesheet" href="styles/mystyle.css">
  <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
  <title>Sign Up</title>
</head>
<body>
  <header>
    <div class="mynav">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand mb-2" href="">Auto Solution</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link disabled" href="../index.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Our Services
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item disabled" href="#">Car Service</a>
              <a class="dropdown-item disabled" href="#">Dent Paint</a>
              <a class="dropdown-item disabled" href="#">Cleaning</a>
              <a class="dropdown-item disabled" href="#">Wheel Care</a>
              <a class="dropdown-item disabled" href="#">AC Service</a>
              <a class="dropdown-item disabled" href="#">Nano Coating</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item disabled" href="#">Request a quote</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="request_quote.php">Request a quote</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="our_products.php">Our Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="contact_us.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="about_us.php">About Us</a>
          </li>
        </ul>

        <div class="nav-form">
          <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
     </div>
    </nav>
  </div>
</heade

<!--SIGNUP FORM-->

<h3 class="display-5 text-center my-4">Membership Registration Form</h3>
<div class="container">

  <form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">First name</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="First name" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Last name</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>

  <div class="form-row ">
   <div class="col-md-4 mb-3">
    <label for="validationCustom03">Birth date</label>
    <input type="text" class="form-control" id="date" name="date" placeholder="DD/MM/YYYY" required>
    <div class="invalid-feedback">
      Please provide birth date.
    </div>
   </div>
   <div class="col-md-4 mb-3">
       <label for="validationCustom04">Gender</label>
       <select class="custom-select" id="validationCustom04" required>
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
      <input type="email" class="form-control" id="validationCustom01" placeholder="Email" required>
      <div class="invalid-feedback">
        PLease provide a email
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Phone Number</label>
      <input type="tel" class="form-control" id="validationCustom02" placeholder="+123456789000" pattern="[/+][0-9]{13,}" required>
      <div class="invalid-feedback">
        Please provide a phone number
      </div>
    </div>
  </div>


  <div class="form-row">
    <div class="col-md-10 mb-3">
      <label for="validationCustom03">Street Address</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Street Address" required>
      <div class="invalid-feedback">
        Please provide a valid street address.
      </div>
    </div>
  </div>


  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom03">City</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom03">State</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="State" required>
      <div class="invalid-feedback">
        Please provide a valid State.
      </div>
    </div>
    <div class="col-md-2 mb-3">
      <label for="validationCustom05">Zip</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" pattern="[0-9]{3,}" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom05">Username</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Username" pattern="[0-9]{3,}" required>
      <div class="invalid-feedback">
        Please provide a valid username.
      </div>
    </div>
    <div class="col-md-4 mb-3">
   <label for="inputPassword6">Password</label>
   <input type="password" id="inputPassword6" class="form-control" placeholder="Password" aria-describedby="passwordHelpInline" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
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
  <button class="btn btn-primary" type="submit">Submit</button>
  <a class="btn btn-danger" href="../index.php" role="button">Cancel</a>
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
			format: 'dd/mm/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
      startDate: "01/01/1900",
      endDate: "31/12/2020",
		})
	})
  </script>
</body>
</html>
