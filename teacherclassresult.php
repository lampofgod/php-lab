<html>
<head>
<style>
		body{background-image :url(1.jpg);}
</style>
</head>
<body>
<?php
include("config1.php");
$objQuery = "SELECT * FROM student_check WHERE date(Date)='".$_POST["dateInput"]."' ORDER BY Date ASC" or die("Error:" . mysqli_error()); 
$objResult = mysqli_query($objCon, $objQuery); 
echo "<p> <font size='7pt'> ตารางแสดงการเข้าเรียน ".$_POST["dateInput"]." </font></p>";
echo "<table border='1' width='500'>";
echo "<tr align='center' bgcolor='#CCCCCC'><td>No</td><td>ID</td><td>Name</td><td>Seat</td><td>Date</td><td>ลบ</td></tr>";
$item = 1;
while($row = mysqli_fetch_array($objResult)) { 
  echo "<tr>";
  echo "<td>" .$item.  "</td> "; 
  echo "<td>" .$row["UserID"] .  "</td> "; 
  echo "<td>" .$row["Name"] .  "</td> ";  
  echo "<td>" .$row["Seat"] .  "</td> ";
  //echo "<td>" .$row["Status"] .  "</td> ";
  echo "<td>" .$row["Date"].  "</td> ";?>
  <td><a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='delete.php?Hello=<?php echo "$row[Hello]";?>';}">Delete</a></td><?php
  echo "</tr>";
 $item++;
}
echo "</table>";
mysqli_close($objCon);
?><br><br>
<input type="button" align="left" value="Back" button onclick="location.href='teacherdate.php'"></body>
</html>
