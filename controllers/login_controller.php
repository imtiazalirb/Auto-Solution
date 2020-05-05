<?php
session_start();
require_once "../models/database_connect.php";

if(isset($_POST["login"]))
{
  if(!empty($_POST['username'])){
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$username = $_POST['username'];
	}
  if(!empty($_POST['password'])){
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$password= $_POST['password'];
	}
  if($username=='admin' && $password=='admin'){
        header("Location: ../views/admin.php");
      }

  $sqlUserCheck = "SELECT id,username, password,type FROM login WHERE username = '$username';";
	//echo $sqlUserCheck;
	$result = mysqli_query($conn, $sqlUserCheck);
	$rowCount = mysqli_num_rows($result);

  if($rowCount < 1){
		$message = "User does not exist!";
	}

  else{
		  while($row = mysqli_fetch_assoc($result)){
			$uPassInDB = $row['password'];
			$id = $row['id'] ;
			$type = $row['type'] ;
			//echo $user_id;
			//echo $user_password."======".$uPassInDB;
			if(password_verify($_POST['password'], $uPassInDB) && $type=='user')
			{
				//$_SESSION['user_name'] = $user_name;
				$message = "Success";
				$_SESSION['user_id'] = $user_id;
				//echo $_SESSION["$user_id"];
				header("Location: ../views/user_dashboard.php");
			}
			if(password_verify($_POST['user_password'], $uPassInDB) && $type=='employee')
			{
				//$_SESSION['user_name'] = $user_name;
				$message = "Success";
				$_SESSION['user_id'] = $user_id;
				//echo $_SESSION["$user_id"];
				header("Location: doctor.php");
			}

			else
			{
				$message = "Wrong Password!";
			}
		}

	}

}

 ?>
