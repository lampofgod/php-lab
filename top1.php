<?php
	session_start();
        include("config.php");
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>

<html>
<body>
<h3 align="right"><?php echo $objResult["txtName"];?>&nbsp;<?php echo $objResult["txtLastname"];?></h3>
<a href="edit_profile.php" target="new"><p align="right">Edit</a>
  <a href="logout.php" target="new">Logout</p></a>
</body>
</html>