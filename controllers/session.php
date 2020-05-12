<?php
	session_start();
  include "../models/database_connect.php";
	if(!isset($_SESSION['id']))
	{
		header("location:../controllers/logout.php");
	}
    $id = $_SESSION['id'];
    //$id = $username = $type = "";
    $sql = "select * from login where id='$id';";
    //echo $sql;
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result))
            {
                $id = $row['id'];
                $username = $row['username'];
                $type = $row['type'];

            }


?>
