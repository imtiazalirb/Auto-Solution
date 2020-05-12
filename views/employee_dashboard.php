<?php
session_start();
if(isset($_SESSION['type']))
{
	if($_SESSION['type'] != 'employee')
	{
		header('location:../user_dashboard.php');
	}
	else
	{
		header('location: ../views/index.php');
	}
}
