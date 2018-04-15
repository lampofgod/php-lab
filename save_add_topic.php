<?php
include("config.php");
date_default_timezone_set("Asia/Bangkok");
$date = date("d-m-Y"); 
if(trim($_POST["topic"]) == "")
	{
		echo "Please input topic !";
		exit();	
	}
if(trim($_POST["content"]) == "")
	{
		echo "Please input content !";
		exit();	
	}
else{
$strSQL = "INSERT INTO announcement (topic,content) VALUES ('".$_POST["topic"]."', '".$_POST["content"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);
		echo "Add announcement Completed !<br>";		
}
?>