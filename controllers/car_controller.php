<?php
///require_once "../models/database_connect.php";
require_once "../models/database_crud.php";
if(isset($_POST["add_car"]))
{
  insertCar();
}
if(isset($_GET["delete"]))
{
  deleteCar();
}

function insertCar()
{
    if(!isset($_SESSION))
    {
        session_start();
    }
    $user_id = $_SESSION["id"];
    $username = $_SESSION['username'];
    $car_make = $_POST['car_make'];
    $car_model = $_POST["car_model"];
    $trim = $_POST["trim"];
    $body_type = $_POST["body_type"];
    $year = $_POST["year"];
    $color = $_POST["color"];
    $drivetrain = $_POST["drivetrain"];
    $engine_type = $_POST["engine_type"];
    $fuel_type = $_POST["fuel_type"];
    $engine_no = $_POST["engine_no"];
    $registration_no = $_POST["registration_no"];
    $vin_no = $_POST["vin_no"];
    //file upload
        $target_dir="../storage/car_image/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
		//echo $target_file;

    $query="INSERT INTO car VALUES(NULL,'$user_id','$username','$car_make','$car_model','$trim','$body_type','$year','$color','$drivetrain','$engine_type','$fuel_type','$engine_no','$registration_no','$vin_no','$target_file',NULL,NULL,NULL)";
		execute($query);
    echo($query);
    header("location:../views/user_my_cars.php");
  }

  function getCars()
	{
    if(!isset($_SESSION))
    {
        session_start();
    }
    $username = $_SESSION['username'];
		$query="SELECT * FROM car WHERE  username = '$username'";
		$car=get($query);
		return $car;
	}

  function getCar($car_id)
  {
    $query="SELECT * FROM car WHERE car_id = $car_id";
    $car=get($query);
    return $car[0];
  }

  function getAllCar()
	{
		$query="SELECT * FROM car";
		$cars=get($query);
		return $cars;
	}

function deleteCar()
{
  $car_id = $_GET['delete'];
  $query = "DELETE FROM car where car_id=$car_id";
  execute($query);
  header("location:../views/user_manage_car.php");
}

?>
