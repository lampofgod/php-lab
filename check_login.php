<center>
<style>
h1{color: red;}
body{background-color: #bde3ff;}
</style>
<body>
<?php
	session_start();
        include("config.php");
	$strSQL = "SELECT * FROM member WHERE txtUsername = '".mysqli_real_escape_string($objCon,$_POST['txtUsername'])."' 
	and txtPassword = '".mysqli_real_escape_string($objCon,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "<h1>Username and Password Incorrect!</h1>\n\n\n";
			echo '<a href="home_test.php"><img src="back1.png"/></a>';
	}
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["Status"] = $objResult["Status"];
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
?>
</body>
</center>
