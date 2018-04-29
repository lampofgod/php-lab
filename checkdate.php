<?php session_start(); 
$_SESSION["dateInput"]=$_POST["dateInput"];
session_write_close();
echo "<meta http-equiv ='refresh'content='0;URL=teacherclassresult.php'>";
?>