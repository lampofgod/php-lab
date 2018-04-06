<html>

<body>
<form name="form1" method="post" action="check_login.php">
  Student login<br>
  <table border="1" style="width: 300px">
    <tbody>
      <tr>
        <td> &nbsp;Username</td>
        <td>
          <input name="txtUsername" type="text" id="txtUsername">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Password</td>
        <td><input name="txtPassword" type="password" id="txtPassword">
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="Login">
</form>
<form name="form2" method="post" action="register.php">
<input type="submit" name="Register" value="Register">
</form>
</body>
</html>
