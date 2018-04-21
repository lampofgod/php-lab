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
<form name="form1" method="post" action="classresult.php">
<h1>Class Attendance</h1>

<table border="1" style="width: 300px">
	<tr>
		<td>ID</td>
		<td><input name="txtID" type="text" id="txtID"> </td>
	</tr>
	<tr>
		<td>Name</td>
		<td><input name="txtName" type="text" id="txtName"> </td>
	</tr>
	<tr>
		<td>Seat</td>
		<td><input name="txtSeat" type="text" id="txtSeat"> </td>
	</tr>
</table><br>
<input type="submit" value="Submit">
</form><br>
<input type="button" align="left" value="Back" button onclick="location.href='studentmenu.php'">
</body>
</html>