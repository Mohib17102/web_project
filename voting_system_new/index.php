<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include("header.php"); 
$conn=mysqli_connect("localhost","root","","election");


if(!$conn)
{
	echo "error in connection";
	
	}
	?>
<div class="content">
<div style="margin: 0px auto">
<img src="images/m.png" width="90%" height="400" style="margin-left: 61px;margin-bottom: 20px" />
</div>
</div>
<?php include ("footer.php"); ?>
</body>
</html>