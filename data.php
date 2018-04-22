<?php
	include("config.php");
	$strSQL = "INSERT INTO  tb_event (title,start_date,stop_date)
                value ('".$_POST["txtevent"]."','".$_POST["numdate"]."',
                        '".$_POST["numdate2"]."')";
	$objQuery = mysqli_query($objCon,$strSQL);
	mysqli_close($objCon);
?>
<html>
    <head></head>
    <body>
<input type="button" value="Calendar" button onclick="location.href='calender.php'">
</body></html>