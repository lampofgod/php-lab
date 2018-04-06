<?php
	session_start();
include("config.php");
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}

	
	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		echo "Password not Match!";
		exit();
	}
	$strSQL = "UPDATE member SET txtPassword = '".trim($_POST['txtPassword'])."' 
	,txtName = '".trim($_POST['txtName'])."',txtLastname = '".trim($_POST['txtLastname'])."',intAge = '".trim($_POST['intAge'])."',txtUniversity = '".trim($_POST['txtUniversity'])."'
	,txtEmail = '".trim($_POST['txtEmail'])."'
	WHERE UserID = '".$_SESSION["UserID"]."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	
	echo "Save Completed!<br>";		
	
	if($_SESSION["Status"] == "STUDENT")
	{
		echo "<br> Go to <a href='s_page.php'>Student page</a>";
	}
	else
	{
		echo "<br> Go to <a href='t_page.php'>Teacher page</a>";
	}
	
	mysqli_close($objCon);
?>
