<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search</title>
<link rel="stylesheet" type="text/css" href="admin/bootstrap/css/bootstrap.min.css">
<style type="text/css">
      table tr 
        	{
            	color:black;	
             	font-weight:bold;
				font-size:18px;
             	font-family:Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;	
          	}
	</style>
</head>

<body>
<?php include("connection.php");
if($_SESSION['search_data']==true)
{
	echo $searched_title=$_SESSION['search_data'];
	$qry=mysql_query("select * from `food_menu` where `menu_title`='$searched_title'");
	$row=mysql_fetch_array($qry);
	$menu_title=$row['menu_title'];
	$food_name=$row['food_name'];
	$price=$row['price'];
?>
<h1 style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;text-align:center"> You Have Search This Item </h1>
<hr/><hr/>

<table align="center" width="40%" height="100" border="1">	
	<tr style="color:#367608; font-weight:bold; font-size:22px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;text-align:center">
    <td width="50%">Menu Title:</td>
    <td>Price:</td>  
    </tr>
    <tr>
    <?php $qry1=mysql_query("select * from `food_menu` where `menu_title`='$searched_title'"); 
         $row1=mysql_fetch_array($qry1); ?>
    <td align="center"><?php  echo $row1['menu_title'];  ?></td>
    
    <td align="center"><?php echo $row1['price'];  ?></td>  
    </tr>
    <tr>
    <td colspan="2" style="color:#367608; font-weight:bold; font-size:22px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;text-align:center">Food Name:</td>
    </tr>
    <?php
	while($row1=mysql_fetch_array($qry1))
    {
  ?>
 <tr>
    <td colspan="2">
	<ul>
	<li><?php echo $row1['food_name']; ?></li>
    </ul>
    </td>
    </tr>
  <?php } } ?>
    <tr>
  
    </tr>
    </table>
</body>
</html>