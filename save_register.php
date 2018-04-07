<html>
<body>
<?php
	include("config.php");
	
	if(trim($_POST["txtUsername"]) == "")
	{
		echo "<font face=\"Cambria\" size=\"5\"color=\"0e5285\">Please input Username!</font>";
		echo '<br><br><a href="javascript:history.go(-1)"><img src="back.png"/></a>';
		exit();
	}
	
	if(trim($_POST["txtPassword"]) == "")
	{
		echo "<font face=\"Cambria\" size=\"5\"color=\"0e5285\">Please input Password!</font>";
		echo '<br><br><a href="javascript:history.go(-1)"><img src="back.png"/></a>';
		exit();	
	}	
		
	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		echo "<font face=\"Cambria\" size=\"5\"color=\"0e5285\">Password not Match!</font>";
		echo '<br><br><a href="javascript:history.go(-1)"><img src="back.png"/></a>';		
		exit();
	}
	
	if(trim($_POST["txtName"]) == "")
	{
		echo "<font face=\"Cambria\" size=\"5\"color=\"0e5285\">Please input Name!</font>";
		echo '<br><br><a href="javascript:history.go(-1)"><img src="back.png"/></a>';
		exit();	
	}
	if(trim($_POST["txtLastname"]) == "")
	{
		echo "<font face=\"Cambria\" size=\"5\"color=\"0e5285\">Please input Lastname!</font>";
		echo '<br><br><a href="javascript:history.go(-1)"><img src="back.png"/></a>';
		exit();	
	}
	if(trim($_POST["intAge"]) == "")
	{
		echo "<font face=\"Cambria\" size=\"5\"color=\"0e5285\">Please input Age!</font>";
		echo '<br><br><a href="javascript:history.go(-1)"><img src="back.png"/></a>';
		exit();	
	}
	if(trim($_POST["txtUniversity"]) == "")
	{
		echo "<font face=\"Cambria\" size=\"5\"color=\"0e5285\">Please input School or University!</font>";
		echo '<br><br><a href="javascript:history.go(-1)"><img src="back.png"/></a>';
		exit();	
	}
	if(trim($_POST["txtEmail"]) == "")
	{
		echo "<font face=\"Cambria\" size=\"5\"color=\"0e5285\">Please input Email!</font>";
		echo '<br><br><a href="javascript:history.go(-1)"><img src="back.png"/></a>';
		exit();	
	}
	$strSQL = "SELECT * FROM member WHERE txtUsername = '".trim($_POST['txtUsername'])."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
		echo "<font face=\"Cambria\" size=\"5\"color=\"0e5285\">Username already exists!</font>";
		echo '<br><br><a href="javascript:history.go(-1)"><img src="back.png"/></a>';
	}
	else
	{
		
		$strSQL = "INSERT INTO member (txtUsername,txtPassword,txtName,txtLastname,Status,intAge,txtUniversity,txtEmail) VALUES ('".$_POST["txtUsername"]."', 
		'".$_POST["txtPassword"]."','".$_POST["txtName"]."','".$_POST["txtLastname"]."','".$_POST["ddlStatus"]."','".$_POST["intAge"]."','".$_POST["txtUniversity"]."','".$_POST["txtEmail"]."')";
		$objQuery = mysqli_query($objCon,$strSQL);
		
		echo "<font face=\"Cambria\" size=\"5\"color=\"0e5285\">Register Completed!<br></font>";		
	    if(trim($_POST["Status"]) == "STUDENT"){
		echo "<br><font face=\"Cambria\" color=\"062144\">Go to <a href='login_s.php'>Login page</a></font>";}
		else{echo "<br><font face=\"Cambria\" color=\"062144\"> Go to <a href='login_t.php'>Login page</a></font>";
		}
	}
	mysqli_close($objCon);
?>
</body>
</html>
