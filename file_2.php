<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
<?php
	include('connection.php'); 
$query = "SELECT * FROM uploadfile ORDER BY fileID asc" or die("Error:" . mysqli_error()); 
$result = mysqli_query($con, $query);
?>
<table width="200" border="1">
<tr>
<th width="50"> <div align="center">Files ID </div></th>
<th width="150"> <div align="center">Files Name </div></th>
</tr>
<?php
	while($row = mysqli_fetch_array($result))
	{
?>
<tr>
<td><div align="center"><?php echo $row["fileID"];?></div></td>
<td><center><a href="fileupload/<?php echo $row["fileupload"];?>"><?php echo $row["fileupload"];?></a></center></td>
</tr>
<?php
	}
?>
</table>
<?php
mysqli_close($con);
?>
</body>
</html>