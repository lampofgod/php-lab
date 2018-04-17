<?php
include("config.php");
if(trim($_POST["code"]) == "")
	{
		echo "Please input Codes !";
		exit();	
	}
	
	if(trim($_POST["code_num"]) == "")
	{
		echo "Please input your seat !";
		exit();	}
else
	{
		$strSQL = "INSERT INTO check_stu (code,code_num) VALUES ('".$_POST["code"]."', '".$_POST["code_num"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);
		echo "<script type='text/javascript'>";
	echo "alert('Succesfuly');";
	echo "window.close()";
	echo "</script>";		
	}

	mysqli_close($objCon);
?>