<?php
	session_start();
	$UserID=$_SESSION['UserID'];
        include("config.php");
	$strSQL = "SELECT * FROM classroom WHERE Classcode = '".mysqli_real_escape_string($objCon,$_POST['Classcode'])."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Class code Incorrect!\n\n\n";
			echo "<a href='add_class.php'><h3>back</h3></a>"; 
	}
	else
	{
		
		$strSQL = "INSERT INTO join_class (UserID,Classcode) VALUES ('".$UserID."', '".$_POST["Classcode"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);

			
$_SESSION["Classcode"] = $objResult["Classcode"];
			$_SESSION["Classname"] = $objResult["Classname"];
			session_write_close();
			
			if($objResult["Status"] == "TEACHER")
			{
				header("location:t_page.php");
			}
			else
			{
				header("location:s_page.php");
			}
	}
	mysqli_close($objCon);
