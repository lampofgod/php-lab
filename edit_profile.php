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
	$objResult = mysqli_fetch_array($objQuery);
?>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<form name="form1" method="post" action="save_profile.php">
  Edit Profile! <br>
  <table width="400" border="1" style="width: 400px">
    <tbody>
      <tr>
        <td width="125"> &nbsp;UserID</td>
        <td width="180">
          <?php echo $objResult["UserID"];?>
        </td>
      </tr>
      <tr>
        <td> &nbsp;Username</td>
        <td>
          <?php echo $objResult["txtUsername"];?>
        </td>
      </tr>
      <tr>
        <td> &nbsp;Password</td>
        <td><input name="txtPassword" type="password" id="txtPassword" value="<?php echo $objResult["txtPassword"];?>">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Confirm Password</td>
        <td><input name="txtConPassword" type="password" id="txtConPassword" value="<?php echo $objResult["txtPassword"];?>">
        </td>
      </tr>
      <tr>
        <td>&nbsp;Name</td>
        <td><input name="txtName" type="text" id="txtName" value="<?php echo $objResult["txtName"];?>"></td>
      </tr>
      <tr>
        <td>&nbsp;Last name</td>
        <td><input name="txtLastname" type="text" id="txtLastname" value="<?php echo $objResult["txtLastname"];?>"></td>
      </tr>
      <tr>
        <td>&nbsp;Age</td>
        <td><input name="intAge" type="text" id="intAge" value="<?php echo $objResult["intAge"];?>"></td>
      </tr>
      <tr>
        <td>&nbsp;School or University</td>
        <td><input name="txtUniversity" type="text" id="txtUniversity" value="<?php echo $objResult["txtUniversity"];?>"></td>
      </tr>
      <tr>
        <td>&nbsp;E-mail</td>
        <td><input name="txtEmail" type="text" id="txtEmail" value="<?php echo $objResult["txtEmail"];?>"></td>
      </tr>
      <tr>
        <td> &nbsp;Status</td>
        <td>
          <?php echo $objResult["Status"];?>
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="Save">
</form>
</body>
</html>
<?php
	mysqli_close($objCon);
?>