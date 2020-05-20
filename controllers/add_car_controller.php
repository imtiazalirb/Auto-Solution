<?php
include "../models/database_crud.php";
if(isset($_POST["add_user_car"]))
{
  insertCar();
}
if(isset($_POST["edit_employee_detail"]))
{
  editEmployee();
}

if(isset($_POST["delete_employee_detail"]))
{
  deleteEmployee();
}

function insertCar()
	{
    $username=$_SESSION['username'];
		$brand=$_POST["brand"];
		$model=$_POST["model"];
		$engine_number=$_POST["engine_number"];
		$chassis_number=$_POST["chassis_number"];
		$color=$_POST["color"];
    $registration_number=$_POST["registration_number"];
		$query="INSERT INTO car_details VALUES(NULL,'$username','$brand','$model','$engine_number','$chassis_number','$color','$registration_number')";
		execute($query);
	}

  function getAllEmployees()
	{
		$query ="SELECT * FROM employees_detail ORDER BY Id ASC";
		$employees = get($query);
		return $employees;
    header("location:../views/admin_all_employee.php");
	}

  function getEmployee($id)
	{
		$query="SELECT * FROM employees_detail WHERE id=$id";
		$employee=get($query);
		return $employee[0];
	}

  function editEmployee()
	{
    $id=$_POST["id"];
    $first_name=$_POST["first_name"];
		$last_name=$_POST["last_name"];
		$email=$_POST["email"];
    $phone=$_POST["phone"];
    $salary=$_POST["salary"];
    $street=$_POST["street"];
    $city=$_POST["city"];
    $state=$_POST["state"];
    $zip=$_POST["zip"];
    $username=$_POST["username"];

		$query="UPDATE employees_detail SET email='$email', phone='$phone', salary='$salary', street='$street', city='$city', state='$state', zip='$zip' WHERE id='$id'";
		echo $query;
		execute($query);
		header("location:../views/admin_all_employee.php");
	}

  function deleteEmployee()
  {
    $id=$_POST["id"];
    $query="DELETE from employees_detail WHERE id='$id'";
		echo $query;
		execute($query);
		header("location:../views/admin_all_employee.php");
  }
?>
