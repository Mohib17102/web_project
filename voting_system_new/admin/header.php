<?php
error_reporting(0);
session_start();
$im=$_SESSION['st_name'];
$_SESSION['user_name'];
include("connection.php");
$conn=mysqli_connect("localhost","root","","election");


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/header.css" rel="stylesheet" type="text/css">
<link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="main_header">
<div class="header_logo">  
<center><img src="../images/logomain.jpg" width="30%" height="25%" style="margin-top:10px"></center>
</div>
<div class="header_heading"> 
<p style="font-size:30px; color:#F8F8F8; margin-top:10px; margin-left:40px;font-family:Tahoma;text-shadow:3px 3px black;" >Online Electronic Voting System(Pakistan)</p>

</div>
<div class="header_other">
<center><table width="90%" height="60" border="0" style="margin-top:10px" cellspacing="11">
<tr>
<td width="30%"> <img src="<?php $qry=mysqli_query($conn,"select * from  `signup` where `id`='$im'");	
$row=mysqli_fetch_array($qry);echo $row['path'];?>" width="80%" height="70px"  class="img-circle" style="border:1px solid"></td>
<td width="60%" style="font-family:tahoma;color:#fff;font-size:18px;font-weight:bold"><span style="margin-left:" >
<?php
$qry=mysqli_query($conn,"select * from  `signup`");	
$row=mysqli_fetch_array($qry);
if($_SESSION['user_name']==true)
{
		echo "Welcome Mr"." ".$_SESSION['user_name'];
}
else
{
echo "offline";	
}
				?>

</span> </td>
</tr>
</table>
</br>

<table width="600" height="30px" align="left" border="0" style="margin-left:0px">
<tr>
<td>

&nbsp;&nbsp;&nbsp;&nbsp;
<a href="signout.php">
<button class="btn btn-default btn-lg" style="border-radius: 0px;margin-left: 100px;margin-top: 20px">Sign Out</button></a>


</td>
</tr>
</table>
</center>
</div>
</div>
</body>
</html>