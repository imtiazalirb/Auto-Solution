<?php
session_start();
if(isset($_SESSION['type']))
{
	if($_SESSION['type'] != 'employee')
	{
		if($_SESSION['type'] == 'user')
		{
			header('location:../views/user_dashboard.php');
		}
		if($_SESSION['type'] == 'admin')
		{
			header('location:../views/admin_dashboard.php');
		}
	}
}
else
{
  header('location:../views/index.php');
}
?>
 <?php
 include '../controllers/service_request_controller.php';
 $sid = $_GET["service_request_id"];
 $underservice=getServiceInfo($sid);
 ?>
 <?php
 include '../controllers/employee_signup_controller.php';
 $username = $_SESSION['username'];
 $employee=getEmployees($username);
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
          <li class="nav-item active">
            <a class="nav-link" href="user_service_car.php">My Service History</a>
          </li>
        </ul>

      <!--LOGOUT BUTTON-->

      <h5 class="my-sm-2 mr-lg-2">Welcome, <?php echo $_SESSION['username'];?></h5>

      <a class="btn btn-danger my-sm-2 ml-lg-2 "href="../controllers/logout.php">Logout</a>
     </div>
    </nav>
  </div>
</header>

<h3 class="display-5 text-center my-4">Servicing Information</h3>
<div class="container">

  <form class="needs-validation" method="post" action="" enctype="multipart/form-data" novalidate>
  <div class="form-row">
    <div class="col-md-8 mb-3">
      <fieldset >
      <label for="validationCustom01">Car</label>
      <input type="text" name="car_detail" readonly value="<?php echo $underservice["car_detail"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
    </div>
  </div><hr>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <fieldset >
      <label for="validationCustom01">Body type</label>
      <input type="text" name="body_type" readonly value="<?php echo $underservice["body_type"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
    </div>
      <div class="col-md-4 mb-3">
        <fieldset >
        <label for="validationCustom01">Year</label>
        <input type="text" name="year" readonly value="<?php echo $underservice["year"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
      </div>
      <div class="col-md-4 mb-3">
        <fieldset >
        <label for="validationCustom01">Color</label>
        <input type="text" name="color" readonly value="<?php echo $underservice["color"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
      </div>
  </div><hr>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <fieldset >
      <label for="validationCustom01">Drivetrain</label>
      <input type="text" name="drivetrain" readonly value="<?php echo $underservice["drivetrain"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
    </div>
      <div class="col-md-4 mb-3">
        <fieldset >
        <label for="validationCustom01">Engine Type</label>
        <input type="text" name="engine_type" readonly value="<?php echo $underservice["engine_type"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
      </div>
      <div class="col-md-4 mb-3">
        <fieldset >
        <label for="validationCustom01">Fuel Type</label>
        <input type="text" name="fuel_type" readonly value="<?php echo $underservice["fuel_type"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
      </div>
  </div><hr>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Engine No</label>
      <input type="text" name="engine_no" readonly value="<?php echo $underservice["engine_no"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
    </div>
  </div><hr>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <fieldset>
      <label for="validationCustom01">Need Service</label>
      <input type="text" name="last_serviced_item" readonly value="<?php echo $underservice["service_needed"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
    </div>
    <div class="col-md-4 mb-3">
      <fieldset>
      <label for="validationCustom01">Message</label>
      <input type="text" name="last_serviced_date" readonly value="<?php echo $underservice["message"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
    </div>
  </div><hr>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <fieldset>
      <label for="validationCustom01">Serviced By</label>
      <input type="text" name="serviced_by" readonly value="<?php echo $employee["first_name"]?> <?php echo $employee["last_name"]?>" class="form-control-plaintext" id="validationCustom01" placeholder="" required>
    </div>
    <input type="hidden" name="" value="">

  </div><hr>

  <p>What was serviced in the car?</p>

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
    <label for="exampleFormControlTextarea1">Anything else car owner should know ?</label>
  <textarea class="form-control rounded-0" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
</div><hr>



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
