<?php
include "../models/database_crud.php";
if(isset($_POST["add_car"]))
{
  insertCar();
}

function insertCar()
{
    if(!isset($_SESSION))
    {
        session_start();
    }
    $user_id = $_SESSION["id"];
    $user_name = $_SESSION['username'];
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

    $query="INSERT INTO car VALUES(NULL,'$user_id','$user_name','$car_make','$car_model','$trim','$body_type','$year','$color','$drivetrain','$engine_type','$fuel_type','$engine_no','$registration_no','$vin_no','$target_file')";
		execute($query);
    header("location:../views/user_dashboard.php");
  }

  function getCar()
	{
    if(!isset($_SESSION))
    {
        session_start();
    }
    $user_id = $_SESSION['id'];
		$query="SELECT * FROM car WHERE  user_id = $user_id  ";
		$car=get($query);
		return $car;
	}

?>
