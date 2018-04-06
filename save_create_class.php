<?php
	include("config.php");
	if(trim($_POST["Classname"]) == "")
	{
		echo "Please input Classname!";
		exit();	
	}
	$strSQL = "SELECT * FROM classroom WHERE Classname = '".trim($_POST['Classname'])."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
			echo "Class has been create already !";
	}
	else
	{
		
		$strSQL = "INSERT INTO classroom (Classname,Aboutclass) VALUES ('".$_POST["Classname"]."', 
		'".$_POST["Aboutclass"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);
		
		echo "Create Completed!<br>";
		echo "<br> Go to <a href='display_t.php'>your class room</a>";}

	mysqli_close($objCon);
?>