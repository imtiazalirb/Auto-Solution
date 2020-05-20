<?php
session_start();
if(isset($_SESSION['type']))
{
	if($_SESSION['type'] == 'user')
	{
		header('location:../views/user_dashboard.php');
	}
	if($_SESSION['type'] == 'employee')
	{
		header('location:../views/employee_dashboard.php');
	}
	if($_SESSION['type'] == 'admin')
	{
		header('location:../views/admin_dashboard.php');
	}
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
  <title>Request Quote</title>
</head>
<body>
  <header>
    <div class="mynav">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand mb-2" href="../index.php">Auto Solution</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Our Services
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Car Service</a>
              <a class="dropdown-item" href="#">Dent Paint</a>
              <a class="dropdown-item" href="#">Cleaning</a>
              <a class="dropdown-item" href="#">Wheel Care</a>
              <a class="dropdown-item" href="#">AC Service</a>
              <a class="dropdown-item" href="#">Nano Coating</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Request a quote</a>
            </div>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="request_quote.php">Request a quote</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="our_products.php">Our Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact_us.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about_us.php">About Us</a>
          </li>
        </ul>

        <div class="nav-form">
          <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>

      <!--MODALS LOGIN-->

      <button class="btn btn-success my-sm-2 ml-lg-2" data-toggle="modal" data-target="#loginModal">Login</button>

       <div class="modal fade" id="loginModal">
         <div class="modal-dialog modal-dialog-centered-sm modal-sm">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title">User Login</h5>
               <button class="close" data-dismiss="modal">&times;</button>
             </div>
             <div class="modal-body">
               <form action="../controllers/login_controller.php" method="post">
                 <div class="form-group">
                   <label for="username">Username</label>
                   <input class="form-control" name="username" type="text" placeholder="Username">
                 </div>
                 <div class="form-group">
                   <label for="password">Password</label>
                   <input class="form-control" name="password" type="password"  placeholder="Password">
                 </div>


                                     <?php
                                         if(@$_GET['Empty']==true)
                                         {
                                     ?>
                                         <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>
                                     <?php
                                         }
                                     ?>


                                     <?php
                                         if(@$_GET['Invalid']==true)
                                         {
                                     ?>
                                         <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>
                                     <?php
                                         }
                                     ?>



                 <div class="modal-footer justify-content-center">
                   <a class="btn btn-warning" href="customer_signup.php" role="button">Sign Up</a>
                   <button class="btn btn-success" name="login" type="submit">Login</button>
                 <!--  <button class="btn btn-danger" data-dismiss="modal">Close</button> -->
                 </div>
               </form>
             </div>
           </div>
         </div>
       </div>
     </div>
    </nav>
  </div>
</header>

<!--FORM-->

<?php
include '../controllers/quote_controller.php';
?>


<h3 class="display-5 text-center my-4">Quotation Form</h3>
<div class="container">

  <form class="needs-validation" method="post" action="../controllers/quote_controller.php" enctype="multipart/form-data" novalidate>
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
      <input type="tel" name="phone" class="form-control" id="validationCustom02" placeholder="Phone Number" pattern="[/+][0-9]{13,}" required>
      <small id="phonedHelpInline" class="text-muted">
        Ex: +8801710000000
      </small>
      <div class="invalid-feedback">
        Please provide a valid phone number
      </div>
    </div>
  </div>

	<div class="form-row ">
		<div class="col-md-4 mb-3">
        <label for="validationCustom04">Car Make</label>
        <select name="car_make" class="custom-select" id="validationCustom04" required>
          <option selected disabled value="">Car Make</option>
          <option>AUDI</option>
          <option>BMW</option>
          <option>Cadillac</option>
					<option>Chevrolet</option>
					<option>Citroën</option>
					<option>Daewoo</option>
					<option>Daihatsu</option>
					<option>Datsun</option>
					<option>Dodge</option>
					<option>Ferrari</option>
					<option>Fiat</option>
					<option>Ford</option>
					<option>Foton</option>
					<option>Honda</option>
					<option>Hyundai</option>
					<option>Infiniti</option>
					<option>Isuzu</option>
					<option>IVECO</option>
					<option>jaguar</option>
					<option>Jeep</option>
					<option>KIA</option>
					<option>Land Rover</option>
					<option>Lexus</option>
					<option>Mahindra</option>
					<option>Mazda</option>
					<option>Mercedes</option>
					<option>MG</option>
					<option>Mini</option>
					<option>Mitsubishi</option>
					<option>Nissan</option>
					<option>OPEL</option>
					<option>Peugeot</option>
					<option>Porsche</option>
					<option>Proton</option>
					<option>Renault</option>
					<option>Saab</option>
					<option>Seat</option>
					<option>Ssangyong</option>
					<option>Subaru</option>
					<option>Suzuki</option>
					<option>Tata</option>
					<option>Toyota</option>
					<option>Volvo</option>
					<option>Volkswagen</option>
        </select>
        <div class="invalid-feedback">
          Please select a car make
        </div>
      </div>
			<div class="col-md-4 mb-3">
	 		 <label for="validationCustom03">Model</label>
	 		 <input type="text" name="car_model" class="form-control" id="validationCustom03" placeholder="Model" required>
	 		 <div class="invalid-feedback">
	 			 Please provide a car model.
	 		 </div>
	 	 </div>
  </div>

	<div class="form-row">
		<div class="col-md-4 mb-3">
		 <label for="validationCustom03">Trim Level</label>
		 <input type="text" name="trim" class="form-control" id="validationCustom03" placeholder="Trim Level" required>
		 <div class="invalid-feedback">
			 Please provide a trim level.
		 </div>
	 </div>
	 <div class="col-md-4 mb-3">
		<label for="validationCustom03">Year</label>
		<input type="text" name="year" class="form-control" id="validationCustom03" placeholder="Year" required>
		<div class="invalid-feedback">
			Please provide a year.
		</div>
	</div>
  </div>

	<div class="form-row">
		<div class="col-md-4 mb-3">
		 <label for="validationCustom03">Registration Number</label>
		 <input type="text" name="registration_no" class="form-control" id="validationCustom03" placeholder="Registration Number" required>
		 <div class="invalid-feedback">
			 Please provide registration number.
		 </div>
	 </div>
	 <div class="col-md-4 mb-3">
		<label for="validationCustom03">Engine Number</label>
		<input type="text" name="engine_no" class="form-control" id="validationCustom03" placeholder="Engine Number" required>
		<div class="invalid-feedback">
			Please provide engine number
		</div>
	</div>
  </div>

	<p>What service do you need ?</p>

	<div class="for-row mb-3">
		<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="service[ ]" value="Major service">
  <label class="form-check-label" for="inlineCheckbox1">Major service</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="service[ ]" value="Minor service">
  <label class="form-check-label" for="inlineCheckbox2">Minor Service</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="service[ ]" value="62 Point check">
  <label class="form-check-label" for="inlineCheckbox3">62 Point check</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="service[ ]" value="Battery">
  <label class="form-check-label" for="inlineCheckbox4">Battery</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox5" name="service[ ]" value="Clutch">
  <label class="form-check-label" for="inlineCheckbox5">Clutch</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox6" name="service[ ]" value="Cambelt">
  <label class="form-check-label" for="inlineCheckbox6">Cambelt</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox7" name="service[ ]" value="Engine">
  <label class="form-check-label" for="inlineCheckbox7">Engine</label>
</div>
</div>


<div class="form-row mb-3">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox8" name="service[ ]" value="Transmission">
  <label class="form-check-label" for="inlineCheckbox8">Transmission</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox9" name="service[ ]" value="Axle">
  <label class="form-check-label" for="inlineCheckbox9">Axle</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox10" name="service[ ]" value="Brakes">
  <label class="form-check-label" for="inlineCheckbox10">Brakes</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox11" name="service[ ]" value="Suspension">
  <label class="form-check-label" for="inlineCheckbox11">Suspension</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox12" name="service[ ]" value="Body dent">
  <label class="form-check-label" for="inlineCheckbox12">Body Dent</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox13" name="service[ ]" value="Paint">
  <label class="form-check-label" for="inlineCheckbox13">Paint</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox14" name="service[ ]" value="Battery">
  <label class="form-check-label" for="inlineCheckbox14">Battery</label>
</div>
</div>

<div class="form-row">
	<div class="col-md-8 mb-3">
	 <label for="validationCustom03">Anything else we should know?</label>
	 <input type="text" name="message" class="form-control" id="validationCustom03" placeholder="Anything else we should know?">
	 <div class="invalid-feedback">
		 Please provide a message
	 </div>
	</div>
</div>


	<div class="form-row ">
		<div class="col-md-4 mb-3">
				<label for="validationCustom04">Select Branch</label>
				<select name="branch" class="custom-select" id="validationCustom04" required>
					<option selected disabled value="">Select Branch</option>
					<option>Dhaka</option>
					<option>Chittagong</option>
				</select>
				<div class="invalid-feedback">
					Please select a car model
				</div>
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
		<button class="btn btn-primary" name="add_quote" type="submit">Submit</button>
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
				format: 'yyyy-mm-dd',
				container: container,
				todayHighlight: true,
				autoclose: true,
	      startDate: "1900-01-01",
	      endDate: "2020-12-31",
			})
		})
	  </script>
<div style="margin-top:50px"></div>
</body>
</html>
