<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Devraj Motor Driving School</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Law Firm Website Template" name="keywords">
        <meta content="Law Firm Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="login.php">
                                    <h4><font color=gold>DEVRAJ MOTOR DRIVING SCHOOL</font> </h4>
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="top-bar-right">
                                <div class="text">
                                    <h2>09:00AM - 7:30PM</h2>
                                    <p>Opening Hour Mon - Sat</p>
                                </div>
                                <div class="text">
                                    <h2>+91 8888887870</h2>
                                    <p>Call Us for enquiry</p>
                                </div>
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="indexadmin.html" class="nav-item nav-link active">Home</a>         
				<a href="aboutlog.html" class="nav-item nav-link">About US</a>
                                <a href="contactlog.html" class="nav-item nav-link">Contact US</a>
                                </div>
                            </div>
                           
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
          
            
                      
<html>
<head>
<title>Login</title>
<head>
<body>
<form name=frm method=post>
<center>
<input type=radio name=r1 value=admin>admin
<input type=radio name=r1 value=student>student
<input type=radio name=r1 value=driver>driver
<br>
<caption>Login</caption>
<table cellspacing=5 cellpadding=5>
<tr>
<td><b>User ID</b></td>
<td><input type="text" name="uid"></td>
</tr>
<tr>
<td><b>Password</b></td>
<td><input type="password" name="pass"></td>
</tr>
</table>
<input type="submit" name="sbm" value="GO"><br>
<a href="user.php">new user?</a>
</table>
</center>
</form>
</body>
</html>

<?php
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root");
mysql_select_db("driving",$cn);
session_start();

if(isset($_POST['r1']))
{
$ut=$_POST['r1'];
if($ut=="admin")
{
if($_POST['uid']=="admin" && $_POST['pass']="admin")
header("location:http://localhost/driving/indexadmin.html");
}
else
if($ut=="student")
{
$sql="select count(*) from user where emailid='$_POST[uid]' and password='$_POST[pass]'";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
{
$sql="select enrollid from student where emailid='$_POST[uid]'";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);

$_SESSION['enroll']=$row[0];
header("location:http://localhost/driving/indexclient.html");
}
}
else
if($ut=="driver")
{
$sql="select count(*) from driver where dcode='$_POST[uid]' and password='$_POST[pass]'";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
{
$_SESSION['dcode']=$_POST['uid'];
header("location:http://localhost/driving/indexdriver.html");
}
}
}
else
echo "select user type";
}

?>