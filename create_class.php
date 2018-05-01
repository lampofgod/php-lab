<?php  session_start();
$UserID=$_SESSION['UserID'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
div{
	width: 800px;
	height: 450px;
	border: 3px solid #0e5285;
	background-color: #FFFFF0 ;
}//table
.button {
    background-color: #0e5285;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}//botton color
h1{
	font-style: bold;
	color: #0e5285;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#98AFC7">

<form name="form1" method="post" action="save_create_class.php">

<center><div><br>

<h1>Create class</h1>
Enter Classcode <br /><input name="Classcode" type="text" id="Classcode" size="40"><br />
Class name <br /><input name="Classname" type="text" id="Classname" size="40"><br />
About class <br /><TEXTAREA NAME=address type="text" id="Aboutclass" ROWs=6 COLS=40></TEXTAREA><br />
<input type="submit" name="Submit" value="Save" class="button"></form>

</body>
</html>
