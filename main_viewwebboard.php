<?php
date_default_timezone_set('Asia/Bangkok');
include("config.php");
if($_GET["Action"] == "Save")
{
	//*** Insert Reply ***//
	$captcha;
 if(isset($_POST['g-recaptcha-response'])){
 $captcha=$_POST['g-recaptcha-response'];
 }
 if(!$captcha){
 echo '<h2>Please confirm your identity.</h2>';
 exit;
 }
 else{
	
	$strSQL = "INSERT INTO reply ";
	$strSQL .="(QuestionID,CreateDate,Details,Name) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$_GET["QuestionID"]."','".date("Y-m-d H:i:s")."','".$_POST["txtDetails"]."','".$_POST["txtName"]."') ";
	$objQuery = mysqli_query($objCon,$strSQL);
	
	//*** Update Reply ***//
	$strSQL = "UPDATE webboard ";
	$strSQL .="SET Reply = Reply + 1 WHERE QuestionID = '".$_GET["QuestionID"]."' ";
	$objQuery = mysqli_query($objCon,$strSQL);	
}}
?>
<html>
<head>
<title>BLOG</title>
<script src='https://www.google.com/recaptcha/api.js'></script>
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
    <td colspan="2" bgcolor="#ffffff"><center><h1><?php echo $objResult["Question"];?></h1></center></td>
  </tr>
  <tr>
    <td height="53" colspan="2" bgcolor="#99CCCC"><?php echo nl2br($objResult["Details"]);?></td>
  </tr>
  <tr>
    <td width="397"  bgcolor="#ffffff">Name : <?php echo $objResult["Name"];?> Create Date : <?php echo $objResult["CreateDate"];?></td>
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
    <td height="53" colspan="2" bgcolor="#ffffff"><?php echo nl2br($objResult2["Details"]);?></td>
  </tr>
  <tr>
    <td width="397" bgcolor="#99CCCC">Name :
        <?php echo $objResult2["Name"];?>      </td>
    <td width="253" bgcolor="#99CCCC">Create Date :
    <?php echo $objResult2["CreateDate"];?></td>
  </tr>
</table><br>
<?php
}
?>
<br>
<a href="main_webboard.php">Back to Webboard</a> <br>
<br>
<form action="main_viewwebboard.php?QuestionID=<?php echo $_GET["QuestionID"];?>&Action=Save" method="post" name="frmMain" id="frmMain">
  <table width="738" border="1" cellpadding="1" cellspacing="1">
    <tr>
      <td width="78" bgcolor="#006699">Details</td>
      <td><textarea name="txtDetails" cols="50" rows="5" id="txtDetails"></textarea></td>
    </tr>
    <tr>
      <td width="78" bgcolor="#ffffff">Name</td>
      <td width="647" bgcolor="#ffffff"><input name="txtName" type="text" id="txtName" value="" size="50"></td>
    </tr>
  </table>
  <div class="g-recaptcha" data-sitekey="6LeZplQUAAAAALXszTnH_i87575bZCALARGj7pG4"></div>
  <input name="btnSave" type="submit" id="btnSave" value="Submit">
</form>
</body>
</html>
<?php
mysqli_close($objCon);
?>
