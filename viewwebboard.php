<?php
date_default_timezone_set('Asia/Bangkok');
include("config.php");
if($_GET["Action"] == "Save")

{
	//*** Insert Reply ***//
	$strSQL = "INSERT INTO reply ";
	$strSQL .="(QuestionID,CreateDate,Details,Name) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$_GET["QuestionID"]."','".date("Y-m-d H:i:s")."','".$_POST["txtDetails"]."','".$_POST["txtName"]."') ";
	$objQuery = mysqli_query($objCon,$strSQL);
	
	//*** Update Reply ***//
	$strSQL = "UPDATE webboard ";
	$strSQL .="SET Reply = Reply + 1 WHERE QuestionID = '".$_GET["QuestionID"]."' ";
	$objQuery = mysqli_query($objCon,$strSQL);	

}
?>
<html>
<head>
<title>BLOG</title>
</head>
<body>
<?php
//*** Select Question ***//
$strSQL = "SELECT * FROM webboard  WHERE QuestionID = '".$_GET["QuestionID"]."' ";
$objQuery = mysqli_query($objCon,$strSQL) or die ("Error Query [".$strSQL."]");
$objResult = mysqli_fetch_array($objQuery);

//*** Update View ***//
$strSQL = "UPDATE webboard ";
$strSQL .="SET View = View + 1 WHERE QuestionID = '".$_GET["QuestionID"]."' ";
$objQuery = mysqli_query($objCon,$strSQL);	
?>
<table width="738" border="1" cellpadding="1" cellspacing="1">
  <tr>
    <td colspan="2"><center><h1><?php echo $objResult["Question"];?></h1></center></td>
  </tr>
  <tr>
    <td height="53" colspan="2"><?php echo nl2br($objResult["Details"]);?></td>
  </tr>
  <tr>
    <td width="397">Name : <?php echo $objResult["Name"];?> Create Date : <?php echo $objResult["CreateDate"];?></td>
    <td width="253">View : <?php echo $objResult["View"];?> Reply : <?php echo $objResult["Reply"];?></td>
  </tr>
</table>
<br>
<br>
<?php
$intRows = 0;
$strSQL2 = "SELECT * FROM reply  WHERE QuestionID = '".$_GET["QuestionID"]."' ";
$objQuery2 = mysqli_query($objCon,$strSQL2) or die ("Error Query [".$strSQL."]");
while($objResult2 = mysqli_fetch_array($objQuery2))
{
	$intRows++;
?> No : <?php echo $intRows;?>
<table width="738" border="1" cellpadding="1" cellspacing="1">
  <tr>
    <td height="53" colspan="2"><?php echonl2br($objResult2["Details"]);?></td>
  </tr>
  <tr>
    <td width="397">Name :
        <?php echo $objResult2["Name"];?>      </td>
    <td width="253">Create Date :
    <?php echo $objResult2["CreateDate"];?></td>
  </tr>
</table><br>
<?php
}
?>
<br>
<a href="สำเนาwebboard.php">Back to Webboard</a> <br>
<br>
<form action="สำเนาviewwebboard.php?QuestionID=<?php echo $_GET["QuestionID"];?>&Action=Save" method="post" name="frmMain" id="frmMain">
  <table width="738" border="1" cellpadding="1" cellspacing="1">
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
