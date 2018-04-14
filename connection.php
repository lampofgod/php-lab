<?php
 define('servername','webservhost');
define('username','lampofgod_lamp');
define('password','025179750');
define('dbname','lampofgod_lamp');
$con=mysqli_connect(servername,username,password,dbname);
mysqli_query($con, "SET NAMES 'utf8' ");
 
?>