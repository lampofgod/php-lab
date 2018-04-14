<meta charset="UTF-8">
<?php
include('connection.php'); 
$fileupload = $_REQUEST['fileupload']; 
$date = date("d-m-Y"); 
$upload=$_FILES['fileupload'];
if($upload <> '') {   
$path="fileupload/";  
	$remove_these = array(' ','`','"','\'','\\','/','_');
	$newname = str_replace($remove_these, '', $_FILES['fileupload']['name']);
 
	$newname = time().'_'.$newname;
$path_copy=$path.$newname;
$path_link="fileupload/".$newname;

move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);  	
	}
	
		$sql = "INSERT INTO uploadfile (fileupload) 
		VALUES('$newname')";
		
		$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($con);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Upload File Succesfuly');";
	echo "window.location = 'uploadfile.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to upload again');";
	echo "</script>";
}
?>