<?php
session_start(); 
$UserID=$_SESSION['UserID'];
$Classname=$_SESSION['Classname'];
$Classcode=$_SESSION['Classcode'];
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
$strSQL = "INSERT INTO announcement (topic,content,Classcode,dateup) VALUES ('".$_POST["topic"]."', '".$_POST["content"]."','".$Classcode."','".$time."')";
		$objQuery = mysqli_query($objCon,$strSQL);
		echo "Add announcement Completed !<br>";		
		echo "<script type='text/javascript'>";
	echo "window.close()";
	echo "</script>";
}
?>
