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
<body bgcolor="#bde3ff">
<form name="form1" method="post" action="save_register.php" >
<p align="center">
  <img src="1.png" VSPACE="80" ></img> </center>
  <table width="400" border="1" style="width: 400px" align="center" bgcolor="white">
    <tbody>
      <tr>
        <td width="125"> &nbsp;Username</td>
        <td width="180">
          <input name="txtUsername" type="text" id="txtUsername" size="20">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Password</td>
        <td><input name="txtPassword" type="password" id="txtPassword">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Confirm Password</td>
        <td><input name="txtConPassword" type="password" id="txtConPassword">
        </td>
      </tr>
      <tr>
        <td>&nbsp;Name</td>
        <td><input name="txtName" type="text" id="txtName" size="35"></td>
      </tr>
      <tr>
        <td> &nbsp;Last name</td>
        <td><input name="txtLastname" type="text" id="txtLastname">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Status</td>
        <td>
            <input type="radio" name="gender" value="TEACHER">Teacher<br>
          <input type="radio" name="gender" value="STUDENT">Student<br>
</td>
      </tr>
      <tr>
        <td> &nbsp;Age</td>
        <td><input name="intAge" type="text" id="intAge">
        </td>
      </tr>
      <tr>
        <td> &nbsp;School / University</td>
        <td><input name="txtUniversity" type="text" id="txtUniversity">
        </td>
      </tr>
      <tr>
        <td> &nbsp;E-mail</td>
        <td><input name="txtEmail" type="email" id="txtEmail">
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="Save" align="center" class="button"> 
  <input type="reset" name="Reset" value="Reset" align="center" class="button">
</form>
</body>
</html>
