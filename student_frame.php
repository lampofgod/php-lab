<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php

include("config.php");  
 $strSQL = "SELECT * FROM member ORDER BY UserID asc" or die("Error:" . mysqli_error()); 
$objQuery = mysqli_query($objCon,$strSQL);
	
 
echo "<table border='1' align='center' width='500'>";

echo "<tr align='center' bgcolor='#CCCCCC'><td>รหัส</td><td>ชื่อ</td><td>นามสกุล</td><td>สถานะ</td><td>อีเมล์</td></tr>";
while($row = mysqli_fetch_array($objQuery)) { 
  echo "<tr>";
  echo "<td>" .$row["UserID"] .  "</td> "; 
  echo "<td>" .$row["txtName"] .  "</td> ";  
  echo "<td>" .$row["txtLastName"] .  "</td> ";
  echo "<td>" .$row["Status"] .  "</td> ";
  echo "<td>" .$row["txtEmail"] .  "</td> ";

  echo "</tr>";
}
echo "</table>";

mysqli_close($objCon);
?>

<body>
</body>
</html>