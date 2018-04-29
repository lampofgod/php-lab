<?php  session_start(); 
$UserID=$_SESSION['UserID'];
$Classname=$_SESSION['Classname'];
?>


<html>
<head>
<meta charset="utf-8">

<title></title>
</head>



<body>
<h1>สร้าง Event</h1>
<form name="events" method="post" action="data.php">

<table>
	<tr>
		<td>Event</td>
		<td><input name="txtevent" type="text" id="txtevent"> </td>
	</tr>
	<tr>
		<td>Date start</td>
		<td><input name="numdate" type="date" id="numdate"> </td>
    </tr>
    <tr>
		<td>Date stop</td>
		<td><input name="numdate2" type="date" id="numdate2"> </td>
	</tr>
</table><br>
<input type="submit" value="Submit">

</form><br>

<?php
include("config.php");
  
$objQuery = "SELECT * FROM tb_event WHERE Classname = '".$Classname."' " or die("Error:" . mysqli_error()); 
$objResult = mysqli_query($objCon, $objQuery); ?>

<h1>ตารางแสดง Event <input type="button" value="View Calendar" button onClick="location.href='calendar.php'"></h1>
<?php
echo "<table border='1' width='500'>";
echo "<tr align='center' bgcolor='#CCCCCC'><td>Title</td><td>Start date</td><td>Stop date</td><td>ลบ</td></tr>";
$item = 1;
while($row = mysqli_fetch_array($objResult)) { 
  echo "<tr>";
  echo "<td>" .$row["title"] .  "</td> ";  
  echo "<td>" .$row["start_date"] .  "</td> ";  
  echo "<td>" .$row["stop_date"] .  "</td> "; ?>
  <td><a href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='eventsdelete.php?id=<?php echo "$row[id]";?>';}">Delete</a></td><?php
  echo "</tr>";
 $item++;
}
echo "</table>";
mysqli_close($objCon);
?>

</body>
</html>