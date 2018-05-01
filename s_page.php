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
<head>
<style>
    body { background-color: #98AFC7;}
    table { text-align: center;
            background-color: white;}
    font { font-size: 30px;}


</style>
</head>

<body>

<font><center><b>  Welcome Student <?php echo $objResult["txtName"];?>&nbsp;<?php echo $objResult["txtLastName"];?></b></center></font></td> <br>
  <table border="1" style="width: 300px" align="center">
    <tbody>
      <tr>
        <td width="87"><b> &nbsp;UserID</b></td>
        <td width="197"><?php echo $objResult["UserID"];?>
        </td>
      </tr>
      <tr>
        <td><b> &nbsp;Status</b></td>
        <td><?php echo $objResult["Status"];?></td>
      </tr>
    </tbody>
  </table>
  <br>
	<p align="center">
  <a href="edit_profile.php">Edit profile</a>
  <br>
  <a href="add_class.php">Add classroom</a><br>
 <b>Subject  :</b></p>
  <br>
	<p align="center">
  <?php
  $strSQL = "SELECT * FROM classroom,join_class WHERE classroom.Classcode=join_class.Classcode && join_class.UserID = '".$objResult["UserID"]."' ORDER BY join_class.Classcode asc" or die("Error:" . mysqli_error());
$objQuery = mysqli_query($objCon,$strSQL);
echo "<table border='1'>";
echo "<tr align='center' bgcolor='#FFF5EE'><td><b>Classcode</b></td><td><b>Classname</b></td><td><b>Aboutclass</b></td></tr>";
while($row = mysqli_fetch_array($objQuery)) {
	//if($row["UserID"] == $objResult["UserID"]){
  echo "<tr>";
 echo "<td>".$row["Classcode"].  "</td> ";
 //echo '<td><a href="display_t.php" target="_blank">' .$row["Classname"] .  "</a></td> ";
  ?></p>
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
