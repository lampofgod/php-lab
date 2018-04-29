<!doctype html>
<html>
<head>
<style>
		body{background-image :url(1.jpg);}
</style>
<title>Student</title>
</head>

<body>
<form name="form1" method="post" action="classresultnew.php">
<h1>Class Attendance</h1>

<table border="1" style="width: 300px">
	<tr>
		<td>Seat</td>
		<td><input name="txtSeat" type="text" id="txtSeat"> </td>
	</tr>
</table><br>
<input type="submit" value="Submit">
</form><br>
<input type="button" align="left" value="history" button onclick="location.href='historyclassresultnew.php'">
</body>
</html>