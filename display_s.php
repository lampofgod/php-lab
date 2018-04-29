<?php
session_start();
        include("config.php");
		
$strSQL2 = "SELECT * FROM classroom WHERE Classcode = '".$_GET["Classcode"]."' ";
$objQuery2 = mysqli_query($objCon,$strSQL2) or die ("Error Query [".$strSQL2."]");
$objResult2 = mysqli_fetch_array($objQuery2);
$_SESSION["Classcode"] = $objResult2["Classcode"];
$_SESSION["Classname"] = $objResult2["Classname"];
		session_write_close();
				?>
<html>
<head><title> Classroom</title></head>

<frameset rows="220,*" cols="*" frameborder="no" border="0" framespacing="0">
<frame src="top2_s.php" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" >
<frame src="announcement_s.php" name="mainFrame" id="mainFrame" 	title="mainFrame" >
		
		
</frameset><noframes></noframes>
</html>
