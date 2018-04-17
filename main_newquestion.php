<?php
date_default_timezone_set('Asia/Bangkok');
include("config.php");
if($_GET["Action"] == "Save")
{
	//*** Insert Question ***//
	$strSQL = "INSERT INTO webboard ";
	$strSQL .="(CreateDate,Question,Details,Name) ";
	$strSQL .="VALUES ";
	$strSQL .="('".date("Y-m-d H:i:s")."','".$_POST["txtQuestion"]."','".$_POST["txtDetails"]."','".$_POST["txtName"]."') ";
	$objQuery = mysqli_query($objCon,$strSQL);
	
	header("location:main_webboard.php");
}
?>
<html>
<head>
<title>BLOG</title>
</head>
<body>
<form action="main_newquestion.php?Action=Save" method="post" name="frmMain" id="frmMain">
  <table width="621" border="1" cellpadding="1" cellspacing="1" bgcolor="#99CCCC">
    <tr>
      <td bgcolor="#006699"><font face="Cambria" color="white" size="4">Question</font></td>
      <td><input name="txtQuestion" type="text" id="txtQuestion" value="" size="70"></td>
    </tr>
    <tr>
      <td width="78" bgcolor="#006699"><font face="Cambria" color="white" size="4">Details</font></td>
      <td><textarea name="txtDetails" cols="50" rows="5" id="txtDetails"></textarea></td>
    </tr>
    <tr>
      <td width="78" bgcolor="#006699"><font face="Cambria" color="white" size="4">Name</font></td>
      <td width="647"><input name="txtName" type="text" id="txtName" value="" size="50"></td>
    </tr>
  </table>
  
  <input name="btnSave" type="submit" id="btnSave" value="Submit">
</form>
</body>
</html>
<?php
mysqli_close($objCon);
?>