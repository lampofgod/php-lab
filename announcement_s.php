<?php  session_start(); 
$UserID=$_SESSION['UserID'];
$Classname=$_SESSION['Classname'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
    include("config.php");
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	
?>
<?php
$strSQL = "SELECT * FROM announcement WHERE Classname = '".$Classname."' ORDER BY topicID DESC" or die("Error:" . mysqli_error()); 
$objQuery = mysqli_query($objCon,$strSQL);
while($row = mysqli_fetch_array($objQuery)) { 
echo "<table border='1' align='center' width='500'>";
  echo "<tr align='left' bgcolor='#006699'>";
  echo "<td><font face='Cambria' color='white' size='4'>" .$row["topic"] .  "</font></td></tr>"; 
  echo "<tr bgcolor='#E6E6FA' ><td>" .$row["content"] .  "</td></tr> ";  
  echo "<tr bgcolor='#E6E6FA'><td>โพสเมื่อ : " .$row["dateup"] .  "</td></tr>";
  echo "</tr>";
  echo "</table><br>";
}
mysqli_close($objCon);
	
?>

</html>