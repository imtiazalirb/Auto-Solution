<?php
session_start();
require_once "../models/database_connect.php";

//session_start();
$username = $password = $message = $id =$type="";

/* mysqli_real_escape_string() helps prevent sql injection */
if(isset($_POST['login']))
{
	if(!empty($_POST['username'])){
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$username= $_POST['username'];

	}
	if(!empty($_POST['password'])){
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$password= $_POST['password'];
	}
	if($username=='admin' && $password=='admin')
		{
			header("location:../views/admin_dashboard.php");
		}
	else{
		$sqlUserCheck = "SELECT id,username,password,type FROM login WHERE username = '$username';";
		//echo $sqlUserCheck;
		$result = mysqli_query($conn, $sqlUserCheck);
		$rowCount = mysqli_num_rows($result);

		if($rowCount < 1){
			header("location:../views/index.php?Empty= User does not exist");
	    exit();
		}
			else {
				while($row = mysqli_fetch_assoc($result)){
					$uPassInDB = $row['password'];
					$id = $row['id'] ;
					$type = $row['type'] ;
					//echo $user_id;
					//echo $user_password."======".$uPassInDB;
					if(password_verify($_POST['password'], $uPassInDB) && $type=='user')
					{
						$_SESSION['username'] = $username;
						//$message = "Success";
						$_SESSION['id'] = $id;
						//echo $_SESSION["$user_id"];
						header("location:../views/user_dashboard.php");
					}
				  else if(password_verify($_POST['password'], $uPassInDB) && $type=='employee')
					{
						$_SESSION['username'] = $username;
						$message = "Success";
						$_SESSION['id'] = $id;
						//echo $_SESSION["$user_id"];
						header("location:../views/employee_dashboard.php);
					}

					else
					{
						header("location:../views/index.php?Invalid= Please Enter Correct password ");
		        exit();
					}
			}
		}
	}
}
