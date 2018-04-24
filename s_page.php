<?php
	session_start();
	//$Classcode=$_SESSION['$Classcode'];
	
include("config.php");
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['Status'] != "STUDENT")
	{
		echo "This page for Student only!";
		exit();
	}	
	
	

	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
?>
<html>

<body>
  Welcome <?php echo $objResult["txtName"];?>&nbsp;<?php echo $objResult["txtLastName"];?></td> <br>
  <table border="1" style="width: 300px">
    <tbody>
      <tr>
        <td width="87"> &nbsp;UserID</td>
        <td width="197"><?php echo $objResult["UserID"];?>
        </td>
      </tr>
      <tr>
        <td> &nbsp;Status</td>
        <td><?php echo $objResult["Status"];?></td>
      </tr>
    </tbody>
  </table>
  <br>
  <a href="edit_profile.php">Edit profile</a>
  <br>
  <a href="add_class.php">Add classroom</a><br>
 Subject  : 
  <br>
  <?php
  $strSQL = "SELECT * FROM classroom,join_class WHERE classroom.Classcode=join_class.Classcode && join_class.UserID = '".$objResult["UserID"]."' ORDER BY join_class.Classcode asc" or die("Error:" . mysqli_error()); 
$objQuery = mysqli_query($objCon,$strSQL);
echo "<table border='1'>";
echo "<tr align='center' bgcolor='#CCCCCC'><td>Classcode</td><td>Classname</td><td>Aboutclass</td></tr>";
while($row = mysqli_fetch_array($objQuery)) {
	//if($row["UserID"] == $objResult["UserID"]){
  echo "<tr>";
 echo "<td>".$row["Classcode"].  "</td> "; 
 //echo '<td><a href="display_t.php" target="_blank">' .$row["Classname"] .  "</a></td> ";
  ?>
<td><a href="https://webserv.kmitl.ac.th/lampofgod/display_s.php?Classcode=<?php echo $row["Classcode"];?>"><?php echo $row["Classname"];?></a></td>

<?php
echo '<td>'.$row["Aboutclass"] .  "</a></td> "; 
  echo "</tr>";
	}//}
echo "</table>";
  ?>
  <br>
  <a href="logout.php">Logout</a>
</body>
</html>
<?php
	mysqli_close($objCon);
?>
