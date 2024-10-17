<html>
<body>
<form name=frm method="post" action="uploaded.php" enctype='multipart/form-data'>
<center><table border=1>
<caption>upload proof</caption>
<tr>
<td>photo</td>
<td><input type=file name=file1></td>
<td><input type=submit name=sbm value=psubmit></td>
</tr>
<tr>
<td>age proof</td>
<td><input type=file name=file2></td>
<td><input type=submit name=sbm value=asubmit></td>
</tr>
<tr>
<td>address proof</td>
<td><input type=file name=file3></td>
<td><input type=submit name=sbm value=adsubmit></td>
</tr>
<tr>
<td>card</td>
<td><input type=file name=file4></td>
<td><input type=submit name=sbm value=csubmit></td>
</tr>
</table>
<input type=submit name=sbm value=next>
</center>
</form>
</body>
</html>

<?php
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root","");
mysql_select_db("driving",$cn);
session_start();
$eid=$_SESSION['onenroll'];
$ed=$_SESSION['onedate'];
$nm=$_SESSION['onename'];
$gen=$_SESSION['ongen'];
$bd=$_SESSION['onbdate'];
$addr=$_SESSION['onaddr'];
$cn1=$_SESSION['oncont'];
$ei=$_SESSION['onemail'];
$bf=$_SESSION['onbal'];
$bid=$_SESSION['onbatid'];
$vc=$_SESSION['onvclass'];
$el=$_SESSION['onel'];
$lic=$_SESSION['onlic'];
$exl=$_SESSION['onextra'];
$bk=$_SESSION['onbalk'];
$ps=$_SESSION['onpass'];
$sb=$_POST['sbm'];
if($sb=="psubmit")
{
$name = $_FILES['file1']['name'];
  $target_dir = "docs/";
  $target_file = $target_dir . basename($_FILES["file1"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) )
  {
 
     // Insert record
     $ph=$name;
$_SESSION['ph']=$ph;
      // Upload file
     move_uploaded_file($_FILES['file1']['tmp_name'],$target_dir.$name);

  }
}
else
if($sb=="asubmit")
{
$name = $_FILES['file2']['name'];
  $target_dir = "docs/";
  $target_file = $target_dir . basename($_FILES["file2"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) )
  {
 
     // Insert record
     $ag =$name ;
$_SESSION['ag']=$ag;
  
     // Upload file
     move_uploaded_file($_FILES['file2']['tmp_name'],$target_dir.$name);

  }
}
if($sb=="adsubmit")
{
$name = $_FILES['file3']['name'];
  $target_dir = "docs/";
  $target_file = $target_dir . basename($_FILES["file3"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) )
  {
 
     // Insert record
     $ad=$name;
$_SESSION['ad']=$ad;
  
     // Upload file
     move_uploaded_file($_FILES['file3']['tmp_name'],$target_dir.$name);

  }
}
if($sb=="csubmit")
{
$name = $_FILES['file4']['name'];
  $target_dir = "docs/";
  $target_file = $target_dir . basename($_FILES["file4"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) )
  {
 
     // Insert record
     $cd=$name;
$_SESSION['cd']=$cd;
  
     // Upload file
     move_uploaded_file($_FILES['file4']['tmp_name'],$target_dir.$name);

  }
}
if($sb=="next")
{
$ph=$_SESSION['ph'];
$ag=$_SESSION['ag'];
$ad=$_SESSION['ad'];
$cd=$_SESSION['cd'];
$cn=mysql_connect("localhost","root","");
mysql_select_db("driving",$cn);
$sql="insert into student values('$eid','$ed','$nm','$gen','$bd','$addr','$cn1','$ei','$ph','$ag','$ad','$cd','$bf','$bid','$vc','$el','$lic','$exl','$bk','$ps')";
mysql_query($sql,$cn);
echo "record saved";
header("location:http://localhost/driving/paidfees.php");
}
}
?>