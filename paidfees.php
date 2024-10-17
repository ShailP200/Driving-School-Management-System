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
                                <a href="index.html">
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
                                <a href="indexclient.html" class="nav-item nav-link active">Home</a>
                                <a href="prestud.php" class="nav-item nav-link">Registration</a>
                                <a href="paidfees.php" class="nav-item nav-link">Pay Fees</a>
                                <a href="stud_fees.php" class="nav-item nav-link">Report</a>
                                <a href="aboutus.php" class="nav-item nav-link">About US</a>
                                <a href="contactus.php" class="nav-item nav-link">Contact US</a>

                                <a href="login.php" class="nav-item nav-link">Logout</a>
                            </div>
                           
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
            
                      

<?php
$er1="";
$er2="";
$er3="";
$er4="";
$fl=0;
if(isset($_POST['sbm']))
{
$sb=$_POST['sbm'];
if($sb=="Submit" ||$sb=="Update")
{
if(empty($_POST['vid']))
{
$er1="voucher id must exist";
$fl=1;
}
if(empty($_POST['vd']))
{
$er2="voucher date must exist";
$fl=1;
}
if(empty($_POST['eid']))
{
$er3="enroll id must exist";
$fl=1;
}
if(empty($_POST['fe']))
{
$er4="fees amount must exist";
$fl=1;
}
}
}
session_start();
$cn=mysql_connect("localhost","root");
mysql_select_db("driving",$cn);
$sql="select count(*) from paidfees";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row>0)
{
$sql="select max(vid) from paidfees";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
$vn=$row[0]+1;
}
else
$vn=1;
$en=$_SESSION['enroll'];
$dt=date('Y-m-d');
$sql="select * from student where enrollid='$en'";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
$bal=$row[12];
?>
<html>
<head>
<title>paid fees</title>
<script language=javascript>
function val1()
{
var x;
x=event.keyCode;
if(x>=48 && x<=57)
event.keyCode=event.keyCode;
else
event.keyCode=0;
}
function val2()
{
var x;
x=event.keyCode;
if(x>=65 && x<=90)
event.keyCode=event.keyCode;
else
event.keyCode=0;
}
</script>
</head>
<body>
<form name=frm method=post action=paidfees.php>
<center>
<caption>Pay fees</caption>
<table cellspacing=10 cellpadding=10>
<tr>
<td>voucher id</td>
<td><input type=number name=vid onkeypress=val1() value=<?php echo $vn; ?>><font color=red>*</font><?php echo $er1; ?></td>
</tr>
<tr>
<td>voucher date</td>
<td><input type=date name=vd value=<?php echo $dt; ?>><font color=red>*</font><?php echo $er2; ?></td>
</tr>
<tr>
<td>enrollid</td>
<td><input type=number name=eid value=<?php echo $en; ?>><font color=red>*</font><?php echo $er3; ?></td>
</tr>
<tr>
<td>fees</td>
<td><input type=number name=fe value=<?php echo $bal;?> onkeypress=val1()><font color=red>*</font><?php echo $er4; ?></td>
</tr>
</table>
<input type="submit" name="sbm" value="Submit">

</center>
</form>
</body>
</html>
<?php
if(isset($_POST['sbm']))
{
$cn = mysql_connect("localhost", "root");
mysql_select_db("driving", $cn);	
		
$sb = $_POST["sbm"];
if($sb == "Submit")
{
if($fl==0)
{
$sql = "insert into paidfees values('$_POST[vid]', '$_POST[vd]', '$_POST[eid]', '$_POST[fe]')";
mysql_query($sql, $cn);
$sql="update student set balfees=balfees-'$_POST[fe]' where enrollid='$_POST[eid]'";
mysql_query($sql,$cn);
echo "Data stored";			
}
}
else 
if($sb == "Update")
{
if($fl==0)
{
$sql = "update paidfees set vdate = '$_POST[vd]', enrollid = '$_POST[eid]', fees = '$_POST[fe]' where vid = '$_POST[vid]'";
mysql_query($sql, $cn);
echo "Data Updated";
}
}
else if($sb == "Delete")
{
$sql = "delete from paidfees where vid = '$_POST[vid]'";
mysql_query($sql, $cn);
echo "Data Deleted";
}
else if($sb == "Display")
{
$sql = "select * from paidfees";
$result=mysql_query($sql, $cn);
echo "<center><table border=1>";
echo "<caption>paid fees information</caption>";
echo "<tr>";
echo "<th>voucher id</th>";
echo "<th>voucher date</th>";
echo "<th>enroll id</th>";
echo "<th>fees</th>";
echo "</tr>";

while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "</tr>";
}
echo "</table></center>";
}
else if($sb == "Search")
{
$sql = "select * from paidfees where vid='$_POST[vid]'";
$result=mysql_query($sql, $cn);
echo "<center><table border=1>";
echo "<caption>paid fees information</caption>";
echo "<tr>";
echo "<th>voucher id</th>";
echo "<th>voucher date</th>";
echo "<th>enroll id</th>";
echo "<th>fees</th>";
echo "</tr>";

while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "</tr>";
}
echo "</table></center>";
}
}
?>
