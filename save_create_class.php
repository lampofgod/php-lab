<?php
	include("config.php");
	if(trim($_POST["Classcode"]) == "")
	{
		echo "Please input Classcode !";
		exit();	
	}
	
	if(trim($_POST["Classname"]) == "")
	{
		echo "Please input Classname!";
		exit();	
	}
	$strSQL = "SELECT * FROM classroom WHERE Classcode = '".trim($_POST['Classcode'])."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
			echo "Classcode has been create already !";
	}
	else
	{   		
		$strSQL = "INSERT INTO classroom (Classcode,Classname,Aboutclass,UserID) VALUES ('".$_POST["Classcode"]."', '".$_POST["Classname"]."', '".$_POST["Aboutclass"]."', '".$_POST['UserID']."')";
		$objQuery = mysqli_query($objCon,$strSQL);
		echo "Create Completed!<br>";
		$_SESSION["Classcode"] = $objResult["Classcode"];
		session_write_close();
		echo "<br> Go to  <a href='add_class.php'>your class room</a>";}
	mysqli_close($objCon);
?>
