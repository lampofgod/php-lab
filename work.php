<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<button type = "button" onclick="window.open('add_work.php','','width=1024,height=768'); return false;"> +ADD </button><br /><br /><br /></body>

<?php
include("config.php");
$strSQL = "SELECT * FROM work" or die("Error:" . mysqli_error()); 
$objQuery = mysqli_query($objCon,$strSQL);


while($row = mysqli_fetch_array($objQuery)) { 
echo "<table border='1' align='center' width='500'>";
  echo "<tr align='left' bgcolor='#CCCCCC'>";
  echo "<td>" .$row["topic"] .  "</td></tr>"; 
  echo "<tr><td>" .$row["content"] .  "</td></tr> ";  
  echo "<tr><td>โพสเมื่อ : " .$row["dateup"] .  "</td></tr>";
  ?>
  <td><center><a href="myfile/<?php echo $row["fileupload"];?>"><?php echo $row["fileupload"];?></a></center></td>
  <?php
  echo "</tr>";
  echo "</table><br>";
}

mysqli_close($objCon);
	
?>

</body>
</html>