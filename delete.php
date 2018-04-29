<?php session_start();
include("config.php");
$dateInput=$_SESSION['dateInput'];
$sql = "DELETE FROM student_check WHERE Hello='".$_GET[Hello]."'";
if(mysqli_query($objCon,$sql)){
	echo "<meta http-equiv ='refresh'content='0;URL=teacherclassresult.php'>";
}else{
	echo mysqli_error();
}
mysqli_close($objCon);
?>
