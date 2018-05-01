<?php  session_start(); 
$UserID=$_SESSION['UserID'];
$Classname=$_SESSION['Classname'];
$Classcode=$_SESSION['Classcode'];
?>
<html>
<head>
<title>BLOG</title>
</head>
<body>
<p align ="center"><button type = "button" onClick="window.open('main_newquestion.php','','width=400,height=400'); return false;"> +ADD NEW TOPIC</button><br /><br /><br /></p>

<?php
date_default_timezone_set('Asia/Bangkok');
include("config.php");
$strSQL = "SELECT * FROM webboard ";
$objQuery = mysqli_query($objCon,$strSQL) or die("Error Query [".$strSQL."]");
$Num_Rows = mysqli_num_rows($objQuery);
$Per_Page = 10;   // Per Page
$Page = $_GET["Page"];
if(!$_GET["Page"])
{
	$Page=1;
}
$Prev_Page = $Page-1;
$Next_Page = $Page+1;
$Page_Start = (($Per_Page*$Page)-$Per_Page);
if($Num_Rows<=$Per_Page)
{
	$Num_Pages =1;
}
else if(($Num_Rows % $Per_Page)==0)
{
	$Num_Pages =($Num_Rows/$Per_Page) ;
}
else
{
	$Num_Pages =($Num_Rows/$Per_Page)+1;
	$Num_Pages = (int)$Num_Pages;
}
$strSQL .=" WHERE Classcode = '".$Classcode."' order  by QuestionID DESC LIMIT $Page_Start , $Per_Page";
$objQuery  = mysqli_query($objCon,$strSQL);
?>
<table width="909" border="1">
  <tr>
    <th width="99" bgcolor="#006699"><font face="Cambria" color="white" size="4"> <div align="center">QuestionID</div></font></th>
    <th width="458"bgcolor="#006699"><font face="Cambria" color="white" size="4"> <div align="center">Question</div></font></th>
    <th width="90"bgcolor="#006699"><font face="Cambria" color="white" size="4"> <div align="center">Name</div></font></th>
    <th width="130"bgcolor="#006699"><font face="Cambria" color="white" size="4"> <div align="center">CreateDate</div></font></th>
  </tr>
<?php
while($objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC))
{
?>
  <tr>
    <td bgcolor="#E6E6FA"><div align="center"><?php echo $objResult["QuestionID"];?></div></td>
    <td bgcolor="#E6E6FA"><a href="main_viewwebboard.php?QuestionID=<?php echo $objResult["QuestionID"];?>"><?php echo $objResult["Question"];?></a></td>
    <td bgcolor="#E6E6FA"><?php echo $objResult["Name"];?></td>
    <td bgcolor="#E6E6FA"><div align="center"><?php echo $objResult["CreateDate"];?></div></td>
  </tr>
<?php
}
?>
</table>

<br>
Total <?php echo $Num_Rows;?> Record : <?php echo $Num_Pages;?> Page :
<?php
if($Prev_Page)
{
	echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page'><< Back</a> ";
}
for($i=1; $i<=$Num_Pages; $i++){
	if($i != $Page)
	{
		echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ]";
	}
	else
	{
		echo "<b> $i </b>";
	}
}
if($Page!=$Num_Pages)
{
	echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page'>Next>></a> ";
}
mysqli_close($objCon);
?>
</body>
</html>
