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
<form name="form1" method="post" action="checkdate.php">
<h1>กรอกวันที่เพื่อแสดงข้อมูลนักเรียนที่เข้าเรียน</h1>
Date
	<link rel="stylesheet" media="all" type="text/css" href="jquery-ui.css" />
	<link rel="stylesheet" media="all" type="text/css" href="jquery-ui-timepicker-addon.css" />

	<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="jquery-ui.min.js"></script>

	<script type="text/javascript" src="jquery-ui-timepicker-addon.js"></script>
	<script type="text/javascript" src="jquery-ui-sliderAccess.js"></script>

	<script type="text/javascript">

$(function(){
	$("#dateInput").datepicker({
		dateFormat: 'yy-mm-dd'
	});
});

</script>
		<input type="text" name="dateInput" id="dateInput" value="" /> 
	
<br><br>
<input type="submit" value="Submit">
</form>
</body>
</html>