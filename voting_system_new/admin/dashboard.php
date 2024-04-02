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



		<div id="dblock">

<p style="text-align:center;margin-top: 20px;font-size: 18px;font-weight: bold;">Registered Candidates</p>
<hr style="background-color:black;height: 2px" />
<p style="text-align:center;margin-top:-10px;font-size: 18px;font-weight: bold;">
	
<?php
$data=mysqli_query($conn,"select * from `add_candidate`");
echo $row=mysqli_num_rows($data);
?>

</p>
      </div>


		<div id="dblock">

<p style="text-align:center;margin-top: 20px;font-size: 18px;font-weight: bold;">Registered Parties</p>
<hr style="background-color:black;height: 2px" />
<p style="text-align:center;margin-top:-10px;font-size: 18px;font-weight: bold;">
	
<?php
$data=mysqli_query($conn,"select * from `add_party`");
echo $row=mysqli_num_rows($data);
?>

</p>
      </div>



		<div id="dblock">

<p style="text-align:center;margin-top: 20px;font-size: 18px;font-weight: bold;">Vote Costed</p>
<hr style="background-color:black;height: 2px" />
<p style="text-align:center;margin-top:-10px;font-size: 18px;font-weight: bold;">
	
<?php
$data=mysqli_query($conn,"select * from `costed_votes`");
echo $row=mysqli_num_rows($data);
?>

</p>
      </div>


		<div id="dblock">

<p style="text-align:center;margin-top: 20px;font-size: 18px;font-weight: bold;">Total Users</p>
<hr style="background-color:black;height: 2px" />
<p style="text-align:center;margin-top:-10px;font-size: 18px;font-weight: bold;">
	
<?php
$data=mysqli_query($conn,"select * from `st_signup`");
echo $row=mysqli_num_rows($data);
?>

</p>
      </div>



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