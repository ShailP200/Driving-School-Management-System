<?php
session_start();
$_SESSION['batchid']=$_GET['batchid'];
$cn=mysql_connect("localhost","root");
mysql_select_db("driving",$cn);
$sql="select count(*) from student";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
{
$sql="select max(enrollid) from student";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
$en=$row[0]+1;
}
else
$en=1;
$_SESSION['enroll']=$en;
$vc=$_SESSION['vc'];
$sql="select * from fees where vehclass='$vc'";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
$tk=156;
$_SESSION['tk']=$tk;
$tf=$row[2];
$lf=$row[3];
$_SESSION['tf']=$tf;
$_SESSION['lf']=$lf;
echo "$tf,$lf";
header("location:http://localhost/driving/student.php");
?>