<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
		body{background-image :url(1.jpg);}
</style>
<title>Student</title>
</head>

<body>
<form name="form1" method="post" action="historyclassresult.php">
<h1>กรอกรหัสนักศึกษาเพื่อดูประวัติการเข้าเรียน</h1>
<table border="1" style="width: 300px">
	<tr>
		<td>ID</td>
		<td><input name="txtID" type="text" id="txtID"> </td>
	</tr>
</table><br>
<input type="submit" value="Submit">
</form><br>
<input type="button" align="left" value="Back" button onclick="location.href='studentmenu.php'">
</body>
</html>