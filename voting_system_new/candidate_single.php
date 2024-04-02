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
if(isset($_GET['csingle']))
{
$csingle=$_GET['csingle'];

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
		table tr td
		{
height: 40px;
			text-transform: capitalize;
			color: black;
			background-color: none;
		}
	</style>
	<link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php	include("header.php");
		include("admin/connection.php");
		if(isset($_POST['submit']))
		{
$cid=$_POST['cid'];
$cost_by=$_POST['cost_by'];
$qry1=mysqli_query($conn,"select * from costed_votes");
while($row1=mysqli_fetch_array($qry1));
$dcost=$row1['costed_by'];
if(!empty($cost_by))
{
$qry=mysqli_query($conn,"insert into costed_votes(id,cid,costed_by)value('','$cid','$cost_by')");
$message="You Cost The Vote Succesully!";
}
else
{
$message="Enter Your Cnic ! (Required)";

}
		}
 ?>
		

<div class="content">
<p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;text-align:center;margin-left: 450px"> <b>Vote Costing</b> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<a href="st_signout.php"><span class="btn btn-default">sign out</span>
<span style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;margin-left: 300px">
<a href="vote_cost.php"><span class="glyphicon glyphicon-arrow-left "> Back</span></a></span>

</p>

</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: blue;font-size:16px">Welcome! Mr/Ms : <b><?php echo  $_SESSION['user_name']; ?></b></span>
<hr/>

		<div class="row"> 
			<div class="col-md-2"></div>
<?php
			$qry=mysqli_query($conn,"select * from add_candidate where id='$csingle'");
			$row=mysqli_fetch_array($qry);
		
?> 
<div class="col-md-3">
	
<div class="row">
<div class="col-md-6">
  		<img src="admin/<?php  echo $row['candidate_image'];?>" width="90%" height="100%" style="margin:5%;border:1px solid" class="img-circle"  />
  			&nbsp;<p style="font-size:25px; color:#367608; text-transform:capitalize;text-align: center;">&nbsp;<?php echo $row['name']; ?></p> 
    </div>

    	<div class="col-md-6">
  		<img src="admin/<?php  echo $row['party_logo'];?>" width="90%" height="100%" style="margin:5%;border:1px solid" class="img-circle"  />
  		&nbsp;<p style="font-size:25px; color:#367608; text-transform:capitalize;text-align: center;">&nbsp;Party Logo</p> 
    </div>
</div>
</div>
<div class="col-md-4" style="border:1px solid;margin-left:0px;margin-bottom: 10px;background-color: silver;height: 280px">
	
	  <div style="margin-top:10px;margin-left:0px" class="p">
<table border="1" width="98%" height="100%" style="margin-left: 10px;" >
		<tr>
		
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

  		<hr/>
  		<table>
<tr>
	<td>
		<form method="post">
			<input type="hidden" name="cid" class="form-control" placeholder="Enter Cnic" style="width: 260px;height: 50px"  value="<?php echo $cid=$row['id'];?>" />
	<input type="text" name="cost_by" class="form-control" placeholder="Enter Cnic" style="width: 260px;height: 50px" />

</td>
<td>&nbsp;&nbsp;

	<input type="submit" name="submit" value="Cost Vote" class="btn btn-success" style="width: 150px;height: 50px" /> <td>
	</form>

</tr>

  		</table>

	</div> 

</div>
<p style="margin-top:230px;font-weight: bold;">
	&nbsp;&nbsp;

	<?php
			if($qry)
		{
	?>	
		&nbsp;&nbsp;&nbsp;<span style="font-size: 18px"> <?php echo $message;  	?></span>
	<?php 
		}	 
		else
			{
	?>
		&nbsp;&nbsp;&nbsp;<span style="font-size: 18px"> <?php echo $message; ?></span>
	  <?php } ?>


</p>
	</div>

</div>
<?php include("footer.php") ?>
</body>
</html>