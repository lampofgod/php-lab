<html>
<head>
<style>
		body{background-image :url(1.jpg);}
</style>
</head>
<body>
<?php
include("config1.php");
//date_default_timezone_set("Asia/Bangkok");
//if( ! ini_get('date.timezone') )
//{
//    date_default_timezone_set('Asia/Bangkok');
//}
$objQuery = "SELECT * FROM student_check WHERE UserID='".$_POST["txtID"]."' ORDER BY Date ASC" or die("Error:" . mysqli_error()); 
$objResult = mysqli_query($objCon, $objQuery); 
echo "<p> <font size='7pt'> ตารางแสดงการประวัติเข้าเรียนของID ".$_POST["txtID"]." </font></p>";
echo "<table border='1' width='500'>";
echo "<tr align='center' bgcolor='#CCCCCC'><td>No</td><td>ID</td><td>Name</td><td>Seat</td><td>Date</td></tr>";
$item = 1;
while($row = mysqli_fetch_array($objResult)) { 
  //$date = new DateTime($row['Date']); //current date/time
  //$new_time = date("Y-m-d H:i:s", strtotime('+3 hours', strtotime($date))); // $now + 3 hours
  //SET time_zone = '+07:00';
  //$new_time = date("Y-m-d H:i:s", strtotime('+7 hours', strtotime(Date)));
  //$new_time = new DateTime($row['Date']." UTC", strtotime('+7 hours'));
  echo "<tr>";
  echo "<td>" .$item.  "</td> "; 
  echo "<td>" .$row["UserID"] .  "</td> "; 
  echo "<td>" .$row["Name"] .  "</td> ";  
  echo "<td>" .$row["Seat"] .  "</td> ";
  //echo "<td>" .$row["Status"] .  "</td> ";
  echo "<td>" .$row["Date"].  "</td> ";
  echo "</tr>";
 $item++;
}
echo "</table>";
mysqli_close($objCon);
?><br><br>
<input type="button" align="left" value="Back" button onclick="location.href='history.php'"></body>
</html>