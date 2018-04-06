<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<form name="form1" method="post" action="save_register.php">
  Register<br>
  <table width="400" border="1" style="width: 400px">
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
  <input type="submit" name="Submit" value="Save">
   
  <input type="reset" name="Reset" value="Reset">
</form>
</body>
</html>
