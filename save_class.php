<?php
	session_start();
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
			$_SESSION["Classcode"] = $objResult["Classcode"];

			session_write_close();
			
			if($objResult["Status"] == "TEACHER")
			{
				header("location:display_t.php");
			}
			else
			{
				header("location:display_s.php");
			}
	}
	mysqli_close($objCon);