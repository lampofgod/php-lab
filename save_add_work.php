<meta charset="UTF-8">
<?php
include('connection.php'); 
$fileupload = $_REQUEST['fileupload']; 
date_default_timezone_set("Asia/Bangkok");
$date = date("d-m-Y"); 
$upload=$_FILES['fileupload'];
if(trim($_POST["topic"]) == "")
	{
		echo "Please input topic !";
		exit();	
	}
if(trim($_POST["content"]) == "")
	{
		echo "Please input content !";
		exit();	
	}
if($upload <> '') {   
$path="myfile/";  
	$remove_these = array(' ','`','"','\'','\\','/','_');
	$newname = str_replace($remove_these, '', $_FILES['fileupload']['name']);
 
	$newname = time().'_'.$newname;
$path_copy=$path.$newname;
$path_link="myfile/".$newname;

move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);  	
	}
	
		$sql = "INSERT INTO work (fileupload,topic,content) 
		VALUES('$newname','".$_POST["topic"]."', '".$_POST["content"]."')";
		
		$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($con);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Upload File Succesfuly');";
	echo "window.close()";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to upload again');";
	echo "</script>";
}
?>