<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Republic  
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20090910

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Republic by FCT</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">attendance monitoring   </a></h1>
			<p> </p>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index2.html">Home</a></li>
			<li><a href="preclass.php">presenty</a></li>
			<li><a href="index4.php">logout</a></li>
		</ul>
	</div>
	<!-- end #menu -->

<form name = frm method= post action=presenty1.php>
<center><table border=1>
<caption>presenty</caption>
<?php
session_start();
$cn=mysql_connect("localhost","root");
mysql_select_db("performance",$cn);
$sql="select rollno,name from student,teachersub where teachersub.tid='$_SESSION[uid]' and teachersub.class='$_SESSION[class]' and teachersub.subcode='$_SESSION[sub]' and student.class=teachersub.class order by student.rollno"; 
$result=mysql_query($sql,$cn);
echo "<tr>";
echo "<td>rollno</td>";
echo "<td>name</td>";
echo "<td>status</td>";
echo "</tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td><input type=text name=$row[0] value=P size=1></td>";
echo "</tr>";
}
?>
</table>
<input type=submit name=sbm value= submit>
</center>
</form>
</body>
</html>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("performance",$cn);
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root");
mysql_select_db("performance",$cn);
$sql1="select count(*) from presenty";
$result1=mysql_query($sql1,$cn);
$row1=mysql_fetch_array($result1);
if($row1[0]>0)
{
$sql1="select max(srno) from presenty";
$result1=mysql_query($sql1,$cn);
$row1=mysql_fetch_array($result1);
$sno=$row1[0]+1;
}
else
$sno=1;
$sql="select rollno,name from student,teachersub where teachersub.tid='$_SESSION[uid]' and teachersub.class='$_SESSION[class]' and teachersub.subcode='$_SESSION[sub]' and student.class=teachersub.class order by student.rollno"; 
$result=mysql_query($sql,$cn);
$dt=date('Y-m-d');
while($row=mysql_fetch_array($result))
{
$rr=$row[0];
$sql="insert into presenty values('$sno','$row[0]','$_SESSION[class]','$dt','$_POST[$rr]','$_SESSION[uid]','$_SESSION[sub]')";
mysql_query($sql,$cn);
$sno=$sno+1;
}
echo"data submitted";

$cn=mysql_connect("localhost","root");
mysql_select_db("performance",$cn);
$sql="select pemailid,name from student where class='msc1' and rollno in ( select rollno from presenty where class='msc1' group by rollno having count(*)>4)"; 
while($row=mysql_fetch_array($result))
{
$msg=$row[1]." is absent since last 5 lectures";
mail($row[0],"absenty in lectures",$msg);
}
$sql="select pemailid,name from student where class='msc2' and rollno in ( select rollno from presenty where class='msc2' group by rollno having count(*)>4)"; 
while($row=mysql_fetch_array($result))
{
$msg=$row[1]." is absent since last 5 lectures";
mail($row[0],"absenty in lectures",$msg);
}
}
?>
