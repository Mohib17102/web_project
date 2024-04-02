
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="stylesheet" href="admin/bootstrap/css/bootstrap.css" /> 
	<style type="text/css">
	#image_area
		{
			width:60%;
			height:120px;	
			display:block;
			margin:0px auto;
			float: center;
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
		<div class="content">
        <p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;text-align:center"> <b>Registered Parties</b></p>
<hr/>
		<div class="row"> 
<?php
			$qry=mysqli_query($conn,"select * from `add_candidate` ");
			while($row=mysqli_fetch_array($qry))
		{
?> 

<div class="col-md-2" style="border:1px solid;margin-left:45px;margin-bottom: 10px;background-color: silver;height: 250px">
	
    <div id="image_area">
  		<img src="admin/<?php  echo $row['party_logo'];?>" width="90%" height="100%" style="margin:5%;border:1px solid" class="img-circle"  />
    </div>
	  <div style="margin-top:50px;margin-left:0px" class="p">
<table border="0" width="98%" height="100%" style="margin-left: 10px;" >

	<tr>
		 

<td style="color:black;font-size: 20px;text-align: center;"><?php  echo $row['party_name'];?></td>			

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