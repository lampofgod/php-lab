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
  <table width="621" border="1" cellpadding="1" cellspacing="1">
    <tr>
      <td>Question</td>
      <td><input name="txtQuestion" type="text" id="txtQuestion" value="" size="70"></td>
    </tr>
    <tr>
      <td width="78">Details</td>
      <td><textarea name="txtDetails" cols="50" rows="5" id="txtDetails"></textarea></td>
    </tr>
    <tr>
      <td width="78">Name</td>
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
