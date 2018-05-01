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
<style>
.button {
    background-color: #0e5285;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}//botton color

</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body bgcolor="#98AFC7">
<form name="form1" method="post" action="save_profile.php">
  <center><img src="editpro.png" VSPACE="50" ></center></img><br>
  <table width="400" border="1" style="width: 400px" bgcolor="white" color="#0e5285" align="center">
    <tbody>
      <tr>
        <td width="125" align="center"><b> &nbsp;UserID</b></td>
        <td width="180">
          <?php echo $objResult["UserID"];?>
        </td>
      </tr>
      <tr>
        <td align="center"><b> &nbsp;Username</b></td>
        <td>
          <?php echo $objResult["txtUsername"];?>
        </td>
      </tr>
      <tr>
        <td align="center"><b> &nbsp;Password</b></td>
        <td><input name="txtPassword" type="password" id="txtPassword" value="<?php echo $objResult["txtPassword"];?>">
        </td>
      </tr>
      <tr>
        <td align="center"><b> &nbsp;Confirm Password</b></td>
        <td><input name="txtConPassword" type="password" id="txtConPassword" value="<?php echo $objResult["txtPassword"];?>">
        </td>
      </tr>
      <tr>
        <td align="center"><b>&nbsp;Name</b></td>
        <td><input name="txtName" type="text" id="txtName" value="<?php echo $objResult["txtName"];?>"></td>
      </tr>
      <tr>
        <td align="center"><b>&nbsp;Last name</b></td>
        <td><input name="txtLastname" type="text" id="txtLastname" value="<?php echo $objResult["txtLastname"];?>"></td>
      </tr>
      <tr>
        <td align="center"><b>&nbsp;Age</b></td>
        <td><input name="intAge" type="text" id="intAge" value="<?php echo $objResult["intAge"];?>"></td>
      </tr>
      <tr>
        <td align="center"><b>&nbsp;School or University</b></td>
        <td><input name="txtUniversity" type="text" id="txtUniversity" value="<?php echo $objResult["txtUniversity"];?>"></td>
      </tr>
      <tr>
        <td align="center"><b>&nbsp;E-mail</b></td>
        <td><input name="txtEmail" type="text" id="txtEmail" value="<?php echo $objResult["txtEmail"];?>"></td>
      </tr>
      <tr>
        <td align="center"><b> &nbsp;Status</b></td>
        <td>
          <?php echo $objResult["Status"];?>
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <center><input type="submit" name="Submit" value="Save" class="button"></center>
</form>
</body>
</html>
<?php
	mysqli_close($objCon);
?>
