<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<?PHP 
	  include("admin/connection.php");
	  $conn=mysqli_connect("localhost","root","","election");
	  include("header.php") ?>
<div class="content">
<p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;text-align:center"> <br/><b>Notifications</b></p>
<hr/>
	<table border="1" width="90%" align="center">

		<tr style="background-color: grey;color: white;height: 40px;text-align: center">

<td>Title</td>
<td>Description</td>
<td>Date</td>
<td>File</td>
		</tr>
	<?php	
$qry=mysqli_query($conn,"select * from `notification` order by `id` desc");
		while($row=mysqli_fetch_array($qry))
		{
?>
		<tr>

<td><?php echo $row['title']; ?></td>
<td><?php echo $row['description']; ?></td>
<td><?php echo $row['date']; ?></td>

<td><img src="admin/<?php echo $row['path']; ?>" width="50" height="50"/><a href="#" download>File</a></td>
		</tr>
<?php } ?>
	</table>
		</div>
<br/>

<?php include("footer.php"); ?>
</body>
</html>