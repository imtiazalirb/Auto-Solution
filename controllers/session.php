<?php
session_start();
include "../models/database_connect.php";
if(!isset($_SESSION['id']))
{
  header("location:../index.php");
}
  $id = $_SESSION['id'];
  $sql = "select * from login where id='$id';";

  $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result))
            {
                $id = $row['id'];
                $username = $row['username'];
            }
 ?>
