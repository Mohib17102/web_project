<?php
$conn=mysqli_connect("localhost","root","","election");
session_start();
if($_SESSION['user_name']==false)
{
header("location:index.php");	
}
?>
<!doctype html>
<html>
<head>
	<style type="text/css">
		
	#dblock
	{
width:250px;
height:120px;
background-color:black;
border:3px solid;
float: left;
margin-left: 50px;
color: white;
	}
#image_area
		{
			width:50%;
			height:120px;	
			display:block;
			margin:0px auto;
			float: left;
		}

	</style>
<script type="text/javascript">

function services()
{
	var name= document.getElementById("name").value;
	var type= document.getElementById("type").value;
	var description= document.getElementById("description").value;
	
	
	if(name=='')
	{
	document.getElementById("ntitle").innerHTML="Enter Name";	
	return false;
	}
	if(name.length<3 || name.length>15)
	{
	document.getElementById("ntitle").innerHTML="name must be greater than 2 or less than 15";	
	return false;
	}
	if(name.match(/^[0-9]+$/))
	{
	document.getElementById("ntitle").innerHTML="Enter text only";	
	return false;
	}
		if(type=='')
	{
	document.getElementById("typetitle").innerHTML="Enter type";	
	return false;
	}
	if(type.length<3 || type.length>25)
	{
	document.getElementById("typetitle").innerHTML="type must be greater than 2 or less than 25";	
	return false;
	}
	if(type.match(/^[0-9]+$/))
	{
	document.getElementById("typetitle").innerHTML="Enter text only";	
	return false;
	}
	
		
		if(description=='')
	{
	document.getElementById("desctitle").innerHTML="Enter Text";	
	return false;
	}
	if(description.length<3 || description.length>100)
	{
	document.getElementById("desctitle").innerHTML="description must be greater than 2 or less than 100";	
	return false;
	}
	if(description.match(/^[0-9]+$/))
	{
	document.getElementById("desctitle").innerHTML="Enter text only";	
	return false;
	}
	
}

</script>
<meta charset="utf-8">
<title>Services</title>
<link href="bootstrap/css/bootstrap.min.css.map" rel="stylesheet" type="text/css">
	<style type="text/css">
	.col-md-8 form table tr td input	
			{
				height:45px;
				border-radius:0px;
				}
		td h4
			{
			color:#367608;	
			font-weight:bold;
			font-family:Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;	
			}
    </style>
</head>
<body>
	<?php 	include("header.php"); 
			include("connection.php"); 
			error_reporting(0);
			
			?>
	  <div class="row" >
           <div class="col-md-2">
            
	<?php 
				include("menu.php");
?>
  	          </div>
  	          <br/>
<br>
<hr/>



    	        <div class="col-md-10">

            		<div class="row">
       					 
    				        <div class="col-md-12">
<p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; margin-left:165px"> <b>Dashboard</b></p>
<hr/>
<?php
			$qry=mysqli_query($conn,"select * from add_candidate ");
			while($row=mysqli_fetch_array($qry))
		{
			$candidate_id=$row['id'];
?> 

<div class="col-md-3" style="border:1px solid;margin-left:80px;margin-bottom: 10px;background-color: silver;height: 350px">
	<div id="image_area">
  		<img src="<?php  echo $path=$row['candidate_image'];?>" width="90%" height="100%" style="margin:5%;border:1px solid" class="img-round"  />
    </div>
    <div id="image_area">
  		<img src="<?php  echo $path1=$row['party_logo'];?>" width="90%" height="100%" style="margin:5%;border:1px solid" class="img-round"  />
    </div>
	  <div style="margin-top:50px;margin-left:0px" class="p">
<table border="1" width="98%" height="100%" style="margin-left: 10px;" >
		<tr>
			&nbsp;<p style="font-size:25px; color:#367608; text-transform:capitalize;text-align: left;">&nbsp;<?php echo $name=$row['name']; ?></p> 
<td style="width: 30%"><p><b>Categary </b></td>
<td style="width: 70%"><?php  echo $cat=$row['categary'];?></td>			

		</tr>
	<tr>
		 
<td><p><b>Party </b></td>
<td><?php  echo $party=$row['party_name'];?></td>			

		</tr>
		<tr>
		 
<td><p><b>Area </b></td>
<td><?php  echo $area=$row['area'];?></td>			

		</tr>

	</table>
	<button class="btn btn-info" style="margin-top: 10px;margin-left: 10px">Total Votes &nbsp;<div class="badge badge-success">
		<?php 
$cdata=mysqli_query($conn,"select * from costed_votes where cid='$candidate_id'");
 echo $candidate_id;
echo $crow=mysqli_num_rows($cdata);


		?>


	</div></button>
	<?php
if(isset($_POST['submit']))
					{
						$id=$_POST['id'];
						$name=$_POST['name'];
					
						$categary=$_POST['categary'];
						$party_name=$_POST['party_name'];
						$area=$_POST['area'];
						$total_votes=$_POST['total_votes'];
						$path=$_POST['path'];
						$path1=$_POST['path1'];
	while($qry=mysqli_query($conn,"insert into candidate_result(idd,id,name,categary,party_name,area,total_votes,path,path1)value('',$id','$name','$categary','$party_name','$area','$total_votes','$path','$path1')"))
	{
		echo "a";
	}

}
	?>
	<form method="post">
		<input type="hidden" name="id" value="<?php echo $candidate_id; ?>"  />
		<input type="hidden" name="name" value="<?php echo $name; ?>" />
		<input type="hidden" name="categary" value="<?php echo $cat; ?>" />
		<input type="hidden" name="party_name" value="<?php echo $party; ?>" />
		<input type="hidden" name="area" value="<?php echo $area; ?>" />
		<input type="hidden" name="total_votes" value="<?php echo $crow; ?>" />
		<input type="hidden" name="path" value="<?php echo $path; ?>" />
		<input type="hidden" name="path1" value="<?php echo $path1; ?>" />
		
	</form>
  		<hr/>

	</div>      
</div>
		<?php } ?>













					</div>
                        </div>
        	                </div>
    	    	                </div>
		<div class="row" style="line-height:50px">
			<div class="col-md-12">

				</div>
					</div>

	<?php
	include("footer.php")
	?>
    </body>
	</html>