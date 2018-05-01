<html>
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
<style>
	body { background-color:#98AFC7;
	font-family:Cambria;
	color:#5C5858;	
	font-size:50;
	text-align:center;
	margin-left: auto;
    	margin-right: auto;
  	width: 10em
	}
	table{ font-size:30;
	background-color:white;}
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
	cursor: pointer;}
	
</style>
</head>

<body>
<div style="background:#F9F8F6;">
<form name="form1" method="post" action="check_login.php" >

  Teacher login<br>
  <p align="center"><table border="1" style="width: 300px">
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
  </table></p>
  <br>
<center>
<div class="g-recaptcha" data-sitekey="6LeZplQUAAAAALXszTnH_i87575bZCALARGj7pG4"></div>
</center>
<input type="submit" name="Submit" value="Login" class="button"></form>

<form name="form2" method="post" action="register.php">
<input type="submit" name="Register" value="Register" class="button">


</form>
</div>
</body>
</html>
