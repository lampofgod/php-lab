<html>
<body>
<div align="center">
<?php
	session_start();
        include("config.php");
	$strSQL = "SELECT * FROM classroom WHERE Classcode = '".mysqli_real_escape_string($objCon,$_POST['Classcode'])."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
		echo "<font face=\"Cambria\" size=\"5\"color=\"0e5285\">Class code Incorrect!\n\n\n</font>";
		echo '<br><br><a href="add_class.php"><img src="back.png"/></a>';

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
?>
</div>
</body>
</html>
