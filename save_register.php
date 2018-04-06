<?php
	include("config.php");
	
	if(trim($_POST["txtUsername"]) == "")
	{
		echo "Please input Username!";
		exit();	
	}
	
	if(trim($_POST["txtPassword"]) == "")
	{
		echo "Please input Password!";
		exit();	
	}	
		
	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		echo "Password not Match!";
		exit();
	}
	
	if(trim($_POST["txtName"]) == "")
	{
		echo "Please input Name!";
		exit();	
	}
	if(trim($_POST["txtLastname"]) == "")
	{
		echo "Please input Lastname!";
		exit();	
	}
	if(trim($_POST["intAge"]) == "")
	{
		echo "Please input Age!";
		exit();	
	}
	if(trim($_POST["txtUniversity"]) == "")
	{
		echo "Please input School or University!";
		exit();	
	}
	if(trim($_POST["txtEmail"]) == "")
	{
		echo "Please input Email!";
		exit();	
	}

	$strSQL = "SELECT * FROM member WHERE txtUsername = '".trim($_POST['txtUsername'])."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
			echo "Username already exists!";
	}
	else
	{
		
		$strSQL = "INSERT INTO member (txtUsername,txtPassword,txtName,txtLastname,Status,intAge,txtUniversity,txtEmail) VALUES ('".$_POST["txtUsername"]."', 
		'".$_POST["txtPassword"]."','".$_POST["txtName"]."','".$_POST["txtLastname"]."','".$_POST["ddlStatus"]."','".$_POST["intAge"]."','".$_POST["txtUniversity"]."','".$_POST["txtEmail"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);
		
		echo "Register Completed!<br>";		
	    if(trim($_POST["Status"]) == "STUDENT"){
		echo "<br> Go to <a href='login_s.php'>Login page</a>";}
		else{echo "<br> Go to <a href='login_t.php'>Login page</a>";
		}
		
	}

	mysqli_close($objCon);
?>
