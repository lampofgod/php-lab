<html>
<body>
<div align="center">
<?php
	session_start();
include("config.php");
	if($_SESSION['UserID'] == "")
	{
		echo "<font face=\"Cambria\" size=\"5\"color=\"0e5285\">Please Login!</font>";
		exit();
	}
	
	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		echo "<font face=\"Cambria\" size=\"5\"color=\"0e5285\">Password not Match!</font>";
		exit();
	}
	$strSQL = "UPDATE member SET txtPassword = '".trim($_POST['txtPassword'])."' 
	,txtName = '".trim($_POST['txtName'])."',txtLastname = '".trim($_POST['txtLastname'])."',intAge = '".trim($_POST['intAge'])."',txtUniversity = '".trim($_POST['txtUniversity'])."'
	,txtEmail = '".trim($_POST['txtEmail'])."'
	WHERE UserID = '".$_SESSION["UserID"]."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	
	echo "<font face=\"Cambria\" size=\"5\"color=\"0e5285\">Save Completed!<br></font>";		
	
	if($_SESSION["Status"] == "STUDENT")
	{
		echo "<br><font face=\"Cambria\" color=\"062144\"> Go to <a href='s_page.php'>Student page</a></font>";
	}
	else
	{
		echo "<br><font face=\"Cambria\" color=\"062144\"> Go to <a href='t_page.php'>Teacher page</a></font>";
	}
	
	mysqli_close($objCon);
?>
</div>
</body>
</html>
