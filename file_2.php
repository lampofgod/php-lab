<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
<style>
	table{	font-family:cambria;
		background-color:#F9F8F6;
	}
</style>
</head>
<body bgcolor="#00004A">
<center>
<?php
	include('connection.php'); 
$query = "SELECT * FROM uploadfile ORDER BY fileID asc" or die("Error:" . mysqli_error()); 
$result = mysqli_query($con, $query);
?>
<table width="600" border="1">
<tr>
<th width="50" bgcolor="#E5E4E2"> <div align="center">Files ID</div></th>
<th width="550"> <div align="center">Files Name</div></th>
</tr>
<?php
	while($row = mysqli_fetch_array($result))
	{
?>
<tr>
<td bgcolor="#E5E4E2"><div align="center"><?php echo $row["fileID"];?></div></td>
<td><a href="fileupload/<?php echo $row["fileupload"];?>"><?php echo $row["fileupload"];?></a></td>
</tr>
<?php
	}
?>
</table>
<?php
mysqli_close($con);
?>
</body>
</center>
</html>
