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
            
            
<html>
<head>
<title>fees</title>
</head>
<body>
<form name=frm method=post action=feesreport.php>
<center>
<h1>Fees report</h1>
<input type="submit" name="sbm" value="Display">
</center>
</form>
</body>
</html>
<?php
if(isset($_POST['sbm']))
{
$cn= mysql_connect("localhost","root");
mysql_select_db("driving",$cn);
$sb =$_POST["sbm"];
if($sb == "Display")
{
$sql = "select * from fees";
$result=mysql_query($sql, $cn);
echo "<center><table border=1>";
//echo "<caption>fees information</caption>";
echo "<tr>";
echo "<th>serialno</th>";
echo "<th>vehicle class</th>";
echo "<th>total fees</th>";
echo "<th>license fees</th>";
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
echo "<br></table></center>";
}		
}
?>