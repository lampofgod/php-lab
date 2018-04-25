
<?php
	define('servername', 'webservhost');
	define('username', 'rung_0129rung');
	define('password', 'Kittima1');
	define('db_name', 'rung_kittima');

	$mysqli=mysqli_connect(servername,username,password,db_name);
if($mysqli->connect_error){
	printf("Connect failed: %s\n",$mysqli->connect_error);
	exit;
}
?>