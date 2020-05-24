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
<?php
include '../controllers/car_controller.php';
$cid = $_GET["car_id"];
$car=getCar($cid);
?>
<?php
include '../controllers/customer_signup_controller.php';
$uid = $_SESSION['id'];
$user=getUser($uid);
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
<style>
.image{
  display: block;
margin-left: auto;
margin-right: auto;
width: 168px;
height: 200px;
  border-radius: 5px;
  object-fit: cover;
}
</style>
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
					<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Manage Cars
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="user_add_car.php">Add Cars</a>
              <a class="dropdown-item" href="user_my_cars.php">My Cars</a>
              <a class="dropdown-item" href="user_manage_car.php">Manage Cars</a>
            </div>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Servicing
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="user_service_status.php">Service Request Status</a>
              <a class="dropdown-item" href="user_service_record.php">Servicing Record</a>
            </div>
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


<h3 class="display-5 text-center my-4">Car Information</h3>
<div class="container">

  <form class="needs-validation" method="post" action="../controllers/service_request_controller.php" enctype="multipart/form-data" novalidate>
  <div class="form-row">
    <div class="col-md-8 mb-3">
      <fieldset >
      <label for="validationCustom01">Car</label>
      <input type="text" name="car_detail" readonly value="<?php echo $car["car_make"]?> <?php echo $car["car_model"]?> <?php echo $car["trim"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
    </div>
      <div class="col-md-4">
        <img type="image" readonly src="<?php echo $car["image"]?>" style="max-width: 35%; border-radius:10px;" class="plaintext">
      </div>
  </div><hr>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <fieldset >
      <label for="validationCustom01">Body type</label>
      <input type="text" name="body_type" readonly value="<?php echo $car["body_type"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
    </div>
      <div class="col-md-4 mb-3">
        <fieldset >
        <label for="validationCustom01">Year</label>
        <input type="text" name="year" readonly value="<?php echo $car["year"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
      </div>
      <div class="col-md-4 mb-3">
        <fieldset >
        <label for="validationCustom01">Color</label>
        <input type="text" name="color" readonly value="<?php echo $car["color"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
      </div>
  </div><hr>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <fieldset >
      <label for="validationCustom01">Drivetrain</label>
      <input type="text" name="drivetrain" readonly value="<?php echo $car["drivetrain"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
    </div>
      <div class="col-md-4 mb-3">
        <fieldset >
        <label for="validationCustom01">Engine Type</label>
        <input type="text" name="engine_type" readonly value="<?php echo $car["engine_type"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
      </div>
      <div class="col-md-4 mb-3">
        <fieldset >
        <label for="validationCustom01">Fuel Type</label>
        <input type="text" name="fuel_type" readonly value="<?php echo $car["fuel_type"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
      </div>
  </div><hr>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Engine No</label>
      <input type="text" name="engine_no" readonly value="<?php echo $car["engine_no"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
    </div>
    <div class="col-md-4 mb-3">
      <fieldset >
      <label for="validationCustom01">Color</label>
      <input type="text" name="registration_no" readonly value="<?php echo $car["registration_no"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
    </div>
    <div class="col-md-4 mb-3">
      <fieldset>
      <label for="validationCustom01">Vin Number</label>
      <input type="text" name="vin_no" readonly value="<?php echo $car["vin_no"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
    </div>
  </div><hr>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <fieldset>
      <label for="validationCustom01">Last Serviced Item</label>
      <input type="text" name="last_serviced_item" readonly value="<?php echo $car["last_serviced_item"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
    </div>
    <div class="col-md-4 mb-3">
      <fieldset>
      <label for="validationCustom01">Last Serviced Date</label>
      <input type="text" name="last_serviced_date" readonly value="<?php echo $car["last_serviced_date"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
    </div>
    <div class="col-md-4 mb-3">
      <fieldset>
      <label for="validationCustom01">Odometer Reading When Last Serviced</label>
      <input type="text" name="last_serviced_odo" readonly value="<?php echo $car["last_serviced_odo"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
    </div>
  </div><hr>

  <p>What service do you need ?</p>

	<div class="for-row mb-3">
		<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="service[ ]" value="[Major service]">
  <label class="form-check-label" for="inlineCheckbox1">Major service</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="service[ ]" value="[Minor service]">
  <label class="form-check-label" for="inlineCheckbox2">Minor Service</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="service[ ]" value="[62 Point check]">
  <label class="form-check-label" for="inlineCheckbox3">62 Point check</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="service[ ]" value="[Battery]">
  <label class="form-check-label" for="inlineCheckbox4">Battery</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox5" name="service[ ]" value="[Clutch]">
  <label class="form-check-label" for="inlineCheckbox5">Clutch</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox6" name="service[ ]" value="[Cambelt]">
  <label class="form-check-label" for="inlineCheckbox6">Cambelt</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox7" name="service[ ]" value="[Engine]">
  <label class="form-check-label" for="inlineCheckbox7">Engine</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox8" name="service[ ]" value="[Transmission]">
  <label class="form-check-label" for="inlineCheckbox8">Transmission</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox9" name="service[ ]" value="[Axle]">
  <label class="form-check-label" for="inlineCheckbox9">Axle</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox10" name="service[ ]" value="[Brakes]">
  <label class="form-check-label" for="inlineCheckbox10">Brakes</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox11" name="service[ ]" value="[Suspension]">
  <label class="form-check-label" for="inlineCheckbox11">Suspension</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox12" name="service[ ]" value="[Body dent]">
  <label class="form-check-label" for="inlineCheckbox12">Body Dent</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox13" name="service[ ]" value="[Paint]">
  <label class="form-check-label" for="inlineCheckbox13">Paint</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox14" name="service[ ]" value="[Battery]">
  <label class="form-check-label" for="inlineCheckbox14">Battery</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox15" name="service[ ]" value="[Other]">
  <label class="form-check-label" for="inlineCheckbox15">Other</label>
</div>
</div><hr>

  <div class="form-row">
    <label for="exampleFormControlTextarea1">Anything else we should know ?</label>
  <textarea class="form-control rounded-0" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
</div><hr>

  <input type="hidden" name="car_id" value="<?php echo $car["car_id"]?>" >
  <input type="hidden" name="user_id" value="<?php echo $car["user_id"]?>" >
  <input type="hidden" name="username" value="<?php echo $car["username"]?>" >

	<input type="hidden" name="name" value="<?php echo $user["first_name"]?> <?php echo $user["last_name"]?>" >
		<input type="hidden" name="street" value="<?php echo $user["street"]?>" >
			<input type="hidden" name="city" value="<?php echo $user["city"]?>" >
				<input type="hidden" name="zip" value="<?php echo $user["zip"]?>" >
					<input type="hidden" name="email" value="<?php echo $user["email"]?>" >
						<input type="hidden" name="phone" value="<?php echo $user["phone"]?>" >


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
  <button class="btn btn-success" name="add_service_request" type="submit">Send Request</button>
  <a class="btn btn-danger" href="../views/user_manage_car.php" role="button">Cancel</a>
</form>


<div style="margin-top:50px"></div>
<script src="../js/jquery-slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>
</html>
