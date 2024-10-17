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
                                <a href="indexadmin.html" class="nav-item nav-link active">Home</a>
                                <a href="vehicle.php" class="nav-item nav-link">Vehicle</a>
                                <a href="driver.php" class="nav-item nav-link">Driver</a>
                                <a href="fees.php" class="nav-item nav-link">Fees</a>
                                <a href="Batch.php" class="nav-item nav-link">Batch</a>
                           <!-- <a href="attendance.php" class="nav-item nav-link">Attandance</a> -->
                                <a href="expenditive.php" class="nav-item nav-link">Expenditure</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Reports</a>
                                    <div class="dropdown-menu">
                                        <a href="vehiclereport.php" class="dropdown-item">Vehicle</a>
                                        <a href="driverreport.php" class="dropdown-item">Driver</a>
                                        <a href="feesreport.php" class="dropdown-item">Fees</a>
                                        <a href="batchreport.php" class="dropdown-item">Batch</a>
                                        <a href="attendancereport.php" class="dropdown-item">Attendance</a>
                                        <a href="expenditivereport.php" class="dropdown-item">Expenditure</a>
                                        <a href="studentreport.php" class="dropdown-item">Student</a>
                                    </div>
                                </div>
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
$er5="";
$er6="";
$er7="";
$er8="";
$er9="";
$er10="";
$er11="";

$fl=0;
if(isset($_POST['sbm']))
{
$sb=$_POST['sbm'];
if($sb=="Submit" ||$sb=="Update")
{
if(empty($_POST['dc']))
{
$er1="Driver Code must exist";
$fl=1;
}
if(empty($_POST['dn']))
{
$er2="Driver Name must exist";
$fl=1;
}
if(empty($_POST['da']))
{
$er3="address must exist";
$fl=1;
}
if(empty($_POST['dct']))
{
$er4="City must exist";
$fl=1;
}
if(empty($_POST['dcn']))
{
$er5="Contact No. must exist";
$fl=1;
}
if(empty($_POST['dm']))
{
$er6="emailid must exist";
$fl=1;
}
if(empty($_POST['dg']))
{
$er7="Gender must exist";
$fl=1;
}
if(empty($_POST['dage']))
{
$er8="Age must exist";
$fl=1;
}
if(empty($_POST['de']))
{
$er9="Experience must exist";
$fl=1;
}
if(empty($_POST['ps']))
{
$er10="password must exist";
$fl=1;
}
if(empty($_POST['ls']))
{
$er11="license no. must exist";
$fl=1;
}
}
}
?>
<html>
<head>
<title>Driver Information</title>
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
<form  name= frm3 method=POST action=driver.php>
<center>
<caption align="top">Driver's Informaton</caption>
<table cellspacing= 7 cellpadding= 7>

<tr>
<td>Driver Code :</td>
<td><input type="text" name="dc"><font color=red>*</font><?php echo $er1; ?></td>
</tr>
<tr>
<td>Driver Name :</td>
<td><input type="text" name="dn"><font color=red>*</font><?php echo $er2; ?></td>
</tr>
<tr>
<td>driver Address :</td>
<td><input type="text " name="da"><font color=red>*</font><?php echo $er3; ?></td>
</tr>
<tr>
<td>City : </td>
<td><input type="text" name="dct"><font color=red>*</font><?php echo $er4; ?></td>
</tr>
<tr>
<td>Contact No.:</td>
<td><input type="text" name="dcn" onkeypress=val1()><font color=red>*</font><?php echo $er5; ?></td>
</tr>
<tr>
<td>Email Id :</td>
<td><input type="email" name="dm"><font color=red>*</font><?php echo $er6; ?></td>
</tr>
<tr>
<td>Gender :</td>
<td><input type="radio" name="dg" value=male>male
<input type="radio" name="dg" value=female>female<font color=red>*</font><?php echo $er7; ?></td>
</tr>
<tr>
<td>Age :</td>
<td><input type="number" name="dage" onkeypress=val1()><font color=red>*</font><?php echo $er8; ?></td>
</tr>
<tr>
<td>Experience :</td>
<td><input type="number" name="de" onkeypress=val1()><font color=red>*</font><?php echo $er9; ?></td>
</tr>
<tr>
<td>License No. :</td>
<td><input type="text" name="ls" ><font color=red>*</font><?php echo $er11; ?></td>
</tr>
<tr>
<td>Password :</td>
<td><input type="text" name="ps"><font color=red>*</font><?php echo $er10; ?></td>
</tr>
</table>
<input type="submit" name="sbm" value="Submit">
<input type="submit" name="sbm" value="Update">
<input type="submit" name="sbm" value="Delete">
<input type="submit" name="sbm" value="Display">
<input type="submit" name="sbm" value="Search">
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
$sql = "insert into driver values('$_POST[dc]', '$_POST[dn]', '$_POST[da]', '$_POST[dc]', '$_POST[dcn]]', '$_POST[dm]', '$_POST[dg]', '$_POST[dage]', '$_POST[de]', '$_POST[ps]', '$_POST[ls]')";
mysql_query($sql, $cn);
echo "Data stored";			
}
}
else if($sb == "Update")
{
if($fl==0)
{
$sql = "update driver set drname = '$_POST[dn]', daddr = '$_POST[da]', city = '$_POST[dct]', contno = '$_POST[dcn]', emailid = '$_POST[dm]', gender = '$_POST[dg]', age = '$_POST[dage]', exp = '$_POST[de]', password='$_POST[ps]',licno='$_POST[ls]' where dcode = '$_POST[dc]'";
mysql_query($sql, $cn);
echo "Data Updated";
}
}
else if($sb == "Delete")
{
if($fl==0)
{
$sql = "delete from driver where dcode = '$_POST[dc]'";
mysql_query($sql, $cn);
echo "Data Deleted";
}
}
else if($sb == "Display")
{
$sql = "select * from driver";
$result=mysql_query($sql, $cn);
echo "<center><table border=1>";
echo "<caption>driver information</caption>";
echo "<tr>";
echo "<th>dr code</th>";
echo "<th>dr name</th>";
echo "<th>address</th>";
echo "<th>city</th>";
echo "<th>contact no</th>";
echo "<th>email id</th>";
echo "<th>gender</th>";
echo "<th>age</th>";
echo "<th>experience</th>";
echo "<th>password</th>";
echo "<th>licno</th>";
echo "</tr>";

while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "<td>$row[8]</td>";
echo "<td>$row[9]</td>";
echo "<td>$row[10]</td>";
echo "</tr>";
}
echo "</table></center>";
}

else if($sb == "Search")
{
$sql = "select * from driver where dcode='$_POST[dc]'";
$result=mysql_query($sql, $cn);
echo "<center><table border=1>";
echo "<caption>driver information</caption>";
echo "<tr>";
echo "<th>dr code</th>";
echo "<th>dr name</th>";
echo "<th>address</th>";
echo "<th>city</th>";
echo "<th>contact no</th>";
echo "<th>email id</th>";
echo "<th>gender</th>";
echo "<th>age</th>";
echo "<th>experience</th>";
echo "<th>password</th>";
echo "<th>licno</th>";

echo "</tr>";

while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "<td>$row[8]</td>";
echo "<td>$row[9]</td>";
echo "<td>$row[10]</td>";
echo "</tr>";
}
echo "</table></center>";
}
}
?>