<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<p align="center"><font face='Cambria' color='black' size='5'>Attendance List</font></p> 
</body>
<?php
include("config.php");  
 $strSQL = "SELECT * FROM member WHERE Status = 'STUDENT'" or die("Error:" . mysqli_error()); 
$objQuery = mysqli_query($objCon,$strSQL);
	
echo "<table border='1' align='center' width='500'bgcolor='#E6E6FA'>";
echo "<tr align='center' bgcolor='#006699'><td><font face='Cambria' color='white' size='3'>รหัส</font></td><td><font face='Cambria' color='white' size='3'>ชื่อ</font></td><td><font face='Cambria' color='white' size='3'>นามสกุล</font></td><td><font face='Cambria' color='white' size='3'>อีเมล์</font></td><td><font face='Cambria' color='white' size='3'>สถานะ</font></td></tr>";
while($row = mysqli_fetch_array($objQuery)) { 
  echo "<tr>";
  echo "<td>" .$row["UserID"] .  "</td> "; 
  echo "<td>" .$row["txtName"] .  "</td> ";  
  echo "<td>" .$row["txtLastName"] .  "</td> ";
  echo "<td>" .$row["txtEmail"] .  "</td> ";
  echo "<td>" .$row["Status"] .  "</td> ";
  echo "</tr>";
}
echo "</table>";
mysqli_close($objCon);
?>

<body>
<p align="center"><button type = "button" onclick="window.open('check_t.php','','width=400,height=400'); return false;"> Make a roll call </button></p>
</body>
</html>