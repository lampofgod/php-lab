<?php
session_start(); 
$UserID=$_SESSION['UserID'];
$Classname=$_SESSION['Classname'];
$txtName=$_SESSION['txtName'];
$txtLastName=$_SESSION['txtLastName'];
include 'connection.php';

$query = "SELECT * FROM shouts WHERE Classname = '".$Classname."' ORDER BY id DESC";
$shouts = mysqli_query($con,$query);

?>


<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
 <link rel=stylesheet href="style.css" type="text/css" />
 </head>
 <body>
 <div id="container">
 <header>
 <h1>WELCOME TO CHATBOX</h1>
 </header>
 <div id="shouts">

 <ul>
 <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
<li class="shout"><span><?php echo $row['time'];?></span> - <strong><?php echo $row['user'];?></strong>: <?php echo $row['message'];?></li>
 <?php endwhile; ?>
 </ul>
 </div>

<div id="input">
<?php if(isset($_GET['error'])) : ?>
<div class="error"><?php echo $_GET['error']; ?></div>
<?php endif; ?>
<form name="form1" method="post" action="process.php" >
<!--<input type="text" name="user" placeholder="พิมพ์ชื่อ"/>-->
<input type="text" name="message" placeholder="พิมพ์ข้อความ"/>
<br/>
<input type="submit" name="Submit" value="Send" align="center" class="button" width="400" height="200"> 
<!--<input class="shout-btn" type="submit" name="submit" value="กดส่งข้อความ" />-->
</form>
</div>
</div>
</body>
</html>
