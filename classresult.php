<?php
	include("config1.php");
	$strSQL = "INSERT INTO student_check (UserID,Name,Seat,Status,Date) VALUES ('".$_POST["txtID"]."','".$_POST["txtName"]."','".$_POST["txtSeat"]."','".Present."',DATE_ADD(Now(), INTERVAL 7 HOUR))";
	$objQuery = mysqli_query($objCon,$strSQL);
	mysqli_close($objCon);
?>
<html>
<head>
<style>
		body{background-image :url(1.jpg);}
</style>
</head>
<body>
<?php
echo "<h1>ID ".$_POST["txtID"]." เช็คชื่อเรียบร้อย!!!</h1>";
?>
<input type="button" align="left" value="Back" button onclick="location.href='student.php'">
<br><br>
<input type="button" align="left" value="Back to menu" button onclick="location.href='index.php'"></body>
</html>