<?php
session_start();
        include("config.php");
 if($_SESSION['UserID'] == "" or $_SESSION['Classname'] == "")
 {
  echo "Please Login!";
  exit();
 }
 	$UserID=$_SESSION['UserID'];
 	$Classname=$_SESSION['Classname'];
 	//$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
 	//$objQuery = mysqli_query($objConnect,$strSQL);
 	//$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

	$SQL = "INSERT INTO student_check (UserID,Classname,Seat,Date) VALUES ('".$UserID."','".$Classname."','".$_POST["txtSeat"]."',DATE_ADD(Now(), INTERVAL 7 HOUR))" or die("Error:" . mysqli_error());;
	$objQ = mysqli_query($objCon,$SQL);
	mysqli_close($objCon);
	//mysqli_close($objConnect);
?>
<html>
<head>
<style>
		body{background-image :url(1.jpg);}
</style>
</head>
<body>
<?php
echo "<h1>เช็คชื่อเรียบร้อย!!!</h1>";
?>
<input type="button" align="left" value="Back" button onClick="location.href='studentnew.php'">
</html>
