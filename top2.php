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
}//botton color 
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body bgcolor="#bde3ff"> 
<h3 align="right"><?php echo $objResult["Status"];?>
<h3 align="right"><?php echo $objResult["txtName"];?>&nbsp;<?php echo $objResult["txtLastName"];?></h3>
<?php
$strSQL2 = "SELECT * FROM classroom WHERE Classcode = '".$_GET["Classcode"]."' ";
$objQuery2 = mysqli_query($objCon,$strSQL2) or die ("Error Query [".$strSQL2."]");
$objResult2 = mysqli_fetch_array($objQuery2);
?>	
<h5 align="right">Classcode : <?php echo $_SESSION["Classcode"];?> Classname : <?php echo $_SESSION["Classname"];?></h5>
<a href="t_page.php" target="new"><p align="right">Home</a>
<a href="edit_profile.php" target="new">Edit</a>
  <a href="logout.php" target="new">Logout</p></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="announcement.php"target="mainFrame">		<input type="submit"  value="Announcement" align="center"    class="button" "></a>
<a href="calendar.php"target="mainFrame">		<input type="submit" value="Calendar"		 align="center"    class="button" ></a>
<a href="work.php"target="mainFrame">			<input  type="submit" value="Work"		 align="center"    class="button" ></a>
<a href="student_frame.php"target="mainFrame">		<input type="submit" value="Student" 	 align="center"    class="button" ></a>
<a href="teacherdate.php"target="mainFrame">        	<input type="submit" value="Attendance"         align="center"    class="button" ></a>
<a href="file.php"target="mainFrame">			<input type="submit" value="File"		 align="center"    class="button" ></a>
<a href="chatroom.php"target="mainFrame">		<input type="submit" value="Chatroom" 		 align="center"    class="button" ></a>
<a href="main_webboard.php"target="mainFrame">		<input type="submit" value="Blog" 		 align="center"    class="button" ></a>
</body>
</html>

