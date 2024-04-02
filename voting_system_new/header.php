<?php
error_reporting(0);
session_start();
//include("admin/connection.php");
$conn=mysqli_connect("localhost","root","","election");


if(!$conn)
{
	echo "error in connection";
	
	}
?>

<!doctype html>
<html>
<head>
	<style type="text/css">
	.menu
	{

		margin-left:150px;
	}
		.menu ul li:hover ul li
		{
visibility:visible;
position: relative;
display: inline-block;
overflow: hidden;
		}


	</style>
<meta charset="utf-8">
<title>Header</title>
<link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/header.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="user_header">
<div class="user_logo"><center><a href="index.php"><img src="images/logomain.jpg" width="40%" height="40%" style="margin-top:25px"></a></center></div>
<div class="user_heading">
<p style="font-size:35px; color:#FFFFFF;text-shadow:3px 3px black; margin-top:60px; margin-left:40px;font-family:tahoma;" >Online Electronic Voting System(Pakistan)<br/>
<p style="font-size:25px; color:#FFFFFF;text-shadow:2px 2px black;margin-left:43px;font-family:tahoma;margin-top:-15px">system for easy vote costing</p>
        </p>
</div>
<div class="user_other">

</div>

</div>
<div class="menu">
<ul style="margin-left:20px">
		<li style="border-radius:0px 0px 0px 0px"><a href="index.php">home</a></li>
        
         <li><a href="vote_cost.php">Cost Vote</a></li>
        <!--<li><a href="subject_groups.php">subject groups</a> </li>-->
        <li><a href="all_candidates.php">All Candidates</a> </li>
        <li><a href="parties_registered.php">Parties Registered</a> </li>

	<li><a href="st_signin.php">User SignIn</a></li>
	
 <li style="border-radius:0px 0px 0px 0px;"><a href="admin/index.php">
        Admin sign in

    </a></li>


       

</ul>

</div>
</body>
</html>