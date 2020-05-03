<?php
require_once "../models/database.php";
if(isset($_POST["add_users_detail"]))
{
  insertUser();
}

function insertUser()
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
    $password=$_POST["password"];
		$query="INSERT INTO users_detail VALUES(NULL,'$first_name','$last_name','$date','$gender','$email','$phone','$street','$city','$state','$zip','$username','$password')";
		execute($query);
	}

?>
