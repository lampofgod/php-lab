
 <?
if ($_POST[mes] <>"")
{
$hostname="webservhost";
$user="boatboth_0372";
$password="0811430565";
$dbname="boatboth_0372";
$connect=mysql_connect($hostname,$user,$password) or die("cannot connect");
$db=mysql_select_db($dbname)or die("cannot connect database!");
$sql="INSERT INTO chatroom ( mes)VALUES ('$_POST[mes]');";
$dbquery=mysql_db_query($dbname,$sql);
}
?>
<html >
<head>
<META HTTP-EQUIV="REFRESH" CONTENT="20">
<? //<META HTTP-EQUIV="REFRESH" CONTENT="5">REFRESH ทุก 5 วินาที ?>
<title>CHAT BOX</title>
</head>

<body>
<table width="70%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr><td width="126" bgcolor="#FF9999">WELCOME TO CHATBOX</td></tr>
<tr>
<th bgcolor="#FFDDDD" scope="row"><form name="form2" method="post" action="<?=$PHP_SELF;?>">
<label>
<div align="left">

<?
date_default_timezone_set("Asia/Bangkok"); 
$hostname="webservhost";
$user="boatboth_0372";
$password="0811430565";
$dbname="boatboth_0372";//ชื่อฐานข้อมูล
$connect=mysql_connect($hostname,$user,$password) or die("cannot connect");
$db=mysql_select_db($dbname)or die("cannot connect database!");
$sql="select * from chatroom order by id DESC limit 0,100";//เรียกข้อมูล
$dbquery=mysql_db_query($dbname,$sql);
$row=mysql_num_rows($dbquery);

while($result=mysql_fetch_array($dbquery)) {
$a[] = $result[mes]; //เก็บช้อความ 10 อันดับล่าสุดลงตัวแปร
$date[] = $result[dateup]; //เก็บวันเวลา
}

for($i=count($a)-1;$i>=0;$i--) {


 $date = date("Y-m-d");
    $time = date("H:i:s");
     
    echo $date." / ".$time;
echo ": ".$a[$i]."<br>";

}
?>


</div>
</label>
</form> </th>
</tr>
<tr>
<th scope="row"><form name="form1" method="post" action="">
<table width="88%" border="1" cellspacing="0" cellpadding="0">
<tr>
<th scope="row"><font size="2">ข้อความ</font></th>
<td><label>
<div align="center">
<input name="mes" type="text" id="mes" size="60">
</div>
</label></td>
<td><label>
<input name="Submit" type="submit" id="Submit" value="Send">
</label></td>
</tr>
</table>
</form> </th>
</tr>
</table>
</body>
</html>
