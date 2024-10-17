<?php
session_start();
$_SESSION['prbatid']=$_GET['batchid'];
header("location:http://localhost/driving/datepresenty.php");
?>