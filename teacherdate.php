<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
		body{background-image :url(1.jpg);}
</style>
<title>Count</title>
</head>

<body>
<form name="form1" method="post" action="teacherclassresult.php">
<h1>กรอกวันที่เพื่อแสดงข้อมูลนักเรียนที่เข้าเรียน</h1>
<table border="1" style="width: 300px">
	<tr>
		<td>Date</td>
		<td><input name="txtID" type="text" id="txtID" value="yyyy-mm-dd"></td>
	</tr>
	
</table><br>
<input type="submit" value="Submit">
</form><br>
<input type="button" align="left" value="Back" button onclick="location.href='teacher.php'">
</body>
</html>