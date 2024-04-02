<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
<link href="admin/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">

<style type="text/css">
table tr td
{
	height:45px;
	font-size:20px;
	font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;
	font-size:20px;
}
</style>
</head>

<body>
<?php 	include("header.php");
		error_reporting(0);
	  	include("admin/connection.php"); 
		$conn=mysqli_connect("localhost","root","","election");
		?>
<div class="content">
	<br/>
<p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; text-align:center"> <b>Cantact Us</b></p>
<hr/>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-4">
<center><img src="images/contactus1.jpeg" width="90%" height="100px" class="img-thumbnail"></center>
</div>
<div class="col-md-6">
<?php
			$qry=mysqli_query($conn,"select *  from `contact_us` ");
			$row=mysqli_fetch_array($qry);
	{	
?> 
<table border="0" width="100%" height="300" >

<tr>
<td width="12%"><center><p class="glyphicon glyphicon-home"></p></center></td>
<td width="15%">Address :</td>
<td><?php echo $row['address']; ?> </td>
</tr>

<tr>
<td><center><h3 class="glyphicon-envelope "></h3></center></td>
<td>Email :</td>
<td><?php echo $row['email']; ?></td>
</tr>


<tr>
<td><center><p class="glyphicon glyphicon-phone"></p></center></td>
<td>Cell :</td>
<td><?php echo $row['cell_no']; ?></td>
</tr>


<tr>
<td ><center><p class="glyphicon glyphicon-phone-alt"></p></center></td>
<td>Fax :</td>
<td><?php echo $row['cell_no']; ?></td>
</tr>



<tr>
<td><center><p class="glyphicon glyphicon-phone-alt"></p></center></td>
<td>Telephone :</td>
<td><?php echo $row['phone_no']; ?></td>
</tr>
</table>
<?php }?>
</div> 
<div class="col-md-1"></div>

</div>

<?php include("footer.php"); ?> 

</body>
</html>