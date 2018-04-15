<html>
<body>
<form action="save_add_work.php" method="post" enctype="multipart/form-data" name="upfile" id="upfile">
<p style="font-family:cambria">Topic</p>
<input type="text" name="topic" id="topic" size="69"><br><br>

<p style="font-family:cambria">Content</p>
<TEXTAREA name="content" id="content" ROWS="15" COLS="65"></TEXTAREA><br><br>

  <p>&nbsp;</p>
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="40" colspan="2" align="center" bgcolor="#D6D6D6">Form Upload&nbsp;File</td>
    </tr>
    <tr>
      <td width="126" bgcolor="#EDEDED">&nbsp;</td>
      <td width="574" bgcolor="#EDEDED">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" bgcolor="#EDEDED">File Browser</td>
      <td bgcolor="#EDEDED"><label>
        <input type="file" name="fileupload" id="fileupload"  required="required"/>
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#EDEDED">&nbsp;</td>
      <td bgcolor="#EDEDED">&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>

<br/>

<input type="submit" value="Add">
</form>

</body>
</html>