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

			text-transform: capitalize;
			color: black;
		}
	</style>
	<link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php	include("header.php");
		include("admin/connection.php");
		$conn=mysqli_connect("localhost","root","","election");
 ?>
 
		<div class="content" >
        <p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;text-align:center">
        <br> 
<hr/>
		<div class="row">
<?php

			$qry=mysqli_query($conn,"select * from `add_candidate` ");
			while($row=mysqli_fetch_array($qry))
		{
?> 

<div class="col-md-3" style="border:1px solid;margin-left:85px;margin-bottom: 10px;background-color: silver;height: 400px">
	<div id="image_area">
  		<img src="admin/<?php  echo $row['candidate_image'];?>" width="90%" height="100%" style="margin:5%;border:1px solid" class="img-round"  />
    </div>
    <div id="image_area">
  		<img src="admin/<?php  echo $row['party_logo'];?>" width="90%" height="100%" style="margin:5%;border:1px solid" class="img-round"  />
    </div>
	  <div style="margin-top:50px;margin-left:0px" class="p">
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
  		<hr/>

	</div>      
</div>
		<?php } ?>
	</div>
</div>
<?php include("footer.php") ?>
</body>
</html>