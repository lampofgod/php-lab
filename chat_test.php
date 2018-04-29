<?php

include 'connection.php';

$query = "SELECT * FROM shouts ORDER BY id DESC";
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
 <h1>กล่องข้อความ</h1>
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
<input type="text" name="user" placeholder="พิมพ์ชื่อ"/>
<input type="text" name="message" placeholder="พิมพ์ข้อความ"/>
<br/>
<input type="submit" name="Submit" value="Save" align="center" class="button"> 
<!--<input class="shout-btn" type="submit" name="submit" value="กดส่งข้อความ" />-->
</form>
</div>
</div>
</body>
</html>