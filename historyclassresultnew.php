<?php  session_start(); ?>
<html>
<head>
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
 $UserID=$_SESSION['UserID'];
 $Classname=$_SESSION['Classname'];
 $Name=$_SESSION['txtName'];
 $LastName=$_SESSION['txtLastName'];
//$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
  //$objQuery = mysqli_query($objConnect,$strSQL);
  //$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

$objQ = "SELECT * FROM student_check WHERE UserID='".$UserID."' && Classname='".$Classname."' ORDER BY Date ASC" or die("Error:" . mysqli_error()); 
$objR = mysqli_query($objCon, $objQ); 
echo "<p> <font size='7pt'> ตารางแสดงการประวัติเข้าเรียนของID ".$UserID." </font></p>";
echo "<table border='1' width='500'>";
echo "<tr align='center' bgcolor='#CCCCCC'><td>No</td><td>Classname</td><td>Name</td><td>LastName</td><td>Seat</td><td>Date</td></tr>";
$item = 1;
while($row = mysqli_fetch_array($objR)) { 
  echo "<tr>";
  echo "<td>" .$item.  "</td> "; 
  //echo "<td>" .$row["UserID"] .  "</td> "; 
  echo "<td>" .$row["Classname"] .  "</td> ";  
  echo "<td>" .$row["txtName"] .  "</td> ";  
  echo "<td>" .$row["txtLastName"] .  "</td> "; 
  echo "<td>" .$row["Seat"] .  "</td> ";
  //echo "<td>" .$row["Status"] .  "</td> ";
  echo "<td>" .$row["Date"].  "</td> ";
  echo "</tr>";
 $item++;
}
echo "</table>";
mysqli_close($objCon);
?><br><br>
<input type="button" align="left" value="Back" button onClick="location.href='studentnew.php'"></body>
</html>