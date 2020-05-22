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
          <li class="nav-item">
            <a class="nav-link" href="user_dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
          </li>
					<li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Manage Cars
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Add Cars</a>
              <a class="dropdown-item" href="#">My Cars</a>
              <a class="dropdown-item" href="#">Manage Cars</a>
            </div>
          </li>
          <li cl
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

<!-- CAR FORM-->
<?php
include '../controllers/car_controller.php';
 ?>

    <h3 class="display-5 text-center my-4">Car Adding</h3>
    <div class="container">
    <form class="needs-validation" method="post" action="../controllers/car_controller.php" enctype="multipart/form-data" novalidate>
    <div class="form-row">
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
       <label for="validationCustom03">Trim</label>
       <input type="text" name="trim" class="form-control" id="validationCustom03" placeholder="Model">
       <small class="text-muted">
         Optional
       </small>
     </div>
       <div class="col-md-4 mb-3">
           <label for="validationCustom04">Body Type</label>
           <select name="body_type" class="custom-select" id="validationCustom04" required>
             <option selected disabled value="">Body Type</option>
             <option>Camper</option>
             <option>Coupe</option>
             <option>Compact</option>
             <option>Crossover</option>
             <option>Hatchback</option>
             <option>Roadster</option>
             <option>Sedan</option>
             <option>SUV</option>
             <option>Truck</option>
             <option>Van</option>
             <option>Wagon</option>
           </select>
           <div class="invalid-feedback">
             Please select a body type
           </div>
         </div>
    </div>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom03">Manufacturing Year</label>
        <input type="number" name="year" class="form-control" id="validationCustom03" placeholder="Year" required>
        <div class="invalid-feedback">
          Please provide a valid year.
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom03">Color</label>
        <input type="text" name="color" class="form-control" id="validationCustom03" placeholder="Color">
        <small id="passwordHelpInline" class="text-muted">
          Optional
        </small>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-3 mb-3">
          <label for="validationCustom04">Drivetrain Type</label>
          <select name="drivetrain" class="custom-select" id="validationCustom04" required>
            <option selected disabled value="">Drivetrain Type</option>
            <option>FWD</option>
            <option>RWD</option>
            <option>4WD</option>
            <option>AWD</option>
            <option>Mid Engined</option>
            <option>Rear Engined</option>
            <option>Hybrid</option>
            <option>Other</option>
          </select>
          <div class="invalid-feedback">
            Please select a drivetrain type
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationCustom03">Engine Type</label>
          <input type="text" name="engine_type" class="form-control" id="validationCustom03" placeholder="Engine Type" required>
          <div class="invalid-feedback">
            Please provide a engine type.
          </div>
        </div>
        <div class="col-md-2 mb-3">
            <label for="validationCustom04">Fuel Type</label>
            <select name="fuel_type" class="custom-select" id="validationCustom04" required>
              <option selected disabled value="">Fuel Type</option>
              <option>103 Octane</option>
              <option>Diesel</option>
              <option>E85(Ethanol)</option>
              <option>Flex</option>
              <option>Gasoline</option>
            </select>
            <div class="invalid-feedback">
              Please select fuel type
            </div>
          </div>
    </div>
    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="validationCustom03">Engine No</label>
        <input type="text" name="engine_no" class="form-control" id="validationCustom03" placeholder="Engine No" required>
        <div class="invalid-feedback">
          Please provide a valid year.
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom03">Registration No</label>
        <input type="text" name="registration_no" class="form-control" id="validationCustom03" placeholder="Registation No" required>
        <div class="invalid-feedback">
          Please provide a valid year.
        </div>
      </div>
      <div class="col-md-2 mb-3">
        <label for="validationCustom03">Vin No</label>
        <input type="text" name="vin_no" class="form-control" id="validationCustom03" placeholder="Vin No">
        <small id="passwordHelpInline" class="text-muted">
          Optional
        </small>
      </div>
    </div>
		<div class="form-row">
			<div class="form-group col-md-3">
      <label for="File">Choose Image</label>
      <input class="form-control" type="file" name="image" id="file">
      <small class="form-text text-muted" id="fileHelp">Max size 1MB</small>
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

    <button class="btn btn-primary" name="add_car" type="submit">Submit</button>
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

</body>
</html>
