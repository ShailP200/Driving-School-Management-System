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
session_start();
$en=$_SESSION['enroll'];
$bi=$_SESSION['batchid'];
$gn=$_SESSION['gender'];
$vc=$_SESSION['vc'];
$tk=$_SESSION['tk'];
$tf=$_SESSION['tf'];
$lf=$_SESSION['lf'];
$dt=date('Y-m-d');
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
$er12="";
$er13="";
$er14="";
$er15="";
$er16="";
$er17="";
$er18="";
$fl=0;
if(isset($_POST['sbm']))
{
$sb=$_POST['sbm'];
if($sb=="Submit" ||$sb=="Update")
{
if(empty($_POST['eid']))
{
$er1="enrollid must exist";
$fl=1;
}
if(empty($_POST['nm']))
{
$er2="name must exist";
$fl=1;
}
if(empty($_POST['gen']))
{
$er3="gender must exist";
$fl=1;
}
if(empty($_POST['bd']))
{
$er4="birth date must exist";
$fl=1;
}
if(empty($_POST['addr']))
{
$er5="address must exist";
$fl=1;
}
if(empty($_POST['cn']))
{
$er6="contact must exist";
$fl=1;
}
if(empty($_POST['ei']))
{
$er7="email id must exist";
$fl=1;
}
if(empty($_POST['bf']))
{
$er12="balance fees must exist";
$fl=1;
}
if(empty($_POST['bid']))
{
$er13="batch id must exist";
$fl=1;
}
if(empty($_POST['vc']))
{
$er14="vehicle class must exist";
$fl=1;
}
if(empty($_POST['el']))
{
$er15="exist license amount must exist";
$fl=1;
}
if(empty($_POST['bk']))
{
$er16="balanced km amount must exist";
$fl=1;
}
if(empty($_POST['ps']))
{
$er17="password must exist";
$fl=1;
}
if(empty($_POST['ed']))
{
$er18="enrolldate must exist";
$fl=1;
}
}
$dt=date('Y-m-d');
}
?>
<html>
<head>
<title>student</title>
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
<form name=frm method=post action=student.php enctype='multipart/form-data'>
<center>
<caption>Student's information</caption>
<table cellspacing=10 cellpadding=10>
<tr>
<td>enrollid</td>
<td><input type=number name=eid value=<?php echo $en; ?>><font color=red>*</font><?php echo $er1; ?></td>
</tr>
<tr>
<td>enrolldate</td>
<td><input type=date name=ed value=<?php echo $dt; ?>><font color=red>*</font><?php echo $er17; ?></td>
</tr>
<tr>
<td>name</td>
<td><input type=text name=nm><font color=red>*</font><?php echo $er2; ?></td>
</tr>
<tr>
<td>gender</td>
<td><input type=text name=gen value=<?php echo $gn; ?>><font color=red>*</font><?php echo $er3; ?></td>
</tr>
<tr>
<td>birth date</td>
<td><input type=date name=bd value=<?php echo $dt; ?>><font color=red>*</font><?php echo $er4; ?></td>
</tr>
<tr>
<td>address</td>
<td><input type=text name=addr><font color=red>*</font><?php echo $er5; ?></td>
</tr>
<tr>
<td>contact no</td>
<td><input type=text name=cn><font color=red>*</font><?php echo $er6; ?></td>
</tr>
<tr>
<td>emailid</td>
<td><input type=text name=ei><font color=red>*</font><?php echo $er7; ?></td>
</tr>
<tr>
<td>balance fees</td>
<td><input type=number name=bf value=<?php echo $tf; ?>><font color=red>*</font><?php echo $er12; ?></td>
</tr>
<tr>
<td>batch id</td>
<td><input type=number name=bid value=<?php echo $bi;?>><font color=red>*</font><?php echo $er13; ?></td>
</tr>
<tr>
<td>vehicle class</td>
<td><input type=text name=vc value=<?php echo $vc;?>><font color=red>*</font><?php echo $er14; ?></td>
</tr>
<tr>
<td>exist license</td>
<td><input type=text name=el><font color=red>*</font><?php echo $er15; ?></td>
</tr>
<tr>
<td>new license?</td>
<td>
<input type=radio name=lic value=yes>yes
<input type=radio name=lic value=no>no
</td>
</tr>
<tr>
<td>extra license</td>
<td><input type=text name=exl value=<?php echo $lf;?> ></td>
</tr>
<tr>
<td>balanced km</td>
<td><input type=number name=bk  value=<?php echo $tk;?>><font color=red>*</font><?php echo $er16; ?></td>
</tr>
<tr>
<td>password</td>
<td><input type=password name=ps><font color=red>*</font><?php echo $er17; ?></td>
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
$_SESSION['onenroll']=$_POST['eid'];
$_SESSION['onedate']=$_POST['ed'];
$_SESSION['onename']=$_POST['nm'];
$_SESSION['ongen']=$_POST['gen'];
$_SESSION['onbdate']= $_POST['bd'];
$_SESSION['onaddr']= $_POST['addr'];
$_SESSION['oncont']=$_POST['cn'];
$_SESSION['onemail']=$_POST['ei'];
$_SESSION['onbal']=$_POST['bf'];
$_SESSION['onbatid']=$_POST['bid'];
$_SESSION['onvclass']= $_POST['vc'];
$_SESSION['onel']=$_POST['el'];
$_SESSION['onlic']=$_POST['lic'];
$_SESSION['onextra']=$_POST['exl'];
$_SESSION['onbalk']=$_POST['bk'];
$_SESSION['onpass']=$_POST['ps'];
header("location:http://localhost/driving/uploaded.php");		
}
}
}
?>