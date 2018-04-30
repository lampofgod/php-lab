<?php  session_start(); 
$UserID=$_SESSION['UserID'];
$Classname=$_SESSION['Classname'];
$Classcode=$_SESSION['Classcode'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>UPLOAD FILE</title>
</head>
<body>
<form action="add_file_db.php" method="post" enctype="multipart/form-data" name="upfile" id="upfile">
  <p>&nbsp;</p>
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" >
    <tr>
      <td height="40" colspan="2" align="center" bgcolor="#006699"><font face="Cambria" color="white" size="6">Form Upload File</font></td>
    </tr>
    <tr>
      <td width="126" bgcolor="#99CCCC">&nbsp;</td>
      <td width="574" bgcolor="#99CCCC">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" bgcolor="#99CCCC"><font face="Cambria" color="white" size="4">File Browser</font></td>
      <td bgcolor="#99CCCC"><label>
        <input type="file" name="fileupload" id="fileupload"  required="required"/>
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#99CCCC">&nbsp;</td>
      <td bgcolor="#99CCCC">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#99CCCC">&nbsp;</td>
      <td bgcolor="#99CCCC"><input type="submit" name="button" id="button" value="Upload" /></td>
    </tr>
    <tr>
      <td bgcolor="#99CCCC">&nbsp;</td>
      <td bgcolor="#99CCCC">&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<?php
include('connection.php');
$query = "SELECT * FROM uploadfile WHERE Classcode = '".$Classcode."' ORDER BY fileID DESC" or die("Error:" . mysqli_error()); 
$result = mysqli_query($con, $query); 
echo "<table border='1' align='center' width='500'>";
echo "<tr align='center' bgcolor='#006699'><td><font face='Cambria' color='white' size='4'> File ID </font></td>
											<td><font face='Cambria' color='white' size='4'>File</font></td>
											<td><font face='Cambria' color='white' size='4'>date_create</font></td></tr>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td align='center' bgcolor='#E6E6FA' >" .$row["fileID"] .  "</td> "; ?>
  <td><center><a href="fileupload/<?php echo $row["fileupload"];?>" target="_blank"><?php echo $row["fileupload"];?></a></center></td>
  <?php
  echo "<td align='center' bgcolor='#E6E6FA'>" .$row["dateup"] .  "</td> ";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
<br/>
</body>
</html>
