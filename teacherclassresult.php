<?php session_start(); ?>
<html>
<head>
  <SCRIPT language="JavaScript">
function timerefresh(t)
{

if(t==0)
{
window.location.reload();
} 
else
{
t--;
} 
window.setTimeout("timerefresh('"+t+"')",1000) 
}

timerefresh(5);
</script>
<style>
		body{background-image :url(1.jpg);}
</style>
</head>
<body>
<?php
include("config.php");
if($_SESSION['UserID'] == "" or $_SESSION['Classname'] == "")
 {
  echo "Please Login!";
  exit();
 }
  $Classname=$_SESSION['Classname'];
  $dateInput=$_SESSION['dateInput'];
$objQuery = "SELECT * FROM student_check,member WHERE student_check.UserID=member.UserID && date(Date)='".$dateInput."' && Classname='".$Classname."' ORDER BY Date ASC" or die("Error:" . mysqli_error()); 
$objResult = mysqli_query($objCon, $objQuery); 
echo "<p> <font size='7pt'> ตารางแสดงการเข้าเรียน ".$dateInput." </font></p>";
echo "<table border='1' width='500'>";
echo "<tr align='center' bgcolor='#CCCCCC'><td>No</td><td>Classname</td><td>Name</td><td>LastName</td><td>Seat</td><td>Date</td><td>ลบ</td></tr>";
$item = 1;
while($row = mysqli_fetch_array($objResult)) { 
  echo "<tr>";
  echo "<td>" .$item.  "</td> "; 
  echo "<td>" .$row["Classname"] .  "</td> ";  
  echo "<td>" .$row["txtName"] .  "</td> ";  
  echo "<td>" .$row["txtLastName"] .  "</td> ";  
  echo "<td>" .$row["Seat"] .  "</td> ";
  echo "<td>" .$row["Date"].  "</td> ";?>
  <td><a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='delete.php?Hello=<?php echo "$row[Hello]";?>';}">Delete</a></td><?php
  echo "</tr>";
 $item++;
}
echo "</table>";
mysqli_close($objCon);
?><br><br>
<input type="button" align="left" value="Back" button onClick="location.href='teacherdate.php'"></body>
</html>
