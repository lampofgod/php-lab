<?php session_start();
include("config.php");

$sql = "DELETE FROM tb_event WHERE id='".$_GET[id]."'";
if(mysqli_query($objCon,$sql)){
	echo "<meta http-equiv ='refresh'content='0;URL=events.php'>";
}else{
	echo mysqli_error();
}
mysqli_close($objCon);
?>