<html>
<body>
<BODY bgcolor="#E6E6FA">
<form action="save_add_work.php" method="post" enctype="multipart/form-data" name="upfile" id="upfile">
<p ><font face="Cambria" color="black" size="6">Topic</font></p>
<input name="topic" type="text" id="topic"><br><br>

<p><font face="Cambria" color="black" size="6">Content</font></p>
<TEXTAREA name="content" id="content" ROWS="15" COLS="65"></TEXTAREA><br><br>

  <p>&nbsp;</p>
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="40" colspan="2" align="center" bgcolor="#006699"><font face="Cambria" color="white" size="6">Form Upload&nbsp;File</font></td>
    </tr>
    <tr>
      <td width="126" bgcolor="#99CCCC">&nbsp;</td>
      <td width="574" bgcolor="#99CCCC">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" bgcolor="#99CCCC">File Browser</td>
      <td bgcolor="#99CCCC"><label>
        <input type="file" name="fileupload" id="fileupload"  required="required"/>
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#99CCCC">&nbsp;</td>
      <td bgcolor="#99CCCC">&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>

<br/>

<p align="center"><input type="submit" value="Add"></p>
</form>

</body>
</html>