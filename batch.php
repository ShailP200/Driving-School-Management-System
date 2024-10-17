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
                         <!--   <a href="attendance.php" class="nav-item nav-link">Attandance</a> -->
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
$fl=0;
if(isset($_POST['sbm']))
{
$sb=$_POST['sbm'];
if($sb=="Submit" ||$sb=="Update")
{
if(empty($_POST['bid']))
{
$er1="batch id must exist";
$fl=1;
}
if(empty($_POST['vc']))
{
$er2="vehicle class must exist";
$fl=1;
}
if(empty($_POST['sd']))
{
$er3="start date must exist";
$fl=1;
}
if(empty($_POST['ed']))
{
$er4="end date must exist";
$fl=1;
}
if(empty($_POST['ft']))
{
$er5="from time must exist";
$fl=1;
}
if(empty($_POST['tt']))
{
$er6="to time must exist";
$fl=1;
}
if(empty($_POST['dc']))
{
$er7="driver code must exist";
$fl=1;
}
if(empty($_POST['cap']))
{
$er8="capacity must exist";
$fl=1;
}
if(strlen($_POST['occ'])==0)
{
$er9="occupy must exist";
$fl=1;
}
}
}
$dt=date('Y-m-d');
$cn=mysql_connect("localhost","root");
mysql_select_db("driving",$cn);
$sql="select count(*) from batch";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row>0)
{
$sql="select max(batchid) from batch";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
$bi=$row[0]+1;
}
else
$bi=1;
$c="0 ";
?>
<html>
<head>
<title>batch</title>
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
<form name=frm method=post action=batch.php>
<center>
<caption align="top">Batch's information</caption>
<table cellspacing=10 cellpadding=10>
<tr>
<td>batch id</td>
<td><input type=number name=bid value=<?php echo $bi; ?> ><font color=red>*</font><?php echo $er1; ?></td>
</tr>
<tr>
<td>vehicle class</td>
<td><select name=vc><font color=red>*</font>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("driving",$cn);
$sql="select distinct vehclass from vehicle";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<option value=$row[0]>$row[0]</option>";
}
?>
</select>
</td>
</tr>
<tr>
<td>start date</td>
<td><input type=date name=sd value=<?php echo $dt; ?>><font color=red>*</font><?php echo $er3; ?></td>
</tr>
<tr>
<td>end date</td>
<td><input type=date name=ed value=<?php echo $dt; ?>><font color=red>*</font><?php echo $er4; ?></td>
</tr>
<tr>
<td>from time</td>
<td><input type=text name=ft><font color=red>*</font><?php echo $er5; ?></td>
</tr>  
<tr>
<td>to time</td>
<td><input type=text name=tt><font color=red>*</font><?php echo $er6; ?></td>
</tr>
<tr>
<td>Driver Code</td>
<td><select name=dc><font color=red>*</font>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("driving",$cn);
$sql="select dcode from driver";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<option value=$row[0]>$row[0]</option>";
}
?>
</select>
</td>
</tr>
<tr>
<td>capacity</td>
<td><input type=number name=cap onkeypress=val1()><font color=red>*</font><?php echo $er8; ?></td>
</tr>  
<tr>
<td>occupy</td>
<td><input type=text name=occ value=<?php echo $c; ?>><font color=red>*</font><?php echo $er9; ?></td>
</tr>  
<tr>
<td>batch type</td>
<td>
<select name=bt>
<option value=male>male</option>
<option value=female>female</option>
</select>
</td>
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
$sql = "insert into batch values('$_POST[bid]','$_POST[vc]', '$_POST[sd]', '$_POST[ed]', '$_POST[ft]', '$_POST[tt]', '$_POST[dc]', '$_POST[cap]', '$_POST[occ]', '$_POST[bt]')";
mysql_query($sql, $cn);
echo "Data stored";			
}
}
else if($sb == "Update")
{
if($fl==0)
{
$sql = "update batch set vehclass = '$_POST[vc]', stdate = '$_POST[sd]', enddate = '$_POST[ed]', fromtime = '$_POST[ft]', totime = '$_POST[tt]', dcode = '$_POST[dc]', capacity = '$_POST[cap]', occupy = '$_POST[occ]', btype ='$_POST[bt]' where batchid ='$_POST[bid]'";
mysql_query($sql, $cn);
echo "Data Updated";
}
}
else if($sb == "Delete")
{
$sql = "delete from batch where batchid ='$_POST[bid]'";
mysql_query($sql, $cn);
echo "Data Deleted";
}
else if($sb == "Display")
{
$sql = "select * from batch";
$result=mysql_query($sql, $cn);
echo "<center><table border=1>";
echo "<caption>batch information</caption>";
echo "<tr>";
echo "<th>batch id</th>";
echo "<th>vehicle class</th>";
echo "<th>start date</th>";
echo "<th>end date</th>";	
echo "<th>from time</th>";
echo "<th>to time</th>"; 
echo "<th>driver code</th>";
echo "<th>capacity</th>";
echo "<th>occupy</th>";
echo "<th>batch type</th>";
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
echo "</tr>";
}
echo "</table></center>";
}
else if($sb == "Search")
{
$sql = "select * from batch where batchid ='$_POST[bid]'";
$result=mysql_query($sql, $cn);
echo "<center><table border=1>";
echo "<caption>batch information</caption>";
echo "<tr>";
echo "<th>batch id</th>";
echo "<th>vehicle class</th>";
echo "<th>start date</th>";
echo "<th>end date</th>";	
echo "<th>from time</th>";
echo "<th>to time</th>"; 
echo "<th>driver code</th>";
echo "<th>capacity</th>";
echo "<th>occupy</th>";
echo "<th>batch type</th>";
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
echo "</tr>";
}
echo "</table></center>";
}
}
?>