<?php
$conn=mysqli_connect("localhost","root","","election");
error_reporting(0);
session_start();
$_SESSION['user_name'];
$uarea=$_SESSION['user_area'];
if($_SESSION['st_name']==false)
{
header("location:st_signin.php");	
}

?>

<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="stylesheet" href="admin/bootstrap/css/bootstrap.css" /> 
	<style type="text/css">
	#image_area
		{
			width:50%;
			height:120px;	
			display:block;
			margin:0px auto;
			float: left;
		}
	.p
		{
			background-color:;
			color:#0D9218;	
			font-size:14px;
			font-weight:bold;
			font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;
		}
		.candidate table tr td
		{

			text-transform: capitalize;
			color: black;
		}
	</style>
	<link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php include("header.php");
		error_reporting(0);
	  include("admin/connection.php");
		?>
<div class="content">
	<br/>
	<table width="100%" border="0">
		<tr>
			<td width="30%" align="center"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: blue;font-size:20px;">Welcome! Mr/Ms : <b><?php echo  $_SESSION['user_name']; ?></b></span></td>
			
			<td width="40%"><p style="color:#367608; font-weight:bold; font-size:30px; font-family:gisha, serif;text-align:center;margin: 0px auto"> </p></td>

			<td width="30%">
				<a href="st_signout.php"><button class="btn btn-default btn-lg" style="border-radius: 0px;width: 200px; height: 50px;margin-top:;margin-right:110px;float: right">sign out</button></a>


			</td>
		</tr>
		</table>



<hr/>

		<div class="row"> 
<?php
			$qry=mysqli_query($conn,"select * from `add_candidate` where `area`='$uarea'");
			while($row=mysqli_fetch_array($qry))
		{
?> 

<div class="col-md-3" style="border:1px solid;margin-left:85px;margin-bottom: 10px;background-color: silver;height: 450px">
	<div id="image_area">
  		<img src="admin/<?php  echo $row['candidate_image'];?>" width="90%" height="100%" style="margin:5%;border:1px solid" class="img-round"  />
    </div>
    <div id="image_area">
  		<img src="admin/<?php  echo $row['party_logo'];?>" width="90%" height="100%" style="margin:5%;border:1px solid" class="img-round"  />
    </div>
	  <div style="margin-top:50px;margin-left:0px" class="p">
	  	<div class="candidate">
<table border="1" width="98%" height="100%" style="margin-left: 10px;" >
		<tr>
			&nbsp;<p style="font-size:25px; color:#367608; text-transform:capitalize;text-align: left;">&nbsp;<?php echo $row['name']; ?></p> 
<td style="width: 30%"><p><b>Categary </b></td>
<td style="width: 70%"><?php  echo $row['categary'];?></td>			

		</tr>
	<tr>
		 
<td><p><b>Party </b></td>
<td><?php  echo $row['party_name'];?></td>			

		</tr>
		<tr>
		 
<td><p><b>Area </b></td>
<td><?php  echo $row['area'];?></td>			

		</tr>
			<tr>
		 
<td><p><b>Address </b></td>
<td>Union Council :<?php  echo $row['uc']; ?>,Tehsil :<?php  echo $row['tehsil'];?>,District :<?php  echo $row['district'];?>,Province :<?php  echo $row['province'];?></td>			

		</tr>	


	</table>
</div>

  		<hr/>
<a href="candidate_single.php?csingle=<?php echo $row['id']; ?>"><button class="btn btn-success" style="margin-left: 10px">Cost Vote</button>
	</div>      
</div>
		<?php } ?>
	</div>
</div>
<?php include("footer.php") ?>
</body>
</html>