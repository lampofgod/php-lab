<?php
session_start(); 
$UserID=$_SESSION['UserID'];
$Classname=$_SESSION['Classname'];
	include("config.php");
	$strSQL = "INSERT INTO  tb_event (title,start_date,stop_date,Classname)
                value ('".$_POST["txtevent"]."','".$_POST["numdate"]."','".$_POST["numdate2"]."','".$Classname."')";
	$objQuery = mysqli_query($objCon,$strSQL);
	mysqli_close($objCon);
	header("Refresh:0; url=calendar.php");
?>
