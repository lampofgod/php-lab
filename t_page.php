<?php
 session_start();
        include("config.php");
 if($_SESSION['UserID'] == "")
 {
  echo "Please Login!";
  exit();
 }

 if($_SESSION['Status'] != "TEACHER")
 {
  echo "This page for Teacher only!";
  exit();
 } 
 

 $strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
 $objQuery = mysqli_query($objCon,$strSQL);
 $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>
<html>

<body>
  Welcome <?php echo $objResult["txtName"];?>&nbsp;<?php echo $objResult["txtLastName"];?> <br>
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
  <a href="create_class.php">Create classroom</a>
  <br>
  Teaching : 
  <br>
  <?php
  $strSQL = "SELECT * FROM classroom ORDER BY Classcode asc" or die("Error:" . mysqli_error()); 
$objQuery = mysqli_query($objCon,$strSQL);
echo "<table border='1'>";
echo "<tr align='center' bgcolor='#CCCCCC'><td>Classcode</td><td>Classname</td><td>Aboutclass</td></tr>";
while($row = mysqli_fetch_array($objQuery)) { 
  echo "<tr>";
 echo '<td>'.$row["Classcode"] .  "</a></td> "; 
 echo '<td><a href="display_t.php" target="_blank">' .$row["Classname"] .  "</a></td> "; 
 echo '<td>'.$row["Aboutclass"] .  "</a></td> "; 
  echo "</tr>";
}
echo "</table>";
  ?>
  <br>
  <a href="add_class.php">Add classroom</a>
  <br>
  <a href="logout.php">Logout</a>
</body>
</html>
<?php
 mysqli_close($objCon);
?>
