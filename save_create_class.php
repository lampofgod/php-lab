<html>
<body>
<div align="center">
<?php
	include("config.php");
	if(trim($_POST["Classname"]) == "")
	{
		echo "<font face=\"Cambria\" size=\"5\"color=\"0e5285\">Please input Classname!</font>";
		exit();	
	}
	$strSQL = "SELECT * FROM classroom WHERE Classname = '".trim($_POST['Classname'])."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
		echo "<font face=\"Cambria\" size=\"5\"color=\"0e5285\">Class has been create already !</font>";
	}
	else
	{		
		$strSQL = "INSERT INTO classroom (Classname,Aboutclass) VALUES ('".$_POST["Classname"]."', 
		'".$_POST["Aboutclass"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);
		
		echo "<font face=\"Cambria\" size=\"5\"color=\"0e5285\">Create Completed!<br></font>";
		echo "<br><font face=\"Cambria\" color=\"062144\"> Go to <a href='display_t.php'>your class room</a></font>";
}
	mysqli_close($objCon);
?>

</div>
</body>
</html>
