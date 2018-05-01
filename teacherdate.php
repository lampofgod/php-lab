<?php
session_start();
 include("config.php");
$Classname=$_SESSION['Classname'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
		body{background-image :url(1.jpg);}
</style>
<title>Count</title>
</head>

<body>
<form name="form1" method="post" action="checkdate.php">
<h1>กรอกวันที่เพื่อแสดงข้อมูลนักเรียนที่เข้าเรียน</h1>
Date
	<link rel="stylesheet" media="all" type="text/css" href="jquery-ui.css" />
	<link rel="stylesheet" media="all" type="text/css" href="jquery-ui-timepicker-addon.css" />

	<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="jquery-ui.min.js"></script>

	<script type="text/javascript" src="jquery-ui-timepicker-addon.js"></script>
	<script type="text/javascript" src="jquery-ui-sliderAccess.js"></script>

	<script type="text/javascript">

$(function(){
	$("#dateInput").datepicker({
		dateFormat: 'yy-mm-dd'
	});
});

</script>
		<input type="text" name="dateInput" id="dateInput" value="" /> 
	
<br><br>
<input type="submit" value="Submit">
</form>

<?php


$objQuery = "SELECT COUNT(Seat), student_check.UserID, txtName, txtLastName, Classname FROM student_check,member WHERE student_check.UserID=member.UserID && Classname='".$Classname."' GROUP BY student_check.UserID ORDER BY UserID ASC" or die("Error:" . mysqli_error()); 
$objResult = mysqli_query($objCon, $objQuery); 
echo "<p> <font size='7pt'> ตารางแสดงจำนวนครั้งที่เข้าเรียน</font></p>";
echo "<table border='1' width='500'>";
echo "<tr align='center' bgcolor='#CCCCCC'><td>No</td><td>UserID</td><td>name</td><td>LastName</td><td>จำนวนครั้ง</td></tr>";
$item = 1;
while($row = mysqli_fetch_array($objResult)) { 
  echo "<tr>";
  echo "<td>" .$item.  "</td> "; 
  echo "<td>" .$row["UserID"] .  "</td> "; 
  echo "<td>" .$row["txtName"] .  "</td> ";  
  echo "<td>" .$row["txtLastName"] .  "</td> ";  
  echo "<td>" .$row["COUNT(Seat)"].  "</td> ";
  echo "</tr>";
 $item++;
}
echo "</table>";
mysqli_close($objCon);
?>

</body>
</html>
