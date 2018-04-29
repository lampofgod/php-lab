<?php
session_start(); 
$UserID=$_SESSION['UserID'];
$Classname=$_SESSION['Classname'];
include("config.php");
/*date_default_timezone_set("Asia/Bangkok");
$date = date("d-m-Y"); */
date_default_timezone_set('Asia/Bangkok');
	$time = $date = date("Y-m-d H:i:s");
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
$strSQL = "INSERT INTO announcement (topic,content,Classname,dateup) VALUES ('".$_POST["topic"]."', '".$_POST["content"]."','".$Classname."','".$time."')";
		$objQuery = mysqli_query($objCon,$strSQL);
		echo "Add announcement Completed !<br>";		
		echo "<script type='text/javascript'>";
	echo "window.close()";
	echo "</script>";
}
?>
