<!doctype html>
<html>
<head>
<style type="text/css">
#image_area
{
width:200px;
height:200px;
margin:20px;
display:block;	
	
}
</style>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php  include("header.php");
include("admin/connection.php");
 ?>
<div class="content">

<p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;text-align:center"> <b>Gallery</b></p>
<hr/>
<div style="margin-left:50px">
<div class="row">
<?php
$qry=mysql_query("select * from `gallery` ");
while($row=mysql_fetch_array($qry))
{
?> 
<div class="col-md-2" id="image_area">
	<img src="admin/<?php echo $row['image']; ?>" width="100%" height="100%">
	
    <p style=" font-size:18px; margin-top:10px;font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;"><?php echo $row['type']; ?></p>

</div>
<?php } ?>
</div>
</div>
</div>

<?php include ("footer.php"); ?>
</body>
</html>