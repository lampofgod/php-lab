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
    width: 12%;
    border: none;
    color: white;
    padding: 15px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: -7px 2px;
    cursor: pointer;
}//botton color 
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body bgcolor="#bde3ff"> 
<h3 align="right"><?php echo $objResult["Status"];?>
<h3 align="right"><?php echo $objResult["txtName"];?>&nbsp;<?php echo $objResult["txtLastName"];?></h3>

<h5 align="right">Classcode : <?php echo $_SESSION["Classcode"];?></h5>
<a href="edit_profile.php" target="new"><p align="right">Edit</a>
  <a href="logout.php" target="new">Logout</p></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="announcement_s.php"target="mainFrame"> <input  value="Announcement" align="center"    class="button" ></a>
<a href="work_s.php"target="mainFrame">			<input  value="Work"		 align="center"    class="button" ></a>
<a href="student_frame_s.php"target="mainFrame"><input  value="Student" 	 align="center"    class="button" ></a>
<a href="file_s.php"target="mainFrame">			<input  value="File"		 align="center"    class="button" ></a>
<a href="main_webboard.php"target="mainFrame">			<input  value="Blog" 		 align="center"    class="button" ></a>
</body>
</html>