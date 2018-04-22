<? ob_start() ?>
<?php
	session_start();
        include("config.php");
	$strSQL = "SELECT * FROM member WHERE txtUsername = '".mysqli_real_escape_string($objCon,$_POST['txtUsername'])."' 
	and txtPassword = '".mysqli_real_escape_string($objCon,$_POST['txtPassword'])."'";
 
 $captcha;
 if(isset($_POST['g-recaptcha-response'])){
 $captcha=$_POST['g-recaptcha-response'];
 }
 if(!$captcha){
 echo '<h2>Please confirm your identity.</h2>';
 exit;
 }

	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!\n\n\n";
			echo "<a href='home_test.php'><h3>back</h3></a>"; 
            exit();      
	}
	

	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["Status"] = $objResult["Status"];
			$_SESSION["txtName"] = $objResult["txtName"];
			$_SESSION["txtLastName"] = $objResult["txtLastName"];
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
<? ob_end_flush() ?>
