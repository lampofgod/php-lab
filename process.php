<?php
session_start(); 
$UserID=$_SESSION['UserID'];
$Classname=$_SESSION['Classname'];
$txtName=$_SESSION['txtName'];
$txtLastName=$_SESSION['txtLastName'];
include 'connection.php';

if(trim($_POST["message"]) == "")
	{
		echo "Please input message !";
		exit();	
	}
else{
	date_default_timezone_set('Asia/Bangkok');
	$time = $date = date("Y-m-d H:i:s");
$strSQL = "INSERT INTO shouts (user,message,time,Classname) VALUES ('".$txtName."', 
		'".$_POST["message"]."','".$time."','".$Classname."')";
		$objQuery = mysqli_query($con,$strSQL);
				header("location: chatroom.php");
				exit();
}
		

?>
