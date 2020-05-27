<?php
require_once "../models/database_crud.php";
//require_once "../models/database_connect.php"

if(isset($_POST["add_service_request"]))
{
  insertServiceRequest();
}

if(isset($_GET["approve"]))
{
  changeServiceStatus();
}

function insertServiceRequest()
	{
    $car_id=$_POST["car_id"];
    $user_id=$_POST["user_id"];
    $name=$_POST["name"];
    $username=$_POST["username"];
    $street=$_POST["street"];
    $city=$_POST["city"];
    $zip=$_POST["zip"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
		$car_detail=$_POST["car_detail"];
		$body_type=$_POST["body_type"];
		$year=$_POST["year"];
    $color=$_POST["color"];
    $drivetrain=$_POST["drivetrain"];
    $engine_type=$_POST["engine_type"];
    $fuel_type=$_POST["fuel_type"];
    $engine_no=$_POST["engine_no"];
    $registration_no=$_POST["registration_no"];
    $vin_no=$_POST["vin_no"];
    $checkbox=$_POST["service"];
    $message=$_POST["message"];
    $last_serviced_item=$_POST["last_serviced_item"];
    $last_serviced_date=$_POST["last_serviced_date"];
    $last_serviced_odo=$_POST["last_serviced_odo"];
    $servicing_stage=$_POST["servicing_stage"];
    $chk="";

    foreach($checkbox as $chk1)
       {
          $chk .= $chk1." ";
       }

    		$query="INSERT INTO service_request VALUES (NULL,'$car_id','$user_id','$name','$username','$street','$city','$zip','$phone','$email','$car_detail','$body_type','$year','$color','$drivetrain','$engine_type','$fuel_type','$engine_no','$registration_no','$vin_no','$chk','$message','$last_serviced_item',DEFAULT,'$last_serviced_date','$last_serviced_odo','$servicing_stage')";
    		execute($query);
        //echo ($query);
        header("Location: ../views/user_service_status.php");
	}

  function getServiceRequests()
  {
    if(!isset($_SESSION))
    {
        session_start();
    }
    $user_id = $_SESSION['id'];
    $query="SELECT * FROM service_request WHERE  user_id = $user_id AND servicing_stage = 0";
    $service_request=get($query);
    return $service_request;
  }

  function getUnderServices()
  {
    if(!isset($_SESSION))
    {
        session_start();
    }
    $user_id = $_SESSION['id'];
    $query="SELECT * FROM service_request WHERE  user_id = $user_id AND servicing_stage = 1";
    $service_request=get($query);
    return $service_request;
  }

  function getAllServiceRequests()
	{
		$query ="SELECT * FROM service_request WHERE servicing_stage = 0 ORDER BY service_request_id ASC";
		$service_requests = get($query);
		return $service_requests;
    header("location:../views/admin_service_requests.php");
	}

  function getAllUnderService()
	{
		$query ="SELECT * FROM service_request WHERE servicing_stage = 1 ORDER BY service_request_id ASC";
		$service_requests = get($query);
		return $service_requests;
    header("location:../views/admin_service_requests.php");
	}

  function changeServiceStatus()
  {
    $id = $_GET['approve'];
    $query ="UPDATE `service_request` SET  `servicing_stage`='1' WHERE service_request_id=$id";
    execute($query);
    header("location:../views/admin_service_requests.php");
  }

  function getServiceInfo($service_request_id)
  {
    $query="SELECT * FROM service_request WHERE service_request_id = $service_request_id AND servicing_stage='1'";
    $get_service_info =get($query);
    return $get_service_info[0];
  }



?>
