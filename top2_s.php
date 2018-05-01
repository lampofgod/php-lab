<?php
session_start();
        include("config.php");
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>
<html>
<head>
<style>
.button {
    background-color: #0e5285;
    width: 10%;
    border: none;
    color: white;
    padding: 15px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: -7px 2px;
    cursor: pointer;
	font-family: Cambria;
}//botton color 
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body bgcolor="#bde3ff"> 
<h3 align="right"><?php echo $objResult["Status"];?>
<h3 align="right"><?php echo $objResult["txtName"];?>&nbsp;<?php echo $objResult["txtLastName"];?></h3>

<h5 align="right">Classcode : <?php echo $_SESSION["Classcode"];?> Classname : <?php echo $_SESSION["Classname"];?></h5>
<?php
if($objResult["Status"] == "TEACHER"){
	?>
<a href="t_page.php" target="new"><p align="right">Home</a>
<?php
}
else{
?>
<a href="s_page.php" target="new"><p align="right">Home</a>
<?php
}
?>
<a href="edit_profile.php" target="new">Edit</a>
  <a href="logout.php" target="new">Logout</p></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="announcement_s.php"target="mainFrame"> <input  type="submit" value="Announcement" align="center"    class="button" ></a>
<a href="calendar_s.php"target="mainFrame">			<input  type="submit" value="Calendar"		 align="center"    class="button" ></a>
<a href="work_s.php"target="mainFrame">			<input type="submit" value="Work"		 align="center"    class="button" ></a>
<a href="student_frame_s.php"target="mainFrame"><input type="submit" value="Student" 	 align="center"    class="button" ></a>
<a href="studentnew.php"target="mainFrame">			<input type="submit" value="Attendance" 		 align="center"    class="button" ></a>
<a href="file_s.php"target="mainFrame">			<input  value="File"	type="submit"	 align="center"    class="button" ></a>
<a href="chatroom.php"target="mainFrame">			<input  value="Chatroom" 	type="submit"	 align="center"    class="button" ></a>
<a href="main_webboard.php"target="mainFrame">			<input  value="Blog" 	type="submit"	 align="center"    class="button" ></a>
</body>
</html>
