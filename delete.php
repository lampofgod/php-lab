<html>
<head>
<style>
		body{background-image :url(1.jpg);}
</style>
<title>delete</title>
</head>
<body>
<?php
include("config1.php");
$sql = "DELETE FROM student_check WHERE Hello='".$_GET[Hello]."'";
if(mysqli_query($objCon,$sql)){
	echo "ลบข้อมูลเรียบร้อย";
}else{
	echo mysqli_error();
}
mysqli_close($objCon);
?><br><br>
<input type="button" align="left" value="Back" button onclick="location.href='teacherdate.php'"></body>
</body>
</html>