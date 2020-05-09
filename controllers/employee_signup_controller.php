<?php
require_once "../models/database_crud.php";
if(isset($_POST["add_employee_detail"]))
{
  insertEmployee();
  insertLogin();
}

function insertEmployee()
	{
		$first_name=$_POST["first_name"];
		$last_name=$_POST["last_name"];
		$date=$_POST["date"];
		$gender=$_POST["gender"];
		$email=$_POST["email"];
    $phone=$_POST["phone"];
    $street=$_POST["street"];
    $city=$_POST["city"];
    $state=$_POST["state"];
    $zip=$_POST["zip"];
    $username=$_POST["username"];
    $pass=$_POST["password"];
    $passToDB = password_hash($pass, PASSWORD_DEFAULT);
		$query="INSERT INTO employees_detail VALUES(NULL,'$first_name','$last_name','$date','$gender','$email','$phone','$street','$city','$state','$zip','$username','$passToDB')";
		execute($query);

    $query="INSERT INTO login VALUES(NULL,'$username','$passToDB','employee')";
		execute($query);
    header("location:../views/admin_dashboard.php");
	}
?>
