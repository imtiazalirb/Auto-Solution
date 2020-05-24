<?php
require_once "../models/database_crud.php";
if(isset($_POST["add_quote"]))
{
  insertQuote();
}

function insertQuote()
	{
		$first_name=$_POST["first_name"];
		$last_name=$_POST["last_name"];
		$email=$_POST["email"];
    $phone=$_POST["phone"];
    $car_make=$_POST["car_make"];
    $car_model=$_POST["car_model"];
    $trim=$_POST["trim"];
    $year=$_POST["year"];
    $registration_no=$_POST["registration_no"];
    $engine_no=$_POST["engine_no"];
    $checkbox=$_POST["service"];
    $message=$_POST["message"];
    $branch=$_POST["branch"];


    foreach($checkbox as $chk1)
       {
          $chk .= $chk1." ";
       }

    		$query="INSERT INTO quote VALUES(NULL,'$first_name','$last_name','$email','$phone','$car_make','$car_model','$trim','$year','$registration_no','$engine_no','$chk','$message','$branch')";
    		execute($query);
        echo ($query);
        header("Location: ../views/index.php");
	}

  function getAllQuote()
  {
    $query ="SELECT * FROM quote ORDER BY Id ASC";
    $quotes = get($query);
    return $quotes;
  }
?>
