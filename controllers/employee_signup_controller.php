<?php
include "../models/database_crud.php";
if(isset($_POST["add_employee_detail"]))
{
  insertEmployee();
  insertLogin();
}
if(isset($_POST["edit_employee_detail"]))
{
  editEmployee();
}

if(isset($_POST["delete_employee_detail"]))
{
  deleteEmployee();
}

function insertEmployee()
	{
		$first_name=$_POST["first_name"];
		$last_name=$_POST["last_name"];
		$date=$_POST["date"];
		$gender=$_POST["gender"];
		$email=$_POST["email"];
    $phone=$_POST["phone"];
    $designation=$_POST["designation"];
    $salary=$_POST["salary"];
    $street=$_POST["street"];
    $city=$_POST["city"];
    $state=$_POST["state"];
    $zip=$_POST["zip"];
    $username=$_POST["username"];
    $pass=$_POST["password"];
    $passToDB = password_hash($pass, PASSWORD_DEFAULT);
		$query="INSERT INTO employees_detail VALUES(NULL,'$first_name','$last_name','$date','$gender','$email','$phone','$designation','$salary','$street','$city','$state','$zip','$username','$passToDB')";
		execute($query);

    $query="INSERT INTO login VALUES(NULL,'$username','$passToDB','employee')";
		execute($query);
    header("location:../views/admin_dashboard.php");
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
